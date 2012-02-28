<?php

/**
 *
 */
class Login extends CI_Controller {

	function index() {
		$data['main_content'] = 'login_form';
		$this -> load -> view('includes/template', $data);
	}

	function validate_credentials() {
		$this -> load -> model('User_model');
		$query = $this -> User_model -> validate();
		if ($query)// if the user's credentials validated...
		{
			$data = array('username' => $this -> input -> post('username'), 'is_logged_in' => true);
			$this -> session -> set_userdata($data);
			redirect('home');
		} else// incorrect username or password
		{
			redirect('login');
		}
	}

}
