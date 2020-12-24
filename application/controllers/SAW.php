<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SAW extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelWP');
		$this->load->model('ModelSAW');
		$this->load->helper('url');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}


	public function index()
	{
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/bobotsaw');
		$this->load->view('component/footer');
	}
	
	public function bobot()
	{
		$data['data'] = $this->ModelSAW->tampil_data_bobot()->result();
		$data['total_pangkat'] = $this->ModelWP->tampil_data_total_pangkat()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/bobot_saw', $data);
		$this->load->view('component/footer');
	}
	
	public function pivot_pangkat_saw(){
		$pangkat = $this->ModelSAW->tampil_data_bobot()->result();
		$array = json_decode(json_encode($pangkat), true);
		$pivot = [];

        for ($i=0; $i < count($array); $i++){
            array_push($pivot, $array[$i]['pangkat_saw']);
		}
		
		$data = array(
			'C1' => $pivot[0],
			'C2' => $pivot[1],
			'C3' => $pivot[2],
			'C4' => $pivot[3],
			'C5' => $pivot[4],
			'C6' => $pivot[5],
			'C7' => $pivot[6],
			'C8' => $pivot[7],
			'C9' => $pivot[8]

		);

		$this->ModelWP->input_data($data,'pivot_pangkat_saw');
        
	}


    
    public function alternatif()
	{
		$data['data'] = $this->ModelWP->tampil_data_alternatif()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/alternatif_saw',$data);
		$this->load->view('component/footer');
	}
    
    public function normalisasi()
	{
		$data['data'] = $this->ModelSAW->tampil_data_normalisasi()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/normalisasi_saw', $data);
		$this->load->view('component/footer');
    }
    
    public function hitung_nilai_v()
	{
		$this->ModelWP->truncate('pivot_pangkat_saw');
		$this->pivot_pangkat_saw();
		$data['data'] = $this->ModelSAW->tampil_data_v()->result();

		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/hasil_saw', $data);
		$this->load->view('component/footer');
	}

	
}
