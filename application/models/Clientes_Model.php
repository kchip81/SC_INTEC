<?php

class Clientes_Model extends CI_Model{
    private $table;
    public function __construct()
    {
        $this->table = "cliente";
        $this->tabla = "equipo";
        parent::__construct();
        $this->load->database();

    }
    
    public function ConsultarDataClientes($idCliente)
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('IdCliente',$idCliente);
        
        $query = $this->db->get();
        
        return $query->result_array();
    } 
    
    public function ConsultarClientes()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarTotalOrdenes($id)
    {
        $this->db->select('count(*) as TotalOrdenes');
        $this->db->from('equipo_orden');
        $this->db->join('paquete_envio', 'equipo_orden.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio ','INNER');
        $this->db->where('equipo_orden.IdOrden',$id);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarTotalEquipo($id,$idEnvio)
    {
        $this->db->select('count(*) as TotalEquipo');
        $this->db->from('equipo_orden');
        $this->db->where('equipo_orden.IdOrden',$id);
        $this->db->where('IdPaqueteEnvio',$idEnvio);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarTotalEquipos($id)
    {
        $this->db->select('count(*) as TotalEquipo');
        $this->db->from('equipo_orden');
        $this->db->where('IdOrden',$id);

        $query = $this->db->get();
        return $query->result_array();
    }
}