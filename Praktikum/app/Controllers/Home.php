<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function show()
	{
		$data['nama'] = 'Bulin';
		$title['judul'] = 'Mahasiswa';
		echo view('mahasiswa/header', $title);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer');
	}
	//--------------------------------------------------------------------

}
