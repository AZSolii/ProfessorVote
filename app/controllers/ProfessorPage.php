<?php

class ProfessorPage extends CI_Controller{
	
	function index(){
		$data['main_content'] = 'ProfessorPage';
		$this->load->view('includes/template', $data);
	}
}