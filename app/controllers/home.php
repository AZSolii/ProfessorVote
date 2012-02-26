<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('HomePage');
	}
	
	function learnMore(){
		$this->load->view('LearnMore');
	}
}

