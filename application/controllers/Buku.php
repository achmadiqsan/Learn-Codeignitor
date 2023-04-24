<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_m','Buku');	
	}

	public function index()
	{
		// code untuk menampilkan semua data :
		$query = $this->Buku->get();

		// code menapilkan data tertentu :
		// $query = $this->Buku_m->get(2);

		$data['header'] = 'Tampil Data Buku';
		$data['buku'] = $query->result();

		// print_r($data);

		// $data = array(
		// 	'header' => 'Tampil Data Buku',
		// 	'buku' => $query->result(),
		// );
		$this->load->view('_header', $data);
		$this->load->view('buku_tampil');
		$this->load->view('_footer');
	}

	public function add()
	{
		$data = array(
			'header' => 'Tambah Data Buku',
		);
		$this->load->view('_header', $data);
		$this->load->view('buku_tambah');
		$this->load->view('_footer');
	}

	public function edit($id = null)
	{
		// echo "Edit Buku" . $id;
		$query = $this->Buku->get($id);
		$data = array(
			'header' => 'Edit Data Buku',
			'buku' => $query->row(),
		);
		$this->load->view('_header', $data);
		$this->load->view('buku_edit');
		$this->load->view('_footer');
	}

	public function proses()
	{
		// echo "Proses";
		// $judul = $_POST['judul'];
		// echo $judul;
		if (isset($_POST['add'])) {
			/* Cara Satu */
			$inputan = $this->input->post(null, TRUE);
			$this->Buku->add($inputan);

			/* Cara Dua */
			/* 
			 * $judul = $this->input->post('judul');
			 * $pengarang = $this->input->post('pengarang');
			 * echo $judul . "<br>" . $pengarang;
			*/

		} else if (isset($_POST['edit'])) {
			// echo "Proses Edit Data";
			$inputan = $this->input->post(null, TRUE);
			$this->Buku->edit($inputan);
		}

		redirect('buku');
	}

	public function del($id = null)
	{
		// echo "Delete Data " . $id;
		$this->Buku->del($id);
		redirect('buku');
	}

}
