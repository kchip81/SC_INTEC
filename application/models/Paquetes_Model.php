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

    public function ConsultarPDF($id)
    {

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('laboratorio', $this->table.'.IdLaboratorio = laboratorio.IdLaboratorio ','INNER');
        $this->db->where($this->table.'.IdPaqueteEnvio',$id);

        $query = $this->db->get();
        return $query->result_array();
    }


    public function ActualizarEstatusPaquete($IdPaqueteOrden,$IdEstatusPaquete,$FechaEstatus,$Fecha)
    {
        $this->db->set('IdEstatusPaquete',$IdEstatusPaquete);
        $this->db->set($Fecha,$FechaEstatus);
        $this->db->where('IdPaqueteEnvio',$IdPaqueteOrden);
        $this->db->update($this->table);

        $this->db->set('IdEstatusPaquete',$IdEstatusPaquete);
        $this->db->where('IdPaqueteEnvio',$IdPaqueteOrden);
        $this->db->update('equipo_orden');

    }

    public function ActualizarPaquete($IdPaquete, $DatosPaquete)
    {
        $this->db->where('IdPaqueteEnvio', $IdPaquete);
        return $this->db->update($this->table,$DatosPaquete);
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

    /*
     * NOMBRE: Consultar Paquetes Abiertos
     * DESCRIPCION: Consultar todos los paquetes cuyo estatos sea distinto a cerrado
     * RETURN: Arreglo de paquetes
     * AUTOR: Constanzo Manuel Basurto Chipolini
     * FECHA: 07/05/2019
     */
    public function ConsultarPaquetesAbiertos()
    {
        $this->db->select($this->table.'.*, Descripcion_lab, DescripcionEstatusPaquete,'. $this->table.'.IdEstatusPaquete');
        $this->db->select('(SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio ='.$this->table.'.IdPaqueteEnvio)as TotalEquiposPaquete');
        $this->db->select('timestampdiff(DAY,FechaRecLab, curdate()) as dias, diasServicios');
        $this->db->join('laboratorio',$this->table.'.IdLaboratorio = laboratorio.IdLaboratorio');
        $this->db->join('catalogoestatuspaquetes',$this->table.'.IdEstatusPaquete = catalogoestatuspaquetes.IdEstatusPaquete');

        $this->db->from($this->table);
        $this->db->where($this->table.'.IdEstatusPaquete <',PQT_CERRADO);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function EliminarPaquete($IdPaqueteEnvio)
    {
        $this->db->where('IdPaqueteEnvio',$IdPaqueteEnvio);
        $this->db->delete($this->table);
    }

    public function ConsutarTotaPaquetesAbiertos()
    {
        $this->db->select('count(*) as total');
        $this->db->from ($this->table);
        $this->db->where('IdEstatusPaquete < 3');
        $query = $this->db->get();

        return $query->row();
    }

    public function ConsultarPaquete($IdPaquete)
    {
      $this->db->select($this->table.'.*, Descripcion_lab,Domicilio,Telefono, DescripcionEstatusPaquete');
      $this->db->from($this->table);
      $this->db->join('laboratorio l', $this->table.'.IdLaboratorio = l.IdLaboratorio');
      $this->db->join('catalogoestatuspaquetes c', $this->table.'.IdEstatusPaquete = c.IdEstatusPaquete');
      $this->db->where('IdPaqueteEnvio', $IdPaquete);

      $query = $this->db->get();

      return $query->row();
    }

    public function ActualizarPaqueteStatus($IdPaqueteOrden, $IdEstatusPaquete)
    {
        $this->db->set('IdEstatusPaquete',$IdEstatusPaquete);
        $this->db->where('IdPaqueteEnvio',$IdPaqueteOrden);
        $this->db->update($this->table);
    }

    public function ConsultarTodosPaquetes()
    {
      $this->db->select($this->table.'.*, Descripcion_lab');
      $this->db->from($this->table);
      $this->db->join('laboratorio l', $this->table.'.IdLaboratorio = l.IdLaboratorio');
      $this->db->join('catalogoestatuspaquetes c', $this->table.'.IdEstatusPaquete = c.IdEstatusPaquete');

      $query = $this->db->get();

      return $query->row();
    }

    public function ConsultarFechaPaquetes()
    {
        $this->db->select('IdPaqueteEnvio,FechaEnv,Descripcion,FechaRecLab');
        $this->db->from($this->table);
        $this->db->where('FechaEnv IS NOT NULL');

        $query = $this->db->get();
        return $query->result_array();
    }

    //put your code here
}
