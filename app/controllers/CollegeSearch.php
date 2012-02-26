<?php

class CollegeSearch extends CI_Controller{
	
	function index(){
	    $this->load->model('College_model');
        $data['records'] = $this->College_model->getAll();
		$this->load->view('CollegeSearchPage',$data);
		
	}
}