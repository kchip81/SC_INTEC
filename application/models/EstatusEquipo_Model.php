<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstatusEquipo_Model extends CI_Model{
  private $table;
  public function __construct()
  {
    parent::__construct();
    $this->table='estatusequipo';
    //Codeigniter : Write Less Do More
  }

  public function RegistrarEstatusEquipo($IdEquipoOrden,$IdEstatus,$FechaEstatus)
  {
    $EstatusEquipo = array(
      'IdEquipoOrden'=>$IdEquipoOrden,
      'IdEstatusPaquetes'=>$IdEstatus,
      'FechaEstatus'=>$FechaEstatus
    );

    return $this->db->insert($this->table,$EstatusEquipo);

    // code...
  }

}
