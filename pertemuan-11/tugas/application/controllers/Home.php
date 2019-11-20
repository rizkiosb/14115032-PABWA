<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	// jika satu satu bisa juga di load di autoload libraries

	public function index()
	{
		$this->load->model("Mahasiswa_model");
		$data['judul'] = "Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view("templates/header", $data);
		$this->load->view("mahasiswa/index", $data);
		$this->load->view("templates/footer");
	}
	function hapus($id)
	{
		$this->Mahasiswa_model->HapusdataMahasiswa($id);
		$this->session->set_flashdata('success', 'dihapus');
		redirect('Home');
	}
}
