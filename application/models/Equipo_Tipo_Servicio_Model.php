<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipo_Tipo_Servicio_Model
 *
 * @author SigueMED
 */
class Equipo_Tipo_Servicio_Model extends CI_Model {

    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = "equipo_tipo_servicio";
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

    public function InsertarServicioEquipo($IdEquipo,$IdOrden,$Servicio)
    {
        $data = array('IdEquipo' => $IdEquipo,'IdOrden' => $IdOrden,'Servicio' => $Servicio);

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();
        return $insertId;
    }
    //put your code here
}
