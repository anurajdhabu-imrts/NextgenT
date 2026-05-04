<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = '';
    public string $fromName   = '';
    public string $recipients = '';

    /**
     * The "user agent"
     */
    public string $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    public string $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     */
    public string $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Hostname
     */
    public string $SMTPHost = '';

    /**
     * SMTP Authentication Method
     */
    public string $SMTPAuthMethod = 'login';

    /**
     * SMTP Username
     */
    public string $SMTPUser = '';

    /**
     * SMTP Password
     */
    public string $SMTPPass = '';

    /**
     * SMTP Port
     */
    public int $SMTPPort = 587;

    /**
     * SMTP Timeout (in seconds)
     */
    public int $SMTPTimeout = 60;

    /**
     * Enable persistent SMTP connections
     */
    public bool $SMTPKeepAlive = false;

    /**
     * SMTP Encryption. Either tls or ssl
     */
    public string $SMTPCrypto = 'tls';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public string $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public bool $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal.
     */
    public int $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public string $newline = "\r\n";

    /**
     * Type of mail. Either text or html
     */
    public string $mailType = 'html';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public bool $wordWrap = true;

    /**
     * Character count to wrap at
     */
    public int $wrapChars = 76;

    /**
     * Whether to send as a "BCC batch"
     */
    public bool $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public int $BCCBatchSize = 200;

    /**
     * Whether to send as a "BCC batch"
     */
    public bool $DSN = false;

    public function __construct()
    {
        parent::__construct();

        $this->fromEmail  = env('email.fromEmail', 'reedhigohel563@gmail.com');
        $this->fromName   = env('email.fromName', 'NextgenT Enterprises');
        $this->SMTPHost   = env('email.SMTPHost', 'smtp.gmail.com');
        $this->SMTPUser   = env('email.SMTPUser', 'reedhigohel563@gmail.com');
        $this->SMTPPass   = env('email.SMTPPass', 'bsrsfdimwafickmf');
        $this->SMTPPort   = (int) env('email.SMTPPort', 587);
        $this->SMTPCrypto = env('email.SMTPCrypto', 'tls');
        $this->mailType   = env('email.mailType', 'html');
    }
}
