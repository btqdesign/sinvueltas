<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprar extends CI_Controller {

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
			'id_usuario' => $identificador,
		);
		
		$this->m->agregarPropiedad($propiedad);	

		if($this->input->post('styled-checkbox-1')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-1'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-2')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-2'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-3')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-3'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-4')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-4'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-5')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-5'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-6')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-6'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-7')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-7'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-8')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-8'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-9')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-9'),
			);
			$this->m->agregarAmenidad($amenidad);
		};	

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

	public function agregarCercano($identificador){
		if($this->input->post('parque')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('parque'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('restaurante')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('restaurante'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('c_comercial')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('c_comercial'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('oxxo')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('oxxo'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('gym')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('gym'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('supermercado')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('supermercado'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('poco_trafico')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('poco_trafico'),
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('trans_pub')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('trans_pub'),
			);
			$this->m->agregarCercano($cercano);
		};	
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

	public function agregarContacto($identificador){
		$contacto = array(
			'id_usuario'=>$identificador,
			'telefono'=>$this->input->post('numero'),
			'telefonovalidado'=>$this->input->post('confirmacion'),
		);		
		$this->m->agregarContacto($contacto);
		echo json_encode(array("status" => TRUE));	
	}

	public function agregarCodigo(){
		$telefono = array(
			'presupuestomin' => $this->input->post('codigo'),
		);		
		$this->m->agregar($telefono);
		echo json_encode(array("status" => TRUE));	
	}
}