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
        $this->db->order_by('NombreCompania','asc');
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

    public function InsertarCliente($email,$telefono,$direccion,$nombre,$compania)
    {
        $data = array('Correo' => $email,'Telefono' => $telefono,'Domicilio' => $direccion,'NombreCompania' => $compania
        ,'NombreContacto' => $nombre);

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function ActualizarCliente($email,$telefono,$direccion,$nombre,$compania,$IdCliente)
    {
        $this->db->set('Correo',$email);
        $this->db->set('Telefono',$telefono);
        $this->db->set('Domicilio',$direccion);
        $this->db->set('NombreCompania',$compania);
        $this->db->set('NombreContacto',$nombre);
        $this->db->where('IdCliente',$IdCliente);
        return $this->db->update($this->table);
    }

    public function ConsultarClientesFactura($IdCliente)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->join('orden_servicio', $this->table.'.IdCliente = orden_servicio.IdCliente ','INNER');
        $this->db->join('paquete_envio', 'orden_servicio.IdOrden = paquete_envio.IdOrden','INNER');
        $this->db->where($this->table.'.IdCliente',$IdCliente);

        $query = $this->db->get();

        return $query->result_array();
    }
}
