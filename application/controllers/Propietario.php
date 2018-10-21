<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propietario extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/propietario_venta_renta');
		
    }
    public function Eleccion(){	
		if($this->input->post('minimo') == "Vender" )
        {
            echo json_encode(array("status" => TRUE));
        }
        else{
        	echo "ERROR";
        }
	}
}

