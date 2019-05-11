<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipoOrden_Model
 *
 * @author SigueMED
 */
class EquipoOrden_Model extends CI_Model{
    
    private $table;
    public function __construct() {
        parent::__construct();
        $this->table = "equipo_orden";
        $this->load->database();
    }
    
    public function ConsultarEquiposOrdenPaquete($IdOrden, $IdPaquete=FALSE)
    {
        $this->db->select($this->table.'.*, equipo.Descripcion,equipo.ClaveId, equipo.NumService, equipo.Modelo,equipo.Marca, NombreCompania');
        $this->db->select('Descripcion_lab, DescripcionEstatusPaquete, FechaEnv,FechaRecLab, Factura, Etiqueta, Certificado');
        $this->db->from ($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->join('orden_servicio', $this->table.'.IdOrden = orden_servicio.IdOrden');
        
        $this->db->join('cliente','orden_servicio.IdCliente = cliente.IdCliente');
        $this->db->join('paquete_envio',$this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
        $this->db->join('catalogoestatuspaquetes','equipo_orden.IdEstatusPaquete = catalogoestatuspaquetes.IdEstatusPaquete','left');
        
        $this->db->where($this->table.'.IdOrden',$IdOrden);
        
        if ($IdPaquete!== FALSE)
        {
            $this->db->where($this->table.'.IdPaqueteEnvio',$IdPaquete);
        }
        else
        {
            $this->db->where($this->table.'.IdPaqueteEnvio is not NULL');
        }
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function ConsultarEquiposOrdenSinPaquete()
    {
        $this->db->select($this->table.'.*, equipo.Descripcion,equipo.ClaveId, equipo.NumService, equipo.Modelo,equipo.Marca, NombreCompania');
        
        $this->db->from ($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->join('orden_servicio', $this->table.'.IdOrden = orden_servicio.IdOrden');
        $this->db->join('cliente','orden_servicio.IdCliente = cliente.IdCliente');
        
        $this->db->where($this->table.'.IdPaqueteEnvio',NULL);
        
        
        $query = $this->db->get();
        
        return $query->result_array();
        
    }
    
    public function AsignarPaqueteEquipo($IdPaquete,$IdEquipoOrden)
    {
        $this->db->set('IdPaqueteEnvio',$IdPaquete);
        $this->db->where('IdEquipoOrden',$IdEquipoOrden);
        return $this->db->update($this->table);
        
    }

    public function ConsultarOrden($id)
    {
        $this->db->select('*');
        $this->db->from('equipo');
        $this->db->join($this->table, $this->table.'.IdEquipo = equipo.IdEquipo','INNER');        $this->db->where($this->table.'.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function InsertarOrdenEquipo($IdEquipo,$IdOrden)
    {
        $data = array('IdEquipo' => $IdEquipo,'IdOrden' => $IdOrden);
        $this->db->insert($this->table,$data);  
        $insertId = $this->db->insert_id();
        return $insertId;  
    }
    
    public function ConsultarEquipoOrdenPorId($IdEquipoOrden)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('equipo.Descripcion, Marca, Modelo, NumService, ClaveId');
        $this->db->select('Descripcion_Lab,DescripcionEstatusPaquete');
        $this->db->from($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->join('paquete_envio',$this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
        $this->db->join('catalogoestatuspaquetes',$this->table.'.IdEstatusPaquete= catalogoestatuspaquetes.IdEstatusPaquete');
        $this->db->where($this->table.'.IdEquipoOrden',$IdEquipoOrden);
        $query = $this->db->get();
        
        return $query->row();
    }
    
            
    //put your code here
}
