<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('SiteModel');
		$data['menus'] = $this->SiteModel->getMenu('main');
		$this->load->view('main_page',$data);
	}

	public function about()
	{
		$this->load->model('SiteModel');
		$data['menus'] = $this->SiteModel->getMenu('main');
		$this->load->view('about',$data);
	}
	public function service_step()
	{
		$this->load->model('SiteModel');
		$data['menus'] = $this->SiteModel->getMenu('main');
		$this->load->view('service_step',$data);
	}
}
