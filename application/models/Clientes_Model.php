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

    public function ConsultarClientes()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarDataClientes($idCliente)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.".IdCliente = '$idCliente'");
        
        $query = $this->db->get();

        return $query->result_array();
    } 

    public function InsertarProducto($Descripcion,$Marca,$Modelo,$NumService, $DivisionMedicion,$AlcanceMedicion,$ClaveId,$IdCliente)
    {
        $data = array('Descripcion' => $Descripcion,'Marca' => $Marca,'Modelo' => $Modelo,'NumService' => $NumService
        ,'ClaveId' => $ClaveId,'AlcanceMedicion' => $AlcanceMedicion,'DivisionMedicion' => $DivisionMedicion,'IdCliente' => $IdCliente);

        return $this->db->insert('equipo',$data);        
    } 
    
    public function InsertarOrdenServicio($IdCliente,$Fecha,$FechaEnvio,$FechaRecibo,$Observaciones)
    {
        $data = array('IdCliente' => $IdCliente,'Fecha' => $Fecha,"FechaEnvio" => $FechaEnvio,
                "FechaRecibo" => $FechaRecibo,"Observaciones" => $Observaciones);

        $this->db->insert('orden_servicio',$data); 
        
        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function InsertarOrdenEquipo($IdEquipo,$IdOrden)
    {
        $data = array('IdEquipo' => $IdEquipo,'IdOrden' => $IdOrden);
        $this->db->insert('equipo_orden',$data);  
        $insertId = $this->db->insert_id();
        return $insertId;  
    }

    public function ConsultarEquipo($peticion)
    {
        $this->db->select($this->tabla.'.*');
        $this->db->from($this->tabla);
        $this->db->where($this->tabla.$peticion);
        
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarOrden($id)
    {
        $this->db->select('*');
        $this->db->from('equipo');
        $this->db->join('equipo_orden', ' equipo_orden.IdEquipo = equipo.IdEquipo','INNER');
        $this->db->where('equipo_orden.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarOrdenCliente($id)
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->join('orden_servicio', 'orden_servicio.IdCliente = cliente.IdCliente','INNER');
        $this->db->where('orden_servicio.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarOrdenId()
    {
        $this->db->select('IdOrden');
        $this->db->from('orden_servicio');
        $this->db->order_by('IdOrden', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarOrdenServicio()
    {
        $this->db->select('IdOrden,Fecha,FechaEnvio,FechaRecibo,NombreCompania,Observaciones');
        $this->db->from('cliente');
        $this->db->join('orden_servicio', 'orden_servicio.IdCliente = cliente.IdCliente','INNER');
        $this->db->order_by('IdOrden', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarLaboratorio()
    {
        $this->db->select('*');
        $this->db->from('laboratorio');
        $query = $this->db->get();

        return $query->result_array();
    }


    public function ConsultarOrdenPaquete()
    {
        $this->db->select('*');
        $this->db->from('orden_servicio');

        $query = $this->db->get();

        return $query->result_array();
    }

    
}