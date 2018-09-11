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

	public function staff($page="main")
	{
			if($this->session->has_userdata('user_id') &&  $this->session->authority == 2)
			{
				  $this->load->model('SiteModel');
					$data['menus'] = $this->SiteModel->getMenu('staff');
					if($page == "main")
						$data['staff_info'] = $this->SiteModel->getStaffInfo();
					$this->load->view("staff/$page",$data);
			}
	}

	public function logout()
	{		
			$this->session->sess_destroy();
			redirect(site_url());
	}
		
}
