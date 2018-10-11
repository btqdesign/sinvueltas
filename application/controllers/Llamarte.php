<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Llamarte extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/queremos_llamarte');
		
    }
}
