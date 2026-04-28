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

    /**
     * Get admin details by username
     */
    public function getAdminByUsername($username)
    {
        return $this->db->table('admins')
                        ->where('username', $username)
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
}
