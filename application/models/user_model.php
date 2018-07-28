<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAll() {
        $this->table_name = 'vacancylowo';
        return $this->db->from($this->table_name)->order_by("vacid desc")->limit(10)->get()->result_array();
    }
 
}
 
/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */