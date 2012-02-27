<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		 $data['main_content'] = 'HomePage';
		 $this->load->view('includes/template', $data);
	}
	
	function learnMore(){
		$this->load->view('LearnMore');
	}
}

