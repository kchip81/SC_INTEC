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
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('IdCliente',$idCliente);
        
        $query = $this->db->get();

        return $query->result_array();
    } 

    public function ConsultarDatosPaqueteClientes($idOrden)
    {
        $this->db->select('NombreCompania,NombreContacto');
        $this->db->from('orden_servicio');
        $this->db->join('cliente', 'cliente.IdCliente = orden_servicio.IdCliente','INNER');
        $this->db->where('IdOrden',$idOrden);
        
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

    public function ConsultarEquipo($peticion,$IdCliente)
    {
        $this->db->select($this->tabla.'.*');
        $this->db->from($this->tabla);
        $this->db->where('IdCliente',$IdCliente);
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

    public function ConsultarOrdenId($IdOrden)
    {
        $this->db->select('IdOrden');
        $this->db->from('orden_servicio');
        $this->db->order_by('IdOrden', 'DESC');
        $this->db->where('IdOrden',$IdOrden);
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

    public function ConsultarLaboratorio()
    {
        $this->db->select('*');
        $this->db->from('laboratorio');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarOrdenPaquete($idOrden)
    {

        $this->db->select('*');
        $this->db->from('equipo_orden');
        $this->db->join('equipo', 'equipo.IdEquipo = equipo_orden.IdEquipo','INNER');
        $this->db->where('IdOrden',$idOrden);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function InsertarOrdenEnvio($IdEquipoOrden,$IdLaboratorio)
    {
        $data = array('IdEquipoOrden' => $IdEquipoOrden,'IdLaboratorio' => $IdLaboratorio);
        $this->db->insert('paquete_envio',$data);  
        $insertId = $this->db->insert_id();
        return $insertId;  
    }

    public function ConsultarPaqueteEnvio()
    {
        $this->db->select('IdOrden,laboratorio.Descripcion_lab,equipo.IdEquipo,equipo.Descripcion');
        $this->db->from('paquete_envio');
        $this->db->join('equipo_orden', ' paquete_envio.IdEquipoOrden = equipo_orden.IdEquipoOrden','INNER');
        $this->db->join('laboratorio', 'paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');
        $this->db->join('equipo', 'equipo.IdEquipo = equipo_orden.IdEquipo','INNER');
        $this->db->where('IdOrden',$idOrden);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function InsertarPaquete($IdLaboratorio,$Observacion)
    {
        //'IdEquipoOrden' => $IdEquipoOrden,
        $data = array('IdLaboratorio' =>  $IdLaboratorio,'Descripcion' => $Observacion);

        $this->db->insert('paquete_envio',$data);
        
        $insertId = $this->db->insert_id();
        return $insertId;
    } 

    public function ConsultarPaqueteOrden($idOrden)
    {
        $this->db->select('equipo_orden.IdPaqueteEnvio,Descripcion_lab,IdEquipo');
        $this->db->from('equipo_orden');
        $this->db->join('paquete_envio', 'equipo_orden.IdEquipoOrden = paquete_envio.IdEquipoOrden','INNER');
        $this->db->join('laboratorio', 'paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');
        $this->db->where('IdOrden',$idOrden);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarPaqueteOrdenes($idOrden)
    {
        $this->db->select('equipo_orden.IdPaqueteEnvio,Descripcion,IdOrden,NombreCompania,Descripcion_lab,FechaEnv,FechaRecLab,FechaFinalCalLab,FechaRetLab,FechaRecpIntecLab,Estatus');
        $this->db->from('equipo_orden');
        $this->db->join('paquete_envio', 'equipo_orden.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','INNER');
        $this->db->join('laboratorio', 'paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');
        $this->db->join('cliente', 'cliente.IdCliente = equipo_orden.IdOrden','INNER');
        $this->db->where('IdOrden',$idOrden);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ModificarEstatusPaqueteOrdenes($Estatus,$Fecha,$IdPaqueteEnvio,$fecha)
    {
        $Estatus++;

        $data = array(
            'Estatus' => $Estatus,
            $Fecha => $fecha
        );

        $this->db ->where ( 'IdPaqueteEnvio' ,  $IdPaqueteEnvio ); 
        $this->db->update('paquete_envio', $data);
    }

    public function ConsultarEstatus($IdPaqueteEnvio)
    {
        $this->db->select('Estatus');
        $this->db->from('paquete_envio');
        $this->db->where('IdPaqueteEnvio',$IdPaqueteEnvio);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ModificarPaqueteOrdenes($IdPaqueteEnvio,$IdEquipoOrden)
    {
        $data = array(
            'IdPaqueteEnvio' => $IdPaqueteEnvio
        );

        $this->db ->where ( 'IdEquipoOrden' ,  $IdEquipoOrden ); 
        $this->db->update('equipo_orden', $data);
    }
}