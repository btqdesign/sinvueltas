<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/cual_es_tu_presupuesto');
		
    }
}
