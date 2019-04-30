<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrdenServicio_Model
 *
 * @author SigueMED
 */
class OrdenServicio_Model extends CI_Model {
    private $table;
    
    public function __construct() {
        parent::__construct();
        
        $this->table = 'orden_servicio';
        $this->load->database();
    }
    
    public function ConsultarOrdenPorId($IdOrden)
    {
        $this->db->select($this->table.'.*, NombreCompania, NombreContacto');
        $this->db->from ($this->table);
        $this->db->join('cliente', $this->table.'.IdCliente = cliente.IdCliente');
        $this->db->where('IdOrden',$IdOrden);
        
        $query = $this->db->get();
        
        return $query->row();
    }
     public function ConsultarEquiposOrdenPaquete($IdOrden, $IdPaquete)
    {
        $this->db->select($this->table.'.*, equipo.Descripcion');
        $this->db->from ($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->where('IdOrden',$IdOrden);
        $this->db->where('IdPaqueteEnvio',$IdPaquete);
        
        $query = $this->db->get();
        
        return $query->result_array();
        
    }
    
//put your code here
}
