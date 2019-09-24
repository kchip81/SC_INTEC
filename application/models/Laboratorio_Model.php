<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Laboratorio_Model
 *
 * @author SigueMED
 */
class Laboratorio_Model extends CI_Model {

    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = "laboratorio";
        $this->load->database();
    }

    public function ConsultarLaboratorio()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->order_by('Descripcion_lab','asc');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarLaboratorioId($id)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.'.IdLaboratorio',$id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function InsertarLaboratorio($Descripcion_lab,$Domicilio,$Telefono,$diasServicios)
    {
        $data = array('Descripcion_lab' => $Descripcion_lab,'Domicilio' => $Domicilio,'Telefono' => $Telefono
        ,'diasServicios' => $diasServicios);

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
