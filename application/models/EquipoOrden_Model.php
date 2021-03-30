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

    // public function ConsultarEquiposOrden($IdOrden)
    // {
    //     $this->db->select($this->table.'.*, equipo.Descripcion,equipo.ClaveId, equipo.NumService, equipo.Modelo,equipo.Marca, NombreCompania');
    //     $this->db->select('Descripcion_lab, DescripcionEstatusPaquete, FechaEnv,FechaRecLab, Factura, Etiqueta, Certificado, orden_servicio.IdCliente, equipo_orden.IdPaqueteEnvio');
    //     $this->db->from ($this->table);
    //     $this->db->join('equipo',$this->table.'.IdEquipo = equipo.IdEquipo');
    //     $this->db->join('orden_servicio', $this->table.'.IdOrden = orden_servicio.IdOrden');
    //
    //     $this->db->join('cliente','orden_servicio.IdCliente = cliente.IdCliente');
    //     $this->db->join('paquete_envio',$this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
    //     $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
    //     $this->db->join('catalogoestatuspaquetes','equipo_orden.IdEstatusPaquete = catalogoestatuspaquetes.IdEstatusPaquete','left');
    //
    //     if($IdOrden!== FALSE)
    //     {
    //         $this->db->where($this->table.'.IdOrden',$IdOrden);
    //     }
    //
    //     $query = $this->db->get();
    //
    //     return $query->result_array();
    // }

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
        $this->db->update($this->table);

        $this->db->select ('IdEstatusOrden, eo.IdOrden');
        $this->db->from('equipo_orden eo');
        $this->db->join('orden_servicio os','os.IdOrden = eo.IdOrden');
        $this->db->where('IdEquipoOrden',$IdEquipoOrden);

        $query = $this->db->get();
        $Orden = $query->row();

        $IdEstatusOrden = $Orden->IdEstatusOrden;
        log_message("debug","ASIGNARPAQUETEEQUIPO: IdEstatusOrden=>".$IdEstatusOrden);
        $IdOrden = $Orden->IdOrden;

        if ($IdEstatusOrden == 1)
        {
          $this->db->set('IdEstatusOrden',2);
          $this->db->where('IdOrden',$IdOrden);
          $this->db->update('orden_servicio');
        }

    }

    public function ConsultarOrden($id)
    {
        $this->db->select('*,(select Servicio from equipo_tipo_servicio where IdOrden = '.$id.' and equipo_tipo_servicio.IdEquipo = equipo.IdEquipo) AS servicio ');
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


    public function ConsultarPDF($id)
    {

        $this->db->select(' equipo.*,cliente.NombreCompania,equipo_orden.IdOrden as ID');
        $this->db->from($this->table);
        $this->db->join('paquete_envio', $this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','INNER');
        $this->db->join('equipo', 'equipo_orden.IdEquipo = equipo.IdEquipo','INNER');
        $this->db->join('cliente', 'cliente.IdCliente = equipo.IdCliente','INNER');
        $this->db->where($this->table.'.IdPaqueteEnvio',$id);

        $query = $this->db->get();
        return $query->result_array();

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
                    $SetFechaServicio = true;

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

    public function EliminarEquipoPorIdPaquete($idEquipo ,$IdOrden)
    {
      $this->db->where($this->table.'.IdEquipo', $idEquipo);
      $this->db->where('IdOrden',$IdOrden);
      $this->db->delete($this->table);
    }

    public function EliminarEquipodelPaquete($idEquipo ,$IdOrden)
    {
      $this->db->set('IdPaqueteEnvio',null);
      $this->db->where($this->table.'.IdEquipo', $idEquipo);
      $this->db->where('IdOrden',$IdOrden);

      return $this->db->update($this->table);
    }

    public function ConsultarNumEquiposOrden($Id){

      $this->db->select('COUNT(IdEquipo) as numequipo');
      $this->db->from($this->table);
      $this->db->where('IdPaqueteEnvio', $Id);

      $query = $this->db->get();

      return $query->row();
    }

    function ConsultarNumOrdenEquipo($Id){
      $this->db->select('COUNT(IdEquipo) as numequipo');
      $this->db->from($this->table);
      $this->db->where('IdOrden', $Id);

      $query = $this->db->get();

      return $query->row();
  }

    public function ConsultarEquiposPaquetes($id)
    {

        $this->db->select($this->table.'.*, equipo.*,cliente.NombreCompania,equipo_orden.IdOrden as ID, DescripcionEstatusPaquete, c.IdEstatusPaquete');
        $this->db->select('timestampdiff(DAY,paquete_envio.FechaRecLab, curdate()) as dias, diasServicios');
        $this->db->select('NumFactura');
        $this->db->from($this->table);
        $this->db->join('paquete_envio', $this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','INNER');
        $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','INNER');
        $this->db->join('equipo', 'equipo_orden.IdEquipo = equipo.IdEquipo','INNER');
        $this->db->join('cliente', 'cliente.IdCliente = equipo.IdCliente','INNER');
        $this->db->join('facturacliente',$this->table.'.Factura = facturacliente.IdFactura','left');
        $this->db->join('catalogoestatuspaquetes c',$this->table.'.IdEstatusPaquete = c.IdEstatusPaquete','INNER');
        $this->db->where($this->table.'.IdPaqueteEnvio',$id);

        $query = $this->db->get();
        return $query->result_array();

    }

    public function ConsultarEquiposOrden($IdOrden)
    {
      $this->db->select($this->table.'.*, equipo.*,cliente.NombreCompania,equipo_orden.IdOrden as ID, DescripcionEstatusPaquete, c.IdEstatusPaquete');
      $this->db->select('timestampdiff(DAY,paquete_envio.FechaRecLab, curdate()) as dias, diasServicios');
      $this->db->select('NumFactura');
      $this->db->from($this->table);
      $this->db->join('paquete_envio', $this->table.'.IdPaqueteEnvio = paquete_envio.IdPaqueteEnvio','left');
      $this->db->join('laboratorio','paquete_envio.IdLaboratorio = laboratorio.IdLaboratorio','left');
      $this->db->join('equipo', 'equipo_orden.IdEquipo = equipo.IdEquipo','INNER');
      $this->db->join('cliente', 'cliente.IdCliente = equipo.IdCliente','INNER');
      $this->db->join('facturacliente',$this->table.'.Factura = facturacliente.IdFactura','left');
      $this->db->join('catalogoestatuspaquetes c',$this->table.'.IdEstatusPaquete = c.IdEstatusPaquete','left');
      $this->db->where($this->table.'.IdOrden',$IdOrden);

      $query = $this->db->get();
      return $query->result_array();

      // code...
    }
    public function GuardarCertificadoEquipo($IdEquipoOrden,$NombreArchivoCertificado)
    {

      $this->db->set('Certificado',$NombreArchivoCertificado);
      $this->db->where('IdEquipoOrden',$IdEquipoOrden);
      return $this->db->update($this->table);
      // code...
    }

    public function RegistrarEstatusEquipo($IdEquipoOrden,$NuevoEstatus,$FechaEstatus)
    {

      $this->db->set('IdEstatusPaquete',$NuevoEstatus);
      $this->db->where('IdEquipoOrden',$IdEquipoOrden);

      $this->db->update($this->table);

      $this->load->model('EstatusEquipo_Model');
      $this->EstatusEquipo_Model->RegistrarEstatusEquipo($IdEquipoOrden,$NuevoEstatus,$FechaEstatus);

      $this->db->select('IdPaqueteEnvio, IdOrden');
      $this->db->from($this->table);
      $this->db->where('IdEquipoOrden',$IdEquipoOrden);

      $query = $this->db->get();

      $IdPaqueteEnvio = $query->row();

      $this->db->select('MIN(IdEstatusPaquete) as minEstatusPaquete');
      $this->db->from($this->table);
      $this->db->where('IdPaqueteEnvio',$IdPaqueteEnvio->IdPaqueteEnvio);
      $query = $this->db->get();

      $MinEstatusPaquete = $query->row();

      if ($MinEstatusPaquete->minEstatusPaquete==7)
      {
        $this->db->set('IdEstatusPaquete',7);
        $this->db->where('IdPaqueteEnvio',$IdPaqueteEnvio->IdPaqueteEnvio);
        $this->db->update('paquete_envio');
      }



      $this->db->select('MIN(IdEstatusPaquete) as minEstatusOrden');
      $this->db->from($this->table);
      $this->db->where('IdOrden',$IdPaqueteEnvio->IdOrden);
      $query = $this->db->get();

      $MinEstatusOrden = $query->row();

      if ($MinEstatusOrden->minEstatusOrden==7)
      {
        $this->db->set('IdEstatusOrden',3);
        $this->db->where('IdOrden',$IdPaqueteEnvio->IdOrden);
        $this->db->update('orden_servicio');
      }
      else {
        $this->db->set('IdEstatusOrden',2);
        $this->db->where('IdOrden',$IdPaqueteEnvio->IdOrden);
        $this->db->update('orden_servicio');
      }

    // code...
    }

    public function RecibirEtiquetaEquipo($IdEquipoOrden,$Fecha)
    {

      $this->db->set('Etiqueta',1);
      $this->db->set('FechaEtiqueta',$Fecha);
      $this->db->where('IdEquipoOrden',$IdEquipoOrden);

      return $this->db->update($this->table);
      // code...
    }

    public function AvanzarEstatusEquiposPorPaquete($IdPaquete, $FechaEstatus)
    {
      $this->db->select($this->table.'.*');
      $this->db->from($this->table);
      $this->db->where('IdPaqueteEnvio',$IdPaquete);

      $query = $this->db->get();

      $EquiposPaquete = $query->result_array();

      foreach ($EquiposPaquete as $equipoPaquete) {
        $IdEstatusEquipo_Anterior = $equipoPaquete['IdEstatusPaquete'];
        if ($IdEstatusEquipo_Anterior<7)
        {
          $IdEstatusEquipo = $IdEstatusEquipo_Anterior + 1;
          $this->RegistrarEstatusEquipo($equipoPaquete['IdEquipoOrden'],$IdEstatusEquipo,$FechaEstatus);

          if ($IdEstatusEquipo = 4)
          {
            $this->load->model('Equipo_Model');
            $stamp = strtotime($FechaEstatus);
            $month = date('m',$stamp);
            $this->Equipo_Model->ActualizarFechaUltimoServicio($equipoPaquete['IdEquipo'],$month);
          }
        }




      }
      return true;
    }

    public function ConsultarEquiposOrdenParaFactura($IdCliente)
    {
      $this->db->select('eo.*');
      $this->db->select('c.IdCliente, NombreCompania');
      $this->db->select('e.*');
      $this->db->select('DescripcionEstatusPaquete');

      $this->db->from($this->table.' eo');
      $this->db->join('equipo e','eo.IdEquipo = e.IdEquipo');
      $this->db->join('cliente c','c.IdCliente = e.IdCliente');
      $this->db->join('catalogoestatuspaquetes cep', 'eo.IdEstatusPaquete = cep.IdEstatusPaquete');

      $this->db->where('c.IdCliente',$IdCliente);
      $this->db->where('Factura', null);
      $this->db->where('eo.IdEstatusPaquete >4');//ESTATUS ES MAYOR A CALIBRACION TERMINADA

      $query = $this->db->get();

      return $query->result_array();


      // code...
    }
    public function ConsultarEquiposOrdenFactura($IdFactura)
    {
      $this->db->select('eo.*');
      $this->db->select('c.IdCliente, NombreCompania');
      $this->db->select('e.*');
      $this->db->select('DescripcionEstatusPaquete');

      $this->db->from($this->table.' eo');
      $this->db->join('equipo e','eo.IdEquipo = e.IdEquipo');
      $this->db->join('cliente c','c.IdCliente = e.IdCliente');
      $this->db->join('catalogoestatuspaquetes cep', 'eo.IdEstatusPaquete = cep.IdEstatusPaquete');

      $this->db->where('Factura', $IdFactura);
      $query = $this->db->get();

      return $query->result_array();


      // code...
    }

    public function AsignarFacturaEquipo($IdEquipoOrden,$IdFactura)
    {

      $this->db->set('Factura',$IdFactura);
      $this->db->where('IdEquipoOrden',$IdEquipoOrden);
      return $this->db->update($this->table);
      // code...
    }

    //put your code here
}
