<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->page('main_page');

	}

	public function page($name)
	{

		$this->load->model('SiteModel');
		$data['menus'] = $this->SiteModel->getMenu('main');
		$this->load->view($name,$data);
	}

	public function staff_login()
	{
		$user = $_POST["staff_user"];	
		$password = $_POST["password"];	
		$this->load->model('SiteModel');
		$this->SiteModel->staff_login($user,$password);
	}

		
}
