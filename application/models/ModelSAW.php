<?php 
 
class ModelSAW extends CI_Model{
		
    function tampil_data_bobot(){
		  return $this->db->get('v_pangkat_saw');
    }

    function tampil_data_normalisasi(){
		  return $this->db->get('v_normalisasi_saw');
    }

    function tampil_data_v(){
		  return $this->db->get('v_hasil_saw');
    }
    

    function input_data($data,$table){
		  $this->db->insert($table,$data);
    }
    
    function truncate($table){
        $this->db->truncate($table);
    }
}