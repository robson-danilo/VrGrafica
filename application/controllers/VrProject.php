<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VrProject extends CI_Controller {

	public function index()
	{
		$this->load->view('entrada.php');
		
	}

	public function andar1(){
		$this->load->view('main.php');
	}
}
