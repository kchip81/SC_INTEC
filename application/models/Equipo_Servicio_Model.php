<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo_Servicio_Model extends CI_Model{
  private $table;
  public function __construct()
  {
    parent::__construct();
    $this->table='equipo_servicio';
  }

  public function InsertarServicio($IdServicio,$IdEquipo)
  {
    $datos = array(
      'IdServicio'=>$IdServicio,
      'IdEquipo'=>$IdEquipo
    );

    return $this->db->insert($this->table,$datos);

    // code...
  }

  public function ConsultarNumEquipos($idServicio)
  {
      $this->db->select('COUNT(IdServicio) as NumEquipos');
      $this->db->from($this->table);
      $this->db->where('IdServicio',$idServicio);

      $query = $this->db->get();
      return $query->row();
  }

  public function ConsultarServicioEquipoId($idServicio)
  {
      $this->db->select('*');
      $this->db->from($this->table);
      $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
      $this->db->where('IdServicio',$idServicio);

      $query = $this->db->get();

      return $query->result_array();
  }

  public function ConsultarServicioEquipo($idServicio)
  {
      $this->db->select('Descripcion,NumService');
      $this->db->from($this->table);
      $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
      $this->db->where('IdServicio',$idServicio);

      $query = $this->db->get();

      return $query->result_array();
  }
}
