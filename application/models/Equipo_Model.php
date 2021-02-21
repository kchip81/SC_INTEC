<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipo_Model
 *
 * @author SigueMED
 */
class Equipo_Model extends CI_Model {

    private $table;

    public function __construct() {
        parent::__construct();
        $this->table = "equipo";
        $this->load->database();
    }

    public function ConsultarEquipo()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarEquipos($peticion,$IdCliente)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where('IdCliente',$IdCliente);
        $this->db->where($this->table.$peticion);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarIdEquipos($idEquipo)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where('IdEquipo',$idEquipo);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarDatosPeriodos()
    {
        $this->db->select('*');
        $this->db->from('catalogoperiodos');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function InsertarProducto($Descripcion,$Marca,$Modelo,$NumService, $DivisionMedicion,$AlcanceMedicion,$ClaveId,$IdCliente,$MesInicio,$Periodo,$tipoServicio)
    {
        $data = array('Descripcion' => $Descripcion,'Marca' => $Marca,'Modelo' => $Modelo,'NumService' => $NumService
        ,'ClaveId' => $ClaveId,'AlcanceMedicion' => $AlcanceMedicion,'DivisionMedicion' => $DivisionMedicion,'IdCliente' => $IdCliente
        ,'MesInicio' => $MesInicio,'IdPeriodo' => $Periodo,'tipoServicio' => $tipoServicio);

        $this->db->insert($this->table,$data);

        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function ConsultarEquipoOrdenPorId($id)
    {
        $this->db->select($this->table.'.*');
        $this->db->select('Descripcion,Marca, Modelo, NumService, ClaveId');
        $this->db->from($this->table);
        $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
        $this->db->where($this->table.'.IdEquipo',$id);
        $this->db->limit(1);

        return $query->row();
    }

    public function ConsultarEquipoID($id)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.'.IdEquipo',$id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarEquipoPorCliente($idCliente)
    {
        $this->db->select($this->table.'.*,  orden_servicio.IdOrden,equipo_orden.Certificado, date_format(MAX(Fecha),"%M") as ultimoservicio');
        $this->db->from($this->table);
        $this->db->join('equipo_orden',$this->table.'.IdEquipo = equipo_orden.IdEquipo','LEFT');
        $this->db->join('orden_servicio','orden_servicio.IdOrden = equipo_orden.IdOrden','LEFT');
        $this->db->where($this->table.'.IdCliente',$idCliente);
        $this->db->group_by($this->table.'.IdEquipo');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarCertificadoEquipo($id)
    {
        $this->db->select($this->table.'.* ,Certificado,equipo_orden.IdOrden, equipo.IdCliente');
        $this->db->from($this->table);
        $this->db->join('equipo_orden',$this->table.'.IdEquipo = equipo_orden.IdEquipo','LEFT');
        $this->db->join('orden_servicio','orden_servicio.IdOrden = equipo_orden.IdOrden','LEFT');
        $this->db->where('Certificado IS NOT NULL');
        $this->db->where($this->table.'.IdEquipo',$id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarEquipoPorId($ID)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.'.IdEquipo',$ID);
        $query = $this->db->get();

        return $query->row();
    }

    public function ActualizarEquipoPorId($IdEquipo,$ClaveId,$NumService,$Modelo,$Descripcion,$Marca,$AlcanceMedicion,$DivisionMedicion,$Periodo,$MesInicio)
    {
        $equipo = $this->ConsultarEquipoPorId($IdEquipo);

        $this->db->set('ClaveId',$ClaveId);
        $this->db->set('NumService',$NumService);
        $this->db->set('Modelo',$Modelo);
        $this->db->set('Descripcion',$Descripcion);
        $this->db->set('Marca',$Marca);
        $this->db->set('DivisionMedicion',$DivisionMedicion);
        $this->db->set('AlcanceMedicion',$AlcanceMedicion);
        $this->db->set('IdPeriodo',$Periodo);
        $this->db->set('MesInicio',$MesInicio);

        if ($equipo->$MesUltimoServicio == 0)
        {
          $this->db->set('MesUltimoServicio',$MesInicio);
        }
        $this->db->where($this->table.'.IdEquipo',$IdEquipo);
        return $this->db->update($this->table);
    }

    public function ConsultarEquipoClientePorId($id)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.'.IdCliente',$id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ActualizarFechaUltimoServicio($IdEquipo, $MesUltimoServicio)
    {
      $this->db->set('MesUltimoServicio',$MesUltimoServicio);
      $this->db->where('IdEquipo',$IdEquipo);
      return $this->db->update($this->table);
    }

    public function ConsultarPlanEquipoPorCliente($IdCliente){
        $this->db->select("MesInicio, TipoPeriodo, MesUltimoServicio, e.*");
        $this->db->from($this->table." e");
        $this->db->join("catalogoperiodos cp","cp.IdPeriodo = e.IdPeriodo");
        $this->db->where("e.IdCliente",$IdCliente);

        $result = $this->db->get();
        return $result->result_array();

    }


    public function ConsultarPlanAnualPorCliente($IdCliente,$Mes,$OpcionMes)
    {
      $this->db->select("MesInicio, TipoPeriodo, MesUltimoServicio, e.*");
      $this->db->from($this->table." e");
      $this->db->join("catalogoperiodos cp","cp.IdPeriodo = e.IdPeriodo");

      if($OpcionMes==1)
      {
        $this->db->where("cp.IdPeriodo = 1 or
                        (
                          (ValorPeriodo = 3) AND
                          (((MesUltimoServicio+cp.ValorPeriodo) = ".$Mes.")
                          OR ((MesUltimoServicio+(cp.ValorPeriodo*2)) = ".$Mes.")
                            OR ((MesUltimoServicio+(cp.ValorPeriodo*3)) = ".$Mes.")
                            OR ((MesUltimoServicio+(cp.ValorPeriodo*4)) = ".$Mes."))
                        )
                        OR
                        (
                          (ValorPeriodo = 6) AND
                            (((MesUltimoServicio+cp.ValorPeriodo) = ".$Mes.")
                          OR (MesUltimoServicio = ".$Mes."))
                        )
                        OR
                        (
                          (ValorPeriodo = 12) AND (MesUltimoServicio = ".$Mes.")
                        )");
      }
      else {
        $this->db->where("cp.IdPeriodo = 1 or
                        (
                        	(ValorPeriodo = 3) AND
                        	(((MesInicio+cp.ValorPeriodo) = ".$Mes.")
                        	OR ((MesInicio+(cp.ValorPeriodo*2)) = ".$Mes.")
                            OR ((MesInicio+(cp.ValorPeriodo*3)) = ".$Mes.")
                            OR ((MesInicio+(cp.ValorPeriodo*4)) = ".$Mes."))
                        )
                        OR
                        (
                        	(ValorPeriodo = 6) AND
                            (((MesInicio+cp.ValorPeriodo) = ".$Mes.")
                        	OR (MesInicio = ".$Mes."))
                        )
                        OR
                        (
                        	(ValorPeriodo = 12) AND (MesInicio = ".$Mes.")
                        )");
      }

      $result = $this->db->get();

      return $result->result_array();

    }

    public function ConsultarEquiposbyCliente($IdCliente)
    {
        $this->db->select('IdEquipo,Descripcion,NumService');
        $this->db->from($this->table);
        $this->db->where('IdCliente',$IdCliente);

        $query = $this->db->get();

        return $query->result_array();
    }

    //put your code here
}
