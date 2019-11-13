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
        $this->db->select($this->table.'.*, NombreCompania, NombreContacto, Telefono, DescripcionEstatusOrden');
        $this->db->from ($this->table);
        $this->db->join('cliente', $this->table.'.IdCliente = cliente.IdCliente');
        $this->db->join('catalogoestatusorden',$this->table.'.IdEstatusOrden = catalogoestatusorden.IdEstatusOrden');
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

    public function InsertarOrdenServicio($IdCliente,$Fecha,$FechaEnvio,$FechaRecibo,$Observaciones)
    {
        $data = array('IdCliente' => $IdCliente,'Fecha' => $Fecha,"FechaEnvio" => $FechaEnvio,
                "FechaRecibo" => $FechaRecibo,"Observaciones" => $Observaciones, "IdEstatusOrden"=>1);

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();

        return $insertId;
    }

    public function ConsultarOrdenServicioAbiertas($Cerradas)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('NombreCompania,NombreContacto, DescripcionEstatusOrden');
        $this->db->from('cliente');
        $this->db->join($this->table, $this->table.'.IdCliente = cliente.IdCliente','INNER');
        $this->db->join('catalogoestatusorden', $this->table.'.IdEstatusOrden = catalogoestatusorden.IdEstatusOrden');

        if ($Cerradas==='1')
        {
          $this->db->where($this->table.'.IdEstatusOrden >= 3');
        }
        else {
          $this->db->where($this->table.'.IdEstatusOrden < 3');
        }

        $this->db->order_by($this->table.'.IdOrden', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarOrdenCliente($id)
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->join($this->table, $this->table.'.IdCliente = cliente.IdCliente','INNER');
        $this->db->where($this->table.'.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function EliminarEquipoOrdenPorId($IdOrden)
    {
        $this->db->where($this->table.'.IdOrden', $IdOrden);
        $this->db->delete($this->table);
    }
//put your code here
}
