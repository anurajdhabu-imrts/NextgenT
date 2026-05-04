<?php

$uploadsDir = 'c:/xampp/htdocs/nextgendoctor/public/uploads/';

if (!is_dir($uploadsDir)) {
    echo "Uploads directory not found.\n";
    exit;
}

$files = scandir($uploadsDir);

foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }

    $filePath = $uploadsDir . $file;
    if (is_file($filePath)) {
        $size = filesize($filePath);
        // Only process files larger than 500KB
        if ($size > 500000) {
            echo "Processing: $file ($size bytes)...\n";
            $info = getimagesize($filePath);
            
            if ($info === false) {
                echo "Skipped: Not a valid image.\n";
                continue;
            }

            $mime = $info['mime'];
            
            if ($mime === 'image/jpeg') {
                $image = imagecreatefromjpeg($filePath);
                if ($image) {
                    // Overwrite with 75% quality
                    imagejpeg($image, $filePath, 75);
                    imagedestroy($image);
                    echo "Compressed JPEG.\n";
                }
            } elseif ($mime === 'image/png') {
                $image = imagecreatefrompng($filePath);
                if ($image) {
                    // Compress PNG (0-9)
                    imagealphablending($image, false);
                    imagesavealpha($image, true);
                    imagepng($image, $filePath, 9);
                    imagedestroy($image);
                    echo "Compressed PNG.\n";
                }
            } else {
                echo "Skipped: Unsupported type $mime.\n";
            }
            
            clearstatcache();
            $newSize = filesize($filePath);
            echo "New size: $newSize bytes.\n\n";
        }
    }
}

echo "Optimization complete.\n";
