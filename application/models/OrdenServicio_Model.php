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

    public function InsertarOrdenServicio($IdCliente,$Fecha,$FechaEnvio,$FechaRecibo,$Observaciones,$servicioMC)
    {
        $data = array('IdCliente' => $IdCliente,'Fecha' => $Fecha,"FechaEnvio" => $FechaEnvio,
                "FechaRecibo" => $FechaRecibo,"Observaciones" => $Observaciones, "IdEstatusOrden"=>1 , "tipoServicio"=>$servicioMC);

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


    public function ConsultarOrdenMantCalib($tipo)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('NombreCompania,NombreContacto, DescripcionEstatusOrden');
        $this->db->from('cliente');
        $this->db->join($this->table, $this->table.'.IdCliente = cliente.IdCliente','INNER');
        $this->db->join('catalogoestatusorden', $this->table.'.IdEstatusOrden = catalogoestatusorden.IdEstatusOrden');

        if ($tipo==='1')
        {
          $this->db->where($this->table.'.tipoServicio = 1');
        }
        else {
          $this->db->where($this->table.'.tipoServicio = 0');
        }

        $this->db->order_by($this->table.'.IdOrden', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    
    public function ConsultarDatosOrdenesAbiertasCliente($Cerradas,$clienteId)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('NombreCompania,NombreContacto, DescripcionEstatusOrden');
        $this->db->from('cliente');
        $this->db->join($this->table, $this->table.'.IdCliente = cliente.IdCliente','INNER');
        $this->db->join('catalogoestatusorden', $this->table.'.IdEstatusOrden = catalogoestatusorden.IdEstatusOrden');
        $this->db->where('cliente.IdCliente',$clienteId);
  
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


    public function ConsultarDatosOrdenesAbiertasEquipo($Cerradas,$idEquipo)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('NombreCompania,NombreContacto, DescripcionEstatusOrden, equipo.*');
        $this->db->from('cliente');
        $this->db->join($this->table, $this->table.'.IdCliente = cliente.IdCliente','INNER');
        $this->db->join('catalogoestatusorden', $this->table.'.IdEstatusOrden = catalogoestatusorden.IdEstatusOrden');
        $this->db->join('equipo', $this->table.'.IdCliente = equipo.IdCliente','INNER');
        $this->db->where(' equipo.IdEquipo',$idEquipo);

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

    public function EliminarOrden($IdOrden)
    {
        $this->db->where('IdOrden',$IdOrden);
        return $this->db->delete($this->table);
    }

    public function ConsultarTotalCalibra()
    {
        $this->db->select('count(*) as total');
        $this->db->from($this->table);
        $this->db->where(' tipoServicio = 0');
        $query = $this->db->get();

        return $query->row();
    }

    public function ConsultarTotalMant()
    {
        $this->db->select('count(*) as total');
        $this->db->from($this->table);
        $this->db->where(' tipoServicio = 1');
        $query = $this->db->get();

        return $query->row();
    }

    public function ConsutarTotaOrdenesAbiertos()
    {
        $this->db->select('count(*) as total');
        $this->db->from($this->table);
        $this->db->where('IdEstatusOrden > 1 and IdEstatusOrden < 3');
        $query = $this->db->get();

        return $query->row();
    }

    public function ConsutarFechasOrdenes()
    {
        $this->db->select('IdOrden, Fecha as FechaOrden, Observaciones as ObservacionesOrden');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    }
//put your code here
}
