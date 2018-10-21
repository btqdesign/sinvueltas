<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vender_propietario extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('ModeloRentar', 'm');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('pages/que_tipo_de_propiedad_ofreces_venta');
		
    }
    public function agregarTipo($identificador){
    	$fecha = date("Y-m-d H:i:s");
		$tipo = array(
			'id' => $identificador,
			'id_usuario'=> $identificador,
			'tipo_busqueda'=>'Compra',
			'tipo_propiedad' => $this->input->post('propiedad'),
			'ultima_modificacion' => $fecha,
		);
		$user= array('id' => $identificador );
		$this->m->agregarUser($user);		
		$this->m->agregar($tipo);	

		echo json_encode(array("status" => TRUE));		
	}	

	public function agregarLugar($identificador){
		$fecha = date("Y-m-d H:i:s");
		$lugar = array(
			'direccioncompleta' => $this->input->post('direccion-1'),
			'id_usuario' => $identificador,
			'ultima_modificacion' => $fecha,
		);
		$lugar2 = array(
			'direccioncompleta' => $this->input->post('direccion-2'),
			'id_usuario' => $identificador,
			'ultima_modificacion' => $fecha,
		);
		$lugar3 = array(
			'direccioncompleta' => $this->input->post('direccion-3'),
			'id_usuario' => $identificador,
			'ultima_modificacion' => $fecha,
		);
		$this->m->agregarLugar($lugar);
		$this->m->agregarLugar($lugar2);
		$this->m->agregarLugar($lugar3);
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarUsuario($identificador){
		$fecha = date("Y-m-d H:i:s");
		$usuario = array(
			'nombre' => $this->input->post('nombre'),
			'apaterno' => $this->input->post('apellido'),
			'ultimamodificacion' => $fecha,
		);

		$correo = array(			
			'id' => $identificador,
			'correo' => $this->input->post('email'),
			'id_usuario'=>$identificador,
		);
		$this->m->agregarContacto($correo);		
		$this->m->updateUsuario(array('id' => $identificador) ,$usuario);
		echo json_encode(array("status" => TRUE));		
	}

	public function updateContacto($identificador){
		$fecha = date("Y-m-d H:i:s");
		$contacto = array(
			'telefono'=>$this->input->post('numero'),
			'telefonovalidado'=>$this->input->post('confirmacion'),
			'ultimamodificacion' => $fecha,
		);
		$this->m->updateContacto(array('id' => $identificador) ,$contacto);
		echo json_encode(array("status" => TRUE));	
		$cod_ver=rand(1000,999999);

		$codigo = array(			
			'id' => $identificador,
			'codigo' => $cod_ver,
			'id_usuario'=>$identificador,
			'fecharegistro'=>$fecha,
		);

		$this->m->agregarCodigo($codigo);
		$verificacion = file_get_contents('https://platform.clickatell.com/messages/http/send?apiKey=SdY3C9dnQCunvXzk2ulX0A==&to=521'.$this->input->post('numero').'&content=Tu+codigo+Sinvueltas+es:+'.$cod_ver.'');
	}


	public function validaCodigo($identificador){
		$fecha = date("Y-m-d H:i:s");
		$codigo = array(
			'ultimamodificacion' => $fecha,
			'estado' =>'activado'
		);
		$resultado=$this->m->validaCodigo(array('codigo' => $this->input->post('codigo')) ,$codigo);

		if($resultado > 0 )
        {
            echo json_encode(array("status" => TRUE));
        }
        else{
        	echo "ERROR";
        }
				
	}
	public function tipoAmenidad($identificador){	
		$consulta   = $this->m->tipoAmenidad($identificador);
		$pro_tipo;
		 foreach($consulta as $key => $val){
		    $pro_tipo= $val->tipo_propiedad;
		 }
		 if ($pro_tipo=="casa") {
		 	$vista=$this->load->view('pages/amenidad_renta_casa');
		 	return $vista;
		 }else{
		 	if ($pro_tipo=="departamento") {
		 		$vista=$this->load->view('pages/amenidad_renta_depto');
		 		return $vista; 
		 	}else{
		 		if ($pro_tipo=="oficina") {
			 		$vista=$this->load->view('pages/amenidad_compra_oficina');
			 		return $vista; 
			 	}
		 	}
		 }
	}
}
