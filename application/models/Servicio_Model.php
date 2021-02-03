<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio_Model
 *
 * @author SigueMED
 */
class Servicio_Model extends CI_Model {

    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = "servicio";
        $this->load->database();
    }

    public function ConsultarServicioId($Id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->table.'.IdServicio = ' .$Id);
        $this->db->join('cliente',$this->table.'.IdCliente = cliente.IdCliente');
        $query = $this->db->get();

        return $query->result_array();
    }
    
    public function ConsultarServicio()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('cliente',$this->table.'.IdCliente = cliente.IdCliente');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function InsertarServicio($idCliente,$razon,$fecha,$recoge,$prioridad,$requerimiento)
    {
        $data = array('IdCliente' => $idCliente,'RazonSocial' => $razon,'Fecha' => $fecha
        ,'recoge' => $recoge,'Prioridad' => $prioridad,'Requerimiento' => $requerimiento);
        

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function ActualizarLaboratorio($Descripcion_lab,$Domicilio,$Telefono,$diasServicios,$Id)
    {
        $this->db->set('Descripcion_lab',$Descripcion_lab);
        $this->db->set('Domicilio',$Domicilio);
        $this->db->set('Telefono',$Telefono);
        $this->db->set('diasServicios',$diasServicios);
        $this->db->where($this->table.'.IdLaboratorio',$Id);
        return $this->db->update($this->table);
    }
    //put your code here
}
