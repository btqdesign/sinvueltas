<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conocerte extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/queremos_conocerte');
		
    }
}
