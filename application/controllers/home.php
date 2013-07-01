<?php 
class Home extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('loggedin')== ''){
		$data['title'] = "LogIn";
			$data['content'] = 'LogIn';
		}
		else{
			$data['title'] = "User";
			$data['content'] = 'Login';
		}
		$this->load->view('Main', $data);
		
	}
}