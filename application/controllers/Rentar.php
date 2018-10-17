<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentar extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Modelo', 'm');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('pages/que_tipo_de_propiedad_necesitas');
		
    }
    public function agregarTipo($identificador){
		$tipo = array(
			'id' => $identificador,
			'sinv_usuario_id'=> $identificador,
			'tipopropiedad' => $this->input->post('propiedad'),
		);
		$user= array('id' => $identificador );
		$this->m->agregarUser($user);		
		$this->m->agregar($tipo);		
		echo json_encode(array("status" => TRUE));		
	}	

	public function agregarPresupuesto(){
		$presupuesto = array(
			'presupuestomin' => $this->input->post('minimo'),
			'presupuestomax' => $this->input->post('maximo')
		);
		$this->m->agregar($presupuesto);		
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarAmenidades(){
		$amenidad = array(
			'presupuestomin' => $this->input->post('habitaciones'),
		);
		$this->m->agregar($amenidad);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarLugar(){
		$lugar = array(
			'presupuestomin' => $this->input->post('direccion-1'),
		);
		$this->m->agregar($lugar);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarCercano(){
		$cercano = array(
			'presupuestomin' => $this->input->post('parque'),
		);
		$this->m->agregar($cercano);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarUsuario(){
		$usuario = array(
			'presupuestomin' => $this->input->post('nombre'),
		);
		$this->m->agregar($usuario);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarContacto(){
		$contacto = array(
			'presupuestomin' => $this->input->post('nombre'),
		);		
		$this->m->agregar($contacto);
		echo json_encode(array("status" => TRUE));	
	}

	public function agregarTelefono(){
		$telefono = array(
			'presupuestomin' => $this->input->post('codigo'),
		);		
		$this->m->agregar($telefono);
		echo json_encode(array("status" => TRUE));	
	}
}
