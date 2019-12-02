<?php
class Mahasiswa extends CI_Controller
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
		$this->load->view("mahasiswa/mahasiswa");
		$this->load->view("templates/footer");
	}
	function tambah()
	{
		$nama = $this->input->post('nama', true);
		$nim = $this->input->post('nim', true);
		$email = $this->input->post('email', true);
		$jurusan = $this->input->post('jurusan', true);
		$data = array(
			'Nama' => $nama,
			'Nim' => $nim,
			'email' => $email,
			'jurusan' => $jurusan
		);
		// var_dump($data);
		$isi = $this->Mahasiswa_model->Create($data);
		if ($isi) {
			$this->session->set_flashdata('success', 'ditambahkan');
			redirect('Home');
		} else {
			$this->session->set_flashdata('gagal', 'ditambahkan');
			redirect('Home');
		}
	}
}
