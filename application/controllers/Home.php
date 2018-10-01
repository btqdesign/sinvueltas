<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        //$data['url_login'] = site_url('login');
		//$data['url_dashboard'] = site_url('dashboard');
		$this->load->view('pages/home');
		
	}
}
