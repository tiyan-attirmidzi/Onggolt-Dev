<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimony extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    private $table          = 'table_testimony';
    private $id             = 'id';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_active()
    {
        $this->db->from($this->table);
        $this->db->limit(5);  
        $query = $this->db->get();
        return $query->result();
    }
    
}


?>