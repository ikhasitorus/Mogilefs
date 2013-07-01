<?php 
class User extends CI_Controller {
	public function index()
	{
	
		$this->load->model('user_model');
		$data['content'] = 'ListUser';
		$data['title'] = "User";
		$data['userData'] = $this->user_model->getAllUser();
		$this->load->view('Main', $data);
		
	}
	public function create(){
		$data['content'] = 'CreateUser';
		$data['title'] = "Create User";
		$this->load->view('Main', $data);
	}
	public function  createUser()
	{
	    $fullName = $this->input->post('fullName');
	    $userName = $this->input->post('userName');
	    $emailAdress = $this->input->post('emailAdress');
	    $password1 = $this->input->post('password1');
	    $password2 = $this->input->post('password2');
	    if($password1 != $password2){
		$data['title'] = "Create User";
		$data['content'] = 'CreateUser';
		$this->load->view('Main', $data);
	    }else{
		$this->load->model('user_model');
		$this->user_model->insertIntoTableUser($userName,$fullName,  $emailAdress, $password1,"member");
		redirect('user/index');
		
	    }
	}
	public function modify($idUser){
		$this->load->model("user_model");
		$data['content'] = 'ModifyUser';
		$data['title'] = "Modify User";
		$data['userData'] = $this->user_model->getUserWithID($idUser);
		$this->load->view('Main', $data);
	}
	public function  modifyUser($idUser)
	{
	    $fullName = $this->input->post('fullName');
	    $userName = $this->input->post('userName');
	    $emailAdress = $this->input->post('emailAddress');
	    $this->load->model('user_model');
	    $this->user_model->updateDataUser($idUser,$userName,$fullName, $emailAdress);
	     redirect('user/index');
		
	    
	}
	public function  deleteUser($idUser)
	{
	    $this->load->model('user_model');
	    $this->user_model->deleteDataUser($idUser);
	     redirect('user/index');
	}
	public function login()
	{
		
	}
}