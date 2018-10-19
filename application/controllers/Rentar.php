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
    	$fecha = date("Y-m-d H:i:s");
		$tipo = array(
			'id' => $identificador,
			'id_usuario'=> $identificador,
			'tipo_busqueda'=>'Renta',
			'tipo_propiedad' => $this->input->post('propiedad'),
			'ultima_modificacion' => $fecha,
		);
		$user= array('id' => $identificador );
		$this->m->agregarUser($user);		
		$this->m->agregar($tipo);	

		echo json_encode(array("status" => TRUE));		
	}	

	public function agregarPresupuesto($identificador){
		$fecha = date("Y-m-d H:i:s");
		$presupuesto = array(
			'presupuestomin' => $this->input->post('minimo'),
			'presupuestomax' => $this->input->post('maximo'),
			'ultima_modificacion' => $fecha,
		);
		$this->m->updatePresupuesto(array('id' => $identificador) ,$presupuesto);		
		echo json_encode(array("status" => TRUE));		
	}

	public function agregarAmenidades($identificador){
		$fecha = date("Y-m-d H:i:s");
		$propiedad = array(
			'id' => $identificador,
			'habitaciones' => $this->input->post('habitaciones'),
			'banos' => $this->input->post('bano'),
			'estacionamientos' => $this->input->post('estacionamiento'),
			'id_usuario' => $identificador,
			'ultima_modificacion' => $fecha,
		);
		
		$this->m->agregarPropiedad($propiedad);	

		if($this->input->post('styled-checkbox-1')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-1'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-2')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-2'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-3')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-3'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-4')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-4'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-5')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-5'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-6')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-6'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-7')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-7'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-8')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-8'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	
		if($this->input->post('styled-checkbox-9')>0){
			$amenidad = array(
				'id_propiedad' => $identificador,
				'id_amenidad' => $this->input->post('styled-checkbox-9'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarAmenidad($amenidad);
		};	

		$antiguedad = array(
			'id_antiguedad' => $this->input->post('antiguedad'),
		);
		$this->m->agregarAntiguedad(array('id' => $identificador) ,$antiguedad);

		$tamano = array(
			'metros_construidos_min' => $this->input->post('tamano'),
		);
		$this->m->agregarTamano(array('id' => $identificador) ,$tamano);

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

	public function agregarCercano($identificador){
		$fecha = date("Y-m-d H:i:s");
		if($this->input->post('parque')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('parque'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('restaurante')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('restaurante'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('c_comercial')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('c_comercial'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('oxxo')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('oxxo'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('gym')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('gym'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('supermercado')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('supermercado'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('poco_trafico')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('poco_trafico'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
		if($this->input->post('trans_pub')>0){
			$cercano = array(
				'id_usuario' => $identificador,
				'id_lugar_cercano' => $this->input->post('trans_pub'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarCercano($cercano);
		};	
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

	public function agregarColonia($identificador){
		$fecha = date("Y-m-d H:i:s");
		if($this->input->post('checkbox-1')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-1'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-2')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-2'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-3')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-3'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-4')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-4'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-5')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-5'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-6')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-6'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-7')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-7'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-8')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-8'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	
		if($this->input->post('checkbox-9')>0){
			$colonia = array(
				'id_usuario' => $identificador,
				'id_colonia' => $this->input->post('checkbox-9'),
				'ultima_modificacion' => $fecha,
			);
			$this->m->agregarColonia($colonia);
		};	

		echo json_encode(array("status" => TRUE));		
	}

	public function validaCodigo($identificador){
		$fecha = date("Y-m-d H:i:s");
		$codigo = array(
			'ultimamodificacion' => $fecha,
			'estado' =>'activado'
		);
		$resultado=$this->m->validaCodigo(array('codigo' => $this->input->post('codigo')) ,$codigo);	
		if($resultado == TRUE )
        {
        	$this->db->update('sinv_valida_telefono' , $data, $where);
            return $query->row();
            echo json_encode(array("status" => TRUE));
        }
        else{
        	echo "ERROR";
        }
				
	}
}
