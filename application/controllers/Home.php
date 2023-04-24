<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// echo "Selamat Datang Di Halaman Utama";
		// echo "<br>";
		// echo "<br>";
		// echo "<a href='".site_url('buku')."'><button>View Data Buku</button></a>";

		$data = array(
			'header' => 'Halaman Utama',
			'isi' => 'Selamat Datang Di Halaman Utama',
		);
		$this->load->view('_header', $data);
		$this->load->view('home');
		$this->load->view('_footer');
	}

}
