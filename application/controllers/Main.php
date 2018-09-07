<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('SiteModel');
		$data['menus'] = $this->SiteModel->getMenu('main');
		$this->load->view('main_page',$data);
	}
}
