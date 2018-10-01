<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/home');
		
    }

    public function rentar()
	{
		$this->load->view('pages/que_tipo_de_propiedad_necesitas');
		
    }

    public function propiedad()
	{
		$this->load->view('pages/cual_es_tu_presupuesto');
		
    }

    public function _presupuesto()
	{
		$this->load->view('pages/que_te_haria_sentir_comodo');
		
    }
    
    public function amenidades()
	{
		$this->load->view('pages/en_donde_te_gustaria_vivir');
		
    }

    public function lugares()
	{
		$this->load->view('pages/que_lugares_frecuentas');
		
    }

    public function cerca()
	{
		$this->load->view('pages/que_prefieres_tener_cerca');
		
    }

    public function conocerte()
	{
		$this->load->view('pages/queremos_conocerte');
		
    }
}
