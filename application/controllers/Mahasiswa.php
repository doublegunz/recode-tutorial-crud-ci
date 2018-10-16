<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   

class Mahasiswa extends CI_Controller {   

	function __construct()   
	{   
		parent::__construct();
		//load helper
		$this->load->helper('url');   
		$this->load->helper('form'); 
		//load library  
		$this->load->library('form_validation');  
		//load model 
		$this->load->model('mahasiswa_model');   
	}   

	public function index()   
	{   
		//ambil data dari database
		$getData = $this->mahasiswa_model->get();

		$data['mahasiswa'] = $getData->result_array();   
		$data['jumlah_data']  = $getData->num_rows();

		//menampilkan 
		$this->load->view('mahasiswa/index',$data);   
	}   

	public function create()   
	{   
		$this->form_validation->set_rules('nim','NIM','required');   
		$this->form_validation->set_rules('nama','Nama','required');   
		$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required');   
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');   
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');   
		$this->form_validation->set_rules('alamat','Alamat','required');   

		if ($this->form_validation->run() === FALSE) {   
			$this->load->view('mahasiswa/add');   
		} else {   
			$data['nim'] = $this->input->post('nim');   
			$data['nama'] = $this->input->post('nama');   
			$data['tempat_lahir']  = $this->input->post('tempat_lahir');   
			$data['tanggal_lahir']  = $this->input->post('tanggal_lahir');   
			$data['jenis_kelamin']  = $this->input->post('jeniskelamin');   
			$data['alamat']   = $this->input->post('alamat');   

			$this->mahasiswa_model->insert($data);   
			
			$data['msg']  =  'Data berhasil disimpan';   
			
			$this->load->view('mahasiswa/notifikasi',$data);   
		}   
	}

	

	public function edit($nim = '')   
	{   
		//Cek apakah ada parameter $nim
		if ('' == $nim) {
			//jika tidak ada, maka alihkan ke halaman daftar mahasiswa
			redirect('mahasiswa');
		}

		//ambil data mahasisa berdasarkan nim
		$data['mahasiswa'] =  $this->mahasiswa_model->get_by_nim($nim)->row_array();

		//load form edit
		$this->load->view('mahasiswa/edit',$data);   
	}   

	public function update()   
	{
		//cek apakah tombol update ditekan
		if ($this->input->post('update')) {

			$nim = $this->input->post('nim');

			//validasi form
			$this->form_validation->set_rules('nim', 'NIM', 'required');
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			
			if ($this->form_validation->run() === false) {
				redirect('mahasiswa/edit/'. $nim);
			}


			$where['nim'] = $nim;
			
			$data = [
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jeniskelamin'),
				'alamat' => $this->input->post('alamat')
			];

			//update data
			$this->mahasiswa_model->update($data, $where);

			$data['msg'] = 'Data berhasil diperbaharui';
			$this->load->view('mahasiswa/notifikasi', $data); 
			
		} else {
			echo "<h3 style='color:red;'>Forbidden access</h3>";
		} 
		  
	}   

	public function hapus($nim = '')   
	{   
		//cek apakah parameter nim ada
		if ('' == $nim) {
			//jika tidak, tampilkan error
			return show_404();
		}

		//hapus data
		$this->mahasiswa_model->delete($nim);
		 
		$data['msg']  =  'Data berhasil dihapus';   
		$this->load->view('mahasiswa/notifikasi',$data);   
	}   
}   
