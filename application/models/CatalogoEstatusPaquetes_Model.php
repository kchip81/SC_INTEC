<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatalogoEstatusPaquetes_Model extends CI_Model{
  private $table;
  public function __construct()
  {
    parent::__construct();
    $this->table='catalogoestatuspaquetes';
    //Codeigniter : Write Less Do More
  }

  public function ObtenerSiguienteEstatus($IdEstatusActual)
  {
    $this->db->select($this->table.'.*');
    $this->db->from($this->table);
    $this->db->where('IdEstatusPaquete',$IdEstatusActual+1);
    $query = $this->db->get();

    return $query->row();
    // code...
  }

}
