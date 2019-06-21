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
        $this->db->select('Descripcion_lab, DescripcionEstatusPaquete, FechaEnv,FechaRecLab, Factura, Etiqueta, Certificado, orden_servicio.IdCliente');
        $this->db->from ($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->join('orden_servicio', $this->table.'.IdOrden = orden_servicio.IdOrden');
        
        $this->db->join('cliente','orden_servicio.IdCliente = cliente.IdCliente');
        $this->db->join('paquete_envio',$this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
        $this->db->join('catalogoestatuspaquetes','equipo_orden.IdEstatusPaquete = catalogoestatuspaquetes.IdEstatusPaquete','left');
        
        if($IdOrden!== FALSE)
        {
            $this->db->where($this->table.'.IdOrden',$IdOrden);
        }
        
        
        if ($IdPaquete!== FALSE)
        {
            $this->db->where($this->table.'.IdPaqueteEnvio',$IdPaquete);
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
        $this->db->set('IdEstatusPaquete',PQT_CREADO);
        $this->db->where('IdEquipoOrden',$IdEquipoOrden);
        return $this->db->update($this->table);
        
    }

    public function ConsultarOrden($id)
    {
        $this->db->select('*');
        $this->db->from('equipo');
        $this->db->join($this->table, $this->table.'.IdEquipo = equipo.IdEquipo','INNER');        
        $this->db->where($this->table.'.IdOrden',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarTotalEquipoDemora()
    {
        $this->db->select('count(*) as retardo');
        $this->db->from($this->table);
        $this->db->join('paquete_envio', $this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','INNER');        
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');        
        $this->db->where($this->table.'.IdEstatusPaquete = 3 and ADDDATE(equipo_orden.FechaRetLab, INTERVAL diasServicios DAY) < now()');
        
        $query = $this->db->get();
        return $query->row();
    }

    public function ConsultarEquipoDemora()
    {
        $this->db->select('*,equipo_orden.IdOrden as IdOrdenes');
        $this->db->from($this->table);
        $this->db->join('paquete_envio', $this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','INNER');        
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');        
        $this->db->join('equipo','equipo.IdEquipo = equipo_orden.IdEquipo ','INNER');        
        $this->db->join('cliente','cliente.IdCliente = equipo.IdCliente  ','INNER');        
        $this->db->where($this->table.'.IdEstatusPaquete = 3 and ADDDATE(equipo_orden.FechaRetLab, INTERVAL diasServicios DAY) < now()');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ConsultarTotalEquipoOrden()
    {
        $this->db->select('count(*) as total');
        $this->db->from($this->table);
        $this->db->where('IdEstatusPaquete < 6');
        $query = $this->db->get();

        return $query->row();
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
        $this->db->select('Descripcion_Lab,DescripcionEstatusPaquete, IdCliente');
        $this->db->from($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->join('paquete_envio',$this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
        $this->db->join('catalogoestatuspaquetes',$this->table.'.IdEstatusPaquete= catalogoestatuspaquetes.IdEstatusPaquete','left');
        $this->db->where($this->table.'.IdEquipoOrden',$IdEquipoOrden);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    public function ActualizarEstatusEquipo($IdEquipoOrden,$IdNuevoEstatus,$Fecha, $chkFactura=FALSE, $chkEtiqueta=FALSE, $Certificado=FALSE)
    {
        
        
        if ($IdNuevoEstatus !== FALSE)
        {
            $this->db->set('IdEstatusPaquete',$IdNuevoEstatus);
            switch ($IdNuevoEstatus)
            {
                case 4:
                    $this->db->set('FechaFinCalLab',$Fecha);

                    break;
                case 5:
                    $this->db->set('FechaRetLab',$Fecha);
                    break;
                case 6:
                    $this->db->set('FechaRecIntecLab',$Fecha);
                    break;
            }
        }
        
        $this->db->where('IdEquipoOrden',$IdEquipoOrden);
        
        if($chkFactura == '1')
        {
            $this->db->set('Factura',TRUE);
        }
        if($chkEtiqueta =='1')
        {
            $this->db->set('Etiqueta',TRUE);
        }
        
        if($Certificado !== FALSE)
        {
            $this->db->set('Certificado',$Certificado);
        }
        
        return $this->db->update($this->table);
    }
    
    public function ConsultarEquiposPaquetesOrden($IdOrden)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where('IdOrden', $IdOrden);
        $this->db->where('IdPaqueteEnvio IS NOT NULL');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function EliminarEquiposOrden($IdOrden)
    {
        $this->db->where('IdOrden',$IdOrden);
        return $this->db->delete($this->table);
    }
            
    //put your code here
}
