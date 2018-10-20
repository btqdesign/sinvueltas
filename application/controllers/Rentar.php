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
		 	echo '<div class="main-wrapper">            
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-1" name="styled-checkbox-1" type="checkbox" value="10" checked>
                            <label for="styled-checkbox-1">| Jardin</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-2" name="styled-checkbox-2" type="checkbox" value="5">
                            <label for="styled-checkbox-2">| Balcones</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-3" name="styled-checkbox-3" type="checkbox" value="3">
                            <label for="styled-checkbox-3">| Amueblado</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-4" name="styled-checkbox-4" type="checkbox" value="13">
                            <label for="styled-checkbox-4">| Terraza / Roof garden</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-5" name="styled-checkbox-5" type="checkbox" value="11">
                            <label for="styled-checkbox-5">| Tengo mascota</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-6" name="styled-checkbox-6" type="checkbox" value="14">
                            <label for="styled-checkbox-6">| Vigilancia</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-7" name="styled-checkbox-7" type="checkbox" value="9">
                            <label for="styled-checkbox-7">| GYM</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" name="styled-checkbox-8" type="checkbox" value="2">
                            <label for="styled-checkbox-8">| Alberca</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-9" name="styled-checkbox-9" type="checkbox" value="12">
                            <label for="styled-checkbox-9">| Salón de usos multiples</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-10" name="styled-checkbox-10" type="checkbox" value="4">
                            <label for="styled-checkbox-10">| Área para niños</label>
                        </div>
                        <div class="check-item">
                            <input class="" id="styled-checkbox-11" type="hidden" value="value11" >
                            <!--<label for="styled-checkbox-11">| m2 construidos</label>-->
                        </div>
                        <div class="check-item">
                            <div class="item-type-number">
                                <input class="" name="tamano" type="hidden" placeholder="MIN">
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="detalles inline-elements ">
		            <div class="item-antiguedad">
		                <input class="styled-checkbox" id="styled-radio-1" name="antiguedad" type="radio" value="5" checked>
		                <label for="styled-radio-1">| NUEVO</label>
		            </div>
		            <div class="item-antiguedad">
		                <input class="styled-checkbox" id="styled-radio-2" name="antiguedad" type="radio" value="3">
		                <label for="styled-radio-2">| 5 a 10 años</label>
		            </div>
		            <div class="item-antiguedad">
		                <input class="styled-checkbox" id="styled-radio-3" name="antiguedad" type="radio" value="1">
		                <label for="styled-radio-3">| 10 a 20 años</label>
		            </div>
		            <div class="item-antiguedad">
		                <input class="styled-checkbox" id="styled-radio-4" name="antiguedad" type="radio" value="6">
		                <label for="styled-radio-4">| + 30 años</label>
		            </div>
		        </div>     
        </div>
        ';
		 }else{
		 	if ($pro_tipo=="departamento") {
		 		echo '<div class="main-wrapper">            
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-1" name="styled-checkbox-1" type="checkbox" value="10" checked>
                            <label for="styled-checkbox-1">| Jardin</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-2" name="styled-checkbox-2" type="checkbox" value="5">
                            <label for="styled-checkbox-2">| Balcones</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-3" name="styled-checkbox-3" type="checkbox" value="3">
                            <label for="styled-checkbox-3">| Amueblado</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-4" name="styled-checkbox-4" type="checkbox" value="13">
                            <label for="styled-checkbox-4">| Terraza / Roof garden</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-5" name="styled-checkbox-5" type="checkbox" value="11">
                            <label for="styled-checkbox-5">| Tengo mascota</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-6" name="styled-checkbox-6" type="checkbox" value="14">
                            <label for="styled-checkbox-6">| Vigilancia</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-7" name="styled-checkbox-7" type="checkbox" value="9">
                            <label for="styled-checkbox-7">| GYM</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" name="styled-checkbox-8" type="checkbox" value="2">
                            <label for="styled-checkbox-8">| Alberca</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-9" name="styled-checkbox-9" type="checkbox" value="12">
                            <label for="styled-checkbox-9">| Salón de usos multiples</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-10" name="styled-checkbox-10" type="checkbox" value="4">
                            <label for="styled-checkbox-10">| Área para niños</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox" value="value11">
                            <label for="styled-checkbox-11">| m2 construidos</label>
                        </div>
                        <div class="check-item">
                            <div class="item-type-number">
                                <input class="" name="tamano" type="number" placeholder="MIN">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detalles inline-elements ">
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-1" name="antiguedad" type="radio" value="5" checked>
                        <label for="styled-radio-1">| NUEVO</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-2" name="antiguedad" type="radio" value="3">
                        <label for="styled-radio-2">| 5 a 10 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-3" name="antiguedad" type="radio" value="1">
                        <label for="styled-radio-3">| 10 a 20 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-4" name="antiguedad" type="radio" value="6">
                        <label for="styled-radio-4">| + 30 años</label>
                    </div>
                </div>          
        </div>';
		 	}
		 }
	}
}
