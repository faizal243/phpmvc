<?php

class About extends Controller {
	public function index($nama = 'Moch.Faizal', $pekerjaan = 'mahasiswa' , $umur = '17 tahun ')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
	    $this->view('templates/header');
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	  public function page()
	{

		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/footer');
	}
}