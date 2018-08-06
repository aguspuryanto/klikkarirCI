<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {
    
    protected $table_name;
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAll($limit="10", $start="0") {
        $this->table_name = 'vacancylowo';

        $this->db->from("vacancylowo v");
        $this->db->join("employers e", "e.empid=v.empid", "left");
        $this->db->order_by("v.vacid desc");
        $this->db->limit($limit, $start);
        // $this->db->start($start);

        return $this->db->get()->result_array();
    }

    public function getDetail($id){
        // $this->table_name = 'vacancylowo';
        $this->db->from("vacancylowo")->where("vacid", $id);

        return $this->db->get()->result_array();
    }

    public function getKategori(){
        // $this->table_name = 'vacancylowo';
		$this->db->select('DISTINCT(kategori)');
        $this->db->from("vacancylowo");

        return $this->db->get()->result_array();
    }
 
}
 
/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */