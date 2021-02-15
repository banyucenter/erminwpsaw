<?php 
 
class ModelWP extends CI_Model{
	  function tampil_data(){
	 	   return $this->db->get('kriteria');
    }

    function tampil_data_pangkat(){
		   return $this->db->get('v_pangkat_wp');
    }

    function tampil_data_bobot(){
		  return $this->db->get('v_total_bobot_wp');
    }

    function tampil_data_total_pangkat(){
		  return $this->db->get('v_total_pangkat_saw');
    }

    function tampil_data_alternatif(){
		return $this->db->get('alternatif');
    }

    function tampil_data_vector_v(){
		return $this->db->get('v_vector_v');
    }
    

    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function truncate($table){
        $this->db->truncate($table);
    }

    function edit_data($where,$table){		
      return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}