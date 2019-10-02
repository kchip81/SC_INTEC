<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura_Model extends CI_Model{
  private $table;
  public function __construct()
  {
    parent::__construct();
    $this->table = "facturacliente";
    //Codeigniter : Write Less Do More
  }

  public function CrearNuevaFactura($NuevaFactura)
  {

    $query = $this->db->insert($this->table,$NuevaFactura);

    return $this->db->insert_id();
    // code...
  }

}
