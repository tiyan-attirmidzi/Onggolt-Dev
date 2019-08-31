<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_company extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    private $table          = 'table_company';
    private $id             = 'id';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
}


?>