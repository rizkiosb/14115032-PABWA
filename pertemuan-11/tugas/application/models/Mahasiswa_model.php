<?php
class Mahasiswa_model extends CI_model
{

	public function getAllMahasiswa()
	{
		// echo "ok";
		$query = $this->db->get("user");
		return $query->result_array();
	}
	public function Create($data)
	{
		$input = $this->db->insert('user', $data);
		return $input;
	}
	public function HapusdataMahasiswa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
