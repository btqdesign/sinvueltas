<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Modelo extends CI_Model
{
	/*Regresara los registros de 
	la base de datos*/
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function agregar($data){
		$this->db->insert(' sinv_caracteristicas_busqueda', $data);
	}
}
 ?>