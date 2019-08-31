<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    private $table          = 'table_portfolio';
    private $table_r1       = 'table_portfolio_filter';
    private $table_r2       = 'table_development';
    private $id             = 'id';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_active()
    {
        $this->db->from($this->table);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_active_detail($slug)
    {
        $this->db->where('slug', $slug);
        $this->db->join($this->table_r2, $this->table_r2.'.id'.'='.$this->table.'.id_development');
        $query = $this->db->get($this->table, 1);
        return $query->result();
    }

    public function get_filter()
    {
        $this->db->from($this->table_r1);
        $query = $this->db->get();
        return $query->result();
    }
    
}


?>