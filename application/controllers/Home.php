<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');

		$data = array(
			'users' => $this->home_model->getUsers(),
			'title' => 'Home'
		);
		$this->load->view('welcome_message', $data);
	}

	public function parameter($nama, $kampus) {
		echo "<h1>Selamat Datang {$nama} {$kampus}!</h1>";
	}
}