
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ModeloRentar extends CI_Model
{
	/*Regresara los registros de 
	la base de datos*/
	var $caracteristicas='sinv_caracteristicas_busqueda';
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
	public function agregarPropiedad($data){
		$this->db->insert('sinv_propiedad', $data);
	}

	public function updatePresupuesto($where, $data){
		$this->db->update($this->caracteristicas , $data, $where);
		return $this->db->affected_rows();
	}

	public function updateUsuario($where, $data){
		$this->db->update('sinv_usuario' , $data, $where);
		return $this->db->affected_rows();
	}
	public function updateContacto($where, $data){
		$this->db->update('sinv_contacto_usuario' , $data, $where);
		return $this->db->affected_rows();
	}

	public function agregarLugar($data){
		$this->db->insert('sinv_lugar_frecuente', $data);
	}
	public function agregarAntiguedad($where,$data){
		$this->db->update('sinv_propiedad' , $data, $where);
		return $this->db->affected_rows();
	}
	public function agregarTamano($where,$data){
		$this->db->update('sinv_propiedad' , $data, $where);
		return $this->db->affected_rows();
	}
	public function agregarCercano($data){
		$this->db->insert('sinv_preferencia_sitio', $data);
	}
	public function agregarAmenidad($data){
		$this->db->insert('sinv_amenidades_elegidas', $data);
	}
	public function agregarColonia($data){
		$this->db->insert('sinv_lugar_preferido_vivir', $data);
	}
	public function agregarContacto($data){
		$this->db->insert('sinv_contacto_usuario', $data);
	}
	public function agregarCodigo($data){
		$this->db->insert('sinv_valida_telefono', $data);
	}

	public function validaCodigo($where, $data){
		$query = $this->db->get_where('sinv_valida_telefono',$where);
        if($query->num_rows() > 0 )
        {
        	$this->db->update('sinv_valida_telefono' , $data, $where);
            return $query->num_rows();
        }
	}
}
 ?>