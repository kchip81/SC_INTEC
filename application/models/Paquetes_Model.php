<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paquetes_Model
 *
 * @author SigueMED
 */
class Paquetes_Model extends CI_Model {
    
    private $table;
    
    public function __construct() {
        parent::__construct();
        $this->table = "paquete_envio";
        $this->load->database();
    }
    
    public function ConsultarPaquetesOrdenServicio($IdOrden)
    {
        
        $this->db->select($this->table.'.*, Descripcion_lab, DescripcionEstatusPaquete,'. $this->table.'.IdEstatusPaquete');
        $this->db->select('(SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio ='.$this->table.'.IdPaqueteEnvio)as TotalEquiposPaquete');
        $this->db->join('laboratorio',$this->table.'.IdLaboratorio = laboratorio.IdLaboratorio');
        $this->db->join('catalogoestatuspaquetes',$this->table.'.IdEstatusPaquete = catalogoestatuspaquetes.IdEstatusPaquete');
        
        $this->db->from($this->table);
        $this->db->where('IdOrden',$IdOrden);
        
        $query = $this->db->get();
        
        return $query->result_array();
        
    }
    
    public function ActualizarEstatusPaquete($IdPaqueteOrden,$IdEstatusPaquete,$FechaEstatus,$Fecha)
    {
        $this->db->set('IdEstatusPaquete',$IdEstatusPaquete);
        $this->db->set($Fecha,$FechaEstatus);
        $this->db->where('IdPaqueteEnvio',$IdPaqueteOrden);
        $this->db->update($this->table);
    }
    
    /*
     * NOMBRE: CrearNuevoPaquete
     * DESCRIPCION: Crear un nuevo Paquete para una Orden ($IdORden)
     * RETURN: Id del nuevo paquete
     * AUTOR: Constanzo Manuel Basurto Chipolini
     * FECHA: 30/04/2019
     */
    public function CrearNuevoPaquete($NuevoPaquete)
    {
        $query = $this->db->insert($this->table,$NuevoPaquete);
        
        return $this->db->insert_id();
        
    }
   
    //put your code here
}
