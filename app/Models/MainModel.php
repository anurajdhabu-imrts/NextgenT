<?php

namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getAdminByUsername($username)
    {
        return $this->db->table('admins')
            ->where('username', $username)
            ->get()
            ->getRowArray();
    }

    /**
     * Get admin details by username or email
     */
    public function getAdminByIdentifier($identifier)
    {
        return $this->db->table('admins')
            ->groupStart()
            ->where('username', $identifier)
            ->orWhere('email', $identifier)
            ->groupEnd()
            ->get()
            ->getRowArray();
    }

    /**
     * Simple reusable method to create admin (for setup/seeding)
     */
    public function createAdmin($data)
    {
        return $this->db->table('admins')->insert($data);
    }

    /**
     * Generic method to get all records from a table
     */
    public function getAll($table, $orderBy = 'id', $direction = 'ASC')
    {
        return $this->db->table($table)
            ->orderBy($orderBy, $direction)
            ->get()
            ->getResultArray();
    }

    /**
     * Generic method to count all records in a table
     */
    public function countAll($table)
    {
        return $this->db->table($table)->countAllResults();
    }

    /**
     * Generic method to get a single record by ID
     */
    public function getById($table, $id)
    {
        return $this->db->table($table)
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }

    /**
     * Generic method to insert data
     */
    public function insertData($table, $data)
    {
        return $this->db->table($table)->insert($data);
    }

    /**
     * Generic method to update data
     */
    public function updateData($table, $id, $data)
    {
        return $this->db->table($table)
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Generic method to delete data
     */
    public function deleteData($table, $id)
    {
        return $this->db->table($table)
            ->where('id', $id)
            ->delete();
    }

    /**
     * Get homepage section by key
     */
    public function getSection($key)
    {
        return $this->db->table('homepage_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update homepage section by key
     */
    public function updateSection($key, $data)
    {
        return $this->db->table('homepage_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Get about page section by key
     */
    public function getAboutSection($key)
    {
        return $this->db->table('about_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update about page section by key
     */
    public function updateAboutSection($key, $data)
    {
        return $this->db->table('about_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Get services page section by key
     */
    public function getServicesSection($key)
    {
        return $this->db->table('services_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update services page section by key
     */
    public function updateServicesSection($key, $data)
    {
        return $this->db->table('services_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Get 4M page section by key
     */
    public function getFourMSection($key)
    {
        return $this->db->table('four_m_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update 4M page section by key
     */
    public function updateFourMSection($key, $data)
    {
        return $this->db->table('four_m_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Get Hospital page section by key
     */
    public function getHospitalSection($key)
    {
        return $this->db->table('hospital_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update Hospital page section by key
     */
    public function updateHospitalSection($key, $data)
    {
        return $this->db->table('hospital_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Get Project page section by key
     */
    public function getProjectSection($key)
    {
        return $this->db->table('projects_sections')
            ->where('section_key', $key)
            ->get()
            ->getRowArray();
    }

    /**
     * Update Project page section by key
     */
    public function updateProjectSection($key, $data)
    {
        return $this->db->table('projects_sections')
            ->where('section_key', $key)
            ->update($data);
    }

    /**
     * Contact Content methods
     */
    public function getContactContent()
    {
        return $this->db->table('contact_content')->where('id', 1)->get()->getRowArray();
    }

    public function updateContactContent($data)
    {
        return $this->db->table('contact_content')->where('id', 1)->update($data);
    }

    /**
     * Enquiries methods
     */
    public function insertEnquiry($data)
    {
        return $this->db->table('enquiries')->insert($data);
    }

    public function getEnquiries()
    {
        return $this->db->table('enquiries')->orderBy('created_at', 'DESC')->get()->getResultArray();
    }

    public function searchEnquiries($q)
    {
        return $this->db->table('enquiries')
            ->groupStart()
                ->like('name', $q)
                ->orLike('email', $q)
                ->orLike('company', $q)
                ->orLike('message', $q)
                ->orLike('phone', $q)
                ->orLike('industry_focus', $q)
            ->groupEnd()
            ->orderBy('created_at', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function deleteEnquiry($id)
    {
        return $this->db->table('enquiries')->where('id', $id)->delete();
    }

    public function updateEnquiryStatus($id, $status)
    {
        return $this->db->table('enquiries')->where('id', $id)->update(['status' => $status]);
    }

    public function getRecentEnquiries($limit = 5)
    {
        return $this->db->table('enquiries')
            ->orderBy('created_at', 'DESC')
            ->limit($limit)
            ->get()
            ->getResultArray();
    }

    /**
     * Registration Methods
     */
    public function insertUser($data)
    {
        return $this->db->table('admins')->insert($data);
    }

    public function checkUsernameExists($username)
    {
        return $this->db->table('admins')->where('username', $username)->countAllResults() > 0;
    }

    public function checkEmailExists($email)
    {
        return $this->db->table('admins')->where('email', $email)->countAllResults() > 0;
    }

    public function updateResetToken($email, $token, $expiresAt)
    {
        return $this->db->table('admins')
            ->where('email', $email)
            ->update([
                'reset_token' => $token,
                'reset_expires_at' => $expiresAt
            ]);
    }

    public function getAdminByToken($token)
    {
        return $this->db->table('admins')
            ->where('reset_token', $token)
            ->where('reset_expires_at >', date('Y-m-d H:i:s'))
            ->get()
            ->getRowArray();
    }

    public function resetPasswordID($id, $newPassword)
    {
        return $this->db->table('admins')
            ->where('id', $id)
            ->update([
                'password' => $newPassword,
                'reset_token' => null,
                'reset_expires_at' => null
            ]);
    }

    /**
     * Website Settings
     */
    public function getSettings()
    {
        return $this->db->table('website_settings')->where('id', 1)->get()->getRowArray();
    }

    public function updateSettings($data)
    {
        return $this->db->table('website_settings')->where('id', 1)->update($data);
    }
}
