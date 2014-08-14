<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index(){
		$this->home();
		
		
	}
	public function home(){
		$data['title']="HelloWorld";
		$this->load->view("view_home", $data);
	}
	public function addStuff(){
		$this->load->model("math");
		echo $this->math->add();
	}
}