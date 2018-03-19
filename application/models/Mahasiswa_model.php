<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	function get()
	{
		return $this->db->get('tabel_mahasiswa');
	}

	function get_nim($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->select("*");
		$this->db->from('tabel_mahasiswa');
		return $this->db->get();
	}

	function insert($data)
	{
		$this->db->insert('tabel_mahasiswa', $data);
	}

	function delete($nim)
	{
		$this->db->where('nim', $nim);
		$this->db->delete('tabel_mahasiswa');
	}

	function update_data($data, $syarat)
	{
		$this->db->where($syarat);
		$this->db->update('tabel_mahasiswa', $data);
	}
}
