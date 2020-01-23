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

  public function ConsultarFacturasCliente($IdCliente)
  {
    $this->db->select($this->table.'.*');
    $this->db->select('COUNT(IdEquipoOrden) as TotalEquipos');
    $this->db->from($this->table);
    $this->db->join('equipo_orden',$this->table.'.IdFactura = equipo_orden.Factura');
    $this->db->where($this->table.'.IdCliente',$IdCliente);
    $this->db->group_by('IdFactura,NumFactura,FechaFactura,IdCliente');

    $query = $this->db->get();

    return $query->result_array();
    // code...
  }

}
