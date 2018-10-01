<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/que_lugares_frecuentas');
		
    }
}
