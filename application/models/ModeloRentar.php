
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ModeloRentar extends CI_Model
{
	/*Regresara los registros de 
	la base de datos*/
	var $caracteristicas='sinv_caracteristicas_busqueda'
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function agregar($data){
		$this->db->insert('sinv_caracteristicas_busqueda', $data);
	}

	public function agregarUser($data){
		$this->db->insert('sinv_usuario', $data);
	}

	public function updatePresupuesto($where, $data){
		$this->db->update($this->caracteristicas , $data, $where);
		return $this->db->affected_rows();
	}
}
 ?>