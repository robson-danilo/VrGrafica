<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VrProject extends CI_Controller {

	public function index()
	{
		$this->load->view('entrada.php');
		
	}

	public function andar1(){
		$this->load->view('andar1.php');
	}

	public function andar2(){
		$this->load->view('andar2.php');
	}

	public function andar3(){
		$this->load->view('andar3.php');
	}

	public function hall(){
		$this->load->view('hall.php');
	}
}
