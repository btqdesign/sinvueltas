<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentar extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/que_tipo_de_propiedad_necesitas');
		
    }
}
