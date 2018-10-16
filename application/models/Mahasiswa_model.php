<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	function get()
	{
		//SELECT * FROM tabel_mahasiswa
		return $this->db->get('tabel_mahasiswa');
	}

	function get_by_nim($nim)
	{
		//SELECT * FROM tabel_mahasiswa WHERE nim=$nim
		$this->db->where('nim', $nim);
		$this->db->from('tabel_mahasiswa');
		return $this->db->get();
	}

	function insert($data)
	{
		//insert data ke dalam tabel
		$this->db->insert('tabel_mahasiswa', $data);
	}

	function delete($nim)
	{
		//delete data berdasarkan nim
		$this->db->where('nim', $nim);
		$this->db->delete('tabel_mahasiswa');
	}

	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update('tabel_mahasiswa', $data);
	}
}
