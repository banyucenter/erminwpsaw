<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WP extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelWP');
		$this->load->helper('url');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data['data'] = $this->ModelWP->tampil_data()->result();
		$data['total_bobot'] = $this->ModelWP->tampil_data_bobot()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/home_wp',$data);
		$this->load->view('component/footer');
	}

	public function pangkat()
	{
		$data['data'] = $this->ModelWP->tampil_data_pangkat()->result();
		$data['total_pangkat'] = $this->ModelWP->tampil_data_total_pangkat()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/pangkat_wp',$data);
		$this->load->view('component/footer');
	}

	public function pivot_pangkat_wp(){
		$pangkat = $this->ModelWP->tampil_data_pangkat()->result();
		$array = json_decode(json_encode($pangkat), true);
		$pivot = [];

        for ($i=0; $i < count($array); $i++){
            array_push($pivot, $array[$i]['pangkat_wp']);
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

		$this->ModelWP->input_data($data,'pivot_pangkat');
        
	}

	public function hitung_vector_v(){
		$this->ModelWP->truncate('pivot_pangkat');
		$this->pivot_pangkat_wp();

		$data['data'] = $this->ModelWP->tampil_data_vector_v()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/vector_v',$data);
		$this->load->view('component/footer');

	}

	public function alternatif()
	{
		$data['data'] = $this->ModelWP->tampil_data_alternatif()->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/alternatif_wp',$data);
		$this->load->view('component/footer');
	}

	public function tambah_alternatif()
	{
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/tambah_alternatif');
		$this->load->view('component/footer');
	}

	function aksi_tambah(){
		$nama = $this->input->post('nama');
		$C1 = $this->input->post('C1');
		$C2 = $this->input->post('C2');
		$C3 = $this->input->post('C3');
		$C4 = $this->input->post('C4');
		$C5 = $this->input->post('C5');
		$C6 = $this->input->post('C6');
		$C7 = $this->input->post('C7');
		$C8 = $this->input->post('C8');
		$C9 = $this->input->post('C9');
 
		$data = array(
			'nama' => $nama,
			'C1' => $C1,
			'C2' => $C2,
			'C3' => $C3,
			'C4' => $C4,
			'C5' => $C5,
			'C6' => $C6,
			'C7' => $C7,
			'C8' => $C8,
			'C9' => $C9

			);
		$this->ModelWP->input_data($data,'alternatif');
		redirect('wp/alternatif');
	}

	function edit_kriteria($id){
		$where = array('id' => $id);
		$data['data'] = $this->ModelWP->edit_data($where,'kriteria')->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/edit_kriteria',$data);
		$this->load->view('component/footer');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['data'] = $this->ModelWP->edit_data($where,'alternatif')->result();
		$this->load->view('component/header');
		$this->load->view('component/sidebar'); 
		$this->load->view('component/topbar'); 
		$this->load->view('public/edit_alternatif',$data);
		$this->load->view('component/footer');
	}

	function aksi_ubah_kriteria(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode_kriteria');
		$kriteria = $this->input->post('kriteria');
		$tipe = $this->input->post('tipe');
		$bobot = $this->input->post('bobot');
		$value = $this->input->post('value');
 
		$data = array(
			'kode_kriteria' => $kode,
			'kriteria' => $kriteria,
			'tipe' => $tipe,
			'bobot' => $bobot,
			'value' => $value
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->ModelWP->update_data($where,$data,'kriteria');
		redirect('wp');
	}

	function aksi_ubah(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$C1 = $this->input->post('C1');
		$C2 = $this->input->post('C2');
		$C3 = $this->input->post('C3');
		$C4 = $this->input->post('C4');
		$C5 = $this->input->post('C5');
		$C6 = $this->input->post('C6');
		$C7 = $this->input->post('C7');
		$C8 = $this->input->post('C8');
		$C9 = $this->input->post('C9');
 
		$data = array(
			'nama' => $nama,
			'C1' => $C1,
			'C2' => $C2,
			'C3' => $C3,
			'C4' => $C4,
			'C5' => $C5,
			'C6' => $C6,
			'C7' => $C7,
			'C8' => $C8,
			'C9' => $C9

			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->ModelWP->update_data($where,$data,'alternatif');
		redirect('wp/alternatif');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->ModelWP->hapus_data($where,'alternatif');
		redirect('wp/alternatif');
	}

	
}
