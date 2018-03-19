<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   

class Crud_ci extends CI_Controller {   

	function __construct()   
	{   
		parent::__construct();   
		$this->load->helper('url');   
		$this->load->helper('form');   
		$this->load->library('form_validation');   
		$this->load->model('mahasiswa_model');   
	}   

	public function index()   
	{   
		$data['data_mahasiswa'] =  $this->mahasiswa_model->get()->result_array();   
		$data['jumlah_data']  =  $this->mahasiswa_model->get()->num_rows();   
		$this->load->view('crud_ci/view',$data);   
	}   

	public function form_insert()   
		{   
			$this->form_validation->set_rules('nim','NIM','required');   
			$this->form_validation->set_rules('nama','Nama','required');   
			$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required');   
			$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');   
			$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');   
			$this->form_validation->set_rules('alamat','Alamat','required');   

		if ($this->form_validation->run() === FALSE) {   
			$this->load->view('crud_ci/add');   
		} else {   
			$data['nim'] = $this->input->post('nim');   
			$data['nama'] = $this->input->post('nama');   
			$data['tempat_lahir']  = $this->input->post('tempat_lahir');   
			$data['tanggal_lahir']  = $this->input->post('tanggal_lahir');   
			$data['jenis_kelamin']  = $this->input->post('jeniskelamin');   
			$data['alamat']   = $this->input->post('alamat');   

			$this->mahasiswa_model->insert($data);   
			
			$data['msg']  =  'Data berhasil disimpan';   
			
			$this->load->view('crud_ci/add_berhasil',$data);   
		}   
	}   

	public function ubah($nim)   
	{   
		$data['data_mahasiswa'] =  $this->mahasiswa_model->get_nim($nim)->row_array();   
		$this->load->view('crud_ci/edit',$data);   
	}   

	public function ubah_data()   
	{   
		$syarat['nim'] = $this->input->post('nim');   
		$data['nama'] = $this->input->post('nama');   
		$data['tempat_lahir']  = $this->input->post('tempat_lahir');   
		$data['tanggal_lahir']  = $this->input->post('tanggal_lahir');   
		$data['jenis_kelamin']  = $this->input->post('jeniskelamin');   
		$data['alamat']   = $this->input->post('alamat');   
		$this->mahasiswa_model->update_data($data, $syarat);   
		$data['msg']  =  'Data berhasil diubah';   
		$this->load->view('crud_ci/add_berhasil',$data);   
	}   

	public function hapus($nim)   
	{   
		$data['data_mahasiswa'] =  $this->mahasiswa_model->delete($nim);   
		$data['msg']  =  'Data berhasil dihapus';   
		$this->load->view('crud_ci/add_berhasil',$data);   
	}   
}   
