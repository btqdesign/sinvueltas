<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentar extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('ModeloRentar', 'm');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('pages/que_tipo_de_propiedad_necesitas');
		
    }
    public function agregarTipo($identificador){
		$tipo = array(
			'id' => $identificador,
			'id_usuario'=> $identificador,
			'tipo_propiedad' => $this->input->post('propiedad'),
		);
		$user= array('id' => $identificador );
		$this->m->agregarUser($user);		
		$this->m->agregar($tipo);		
		echo json_encode(array("status" => TRUE));		
	}	

	public function agregarPresupuesto($identificador){
		$presupuesto = array(
			'presupuestomin' => $this->input->post('minimo'),
			'presupuestomax' => $this->input->post('maximo')
		);
		$this->m->updatePresupuesto(array('id' => $identificador) ,$presupuesto);		
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarAmenidades($identificador){
		$propiedad = array(
			'id' => $identificador,
			'habitaciones' => $this->input->post('habitaciones'),
			'banos' => $this->input->post('bano'),
			'estacionamientos' => $this->input->post('estacionamiento'),
		);
		$this->m->agregarPropiedad($propiedad);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarLugar($identificador){
		$lugar = array(
			'direccioncompleta' => $this->input->post('direccion-1'),
			'id_usuario' => $identificador,
		);
		$lugar2 = array(
			'direccioncompleta' => $this->input->post('direccion-2'),
			'id_usuario' => $identificador,
		);
		$lugar3 = array(
			'direccioncompleta' => $this->input->post('direccion-3'),
			'id_usuario' => $identificador,
		);
		$this->m->agregarLugar($lugar);
		$this->m->agregarLugar($lugar2);
		$this->m->agregarLugar($lugar3);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarCercano(){
		$cercano = array(
			'presupuestomin' => $this->input->post('parque'),
		);
		$this->m->agregar($cercano);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarUsuario($identificador){
		$usuario = array(
			'nombre' => $this->input->post('nombre'),
			'apaterno' => $this->input->post('apellido'),
		);
		$this->m->updateUsuario(array('id' => $identificador) ,$usuario);		
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarContacto(){
		$contacto = array(
			'nombre' => $this->input->post('nombre'),
			'apaterno' => $this->input->post('apellido'),
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
