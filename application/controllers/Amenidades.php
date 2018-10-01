<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amenidades extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/en_donde_te_gustaria_vivir');
		
    }
}
