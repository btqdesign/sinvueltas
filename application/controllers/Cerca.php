<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerca extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/que_prefieres_tener_cerca');
		
    }
}
