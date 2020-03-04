<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipo_Controller
 *
 * @author SigueMED
 */
class Factura_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url_helper');
        $this->load->model('Clientes_Model');
    }

    public function Load_Factura($IdCliente)
    {
        $data['title'] = 'Factura Cliente';
        $this->load->model('Clientes_Model');

        $data['Cliente'] = $this->Clientes_Model->ConsultarDataClientes($IdCliente);

        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Factura/CardFactura',$data);
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');
    }

public function ConsultarEquiposFactura_ajax()
{
  $IdCliente = $this->input->post('IdCliente');

  $this->load->model('EquipoOrden_Model');
  $EquiposCliente = $this->EquipoOrden_Model->ConsultarEquiposOrdenParaFactura($IdCliente);

  echo json_encode($EquiposCliente);
  // code...
}

public function ConsultarEquiposDetalleFactura_ajax()
{
  $IdFactura = $this->input->post('IdFactura');

  $this->load->model('EquipoOrden_Model');
  $EquiposFactura = $this->EquipoOrden_Model->ConsultarEquiposOrdenParaFactura($IdFactura);

  echo json_encode($EquiposFactura);
  // code...
}

public function CrearFactura()
{
  $action = $this->input->post('action');

  if ($action =='generar')
  {
    $IdCliente = $this->input->post('IdCliente');
    $NumFactura = $this->input->post('txtNumeroFactura');
    $FechaFactura = $this->input->post('FechaFactura');
    $Equipos = $this->input->post('chkEquipoFactura');


    $this->load->model('Factura_Model');
    $this->load->model('EquipoOrden_Model');

    $NuevaFactura = array(
      'IdCliente'=> $IdCliente,
      'NumFactura'=>$NumFactura,
      'FechaFactura'=>$FechaFactura
    );

    $IdFactura = $this->Factura_Model->CrearNuevaFactura($NuevaFactura);

    for ($i=0; $i<sizeof($Equipos);$i++)
    {
      $this->EquipoOrden_Model->AsignarFacturaEquipo($Equipos[$i],$IdFactura);
    }

    echo "<script>alert('La factura fue guardada exitosamente'); window.location.href='".site_url()."/Servicio/ConsultarOrden';</script>";

  }
  else {
    echo "<script>window.location.href='".site_url()."/Servicio/ConsultarOrden';</script>";

    // code...
  }
  // code...
}
public function Load_ConsultarFacturas()
{
  $data['title'] = 'Consulta de Facturas';

  $this->load->view('templates/MainContainer',$data);
  $this->load->view('templates/HeaderContainer',$data);
  $this->load->view('Factura/CardConsultaFacturas',$data);
  $this->load->view('templates/FooterContainer');
  // code...
}

public function ConsultarFacturasCliente_ajax()
{

  $IdCliente =$this->input->post('IdCliente');

  $this->load->model('Factura_Model');

  $Facturas = $this->Factura_Model->ConsultarFacturasCliente($IdCliente);

  echo json_encode($Facturas);
  // code...
}

public function Load_ConsultarDetalleFactura($IdFactura)
{
  $data['title'] = 'Detalle Factura';

  $this->load->model('Factura_Model');

  $Factura = $this->Factura_Model->ConsultarFacturaPorId($IdFactura);

  $data['Factura'] = $Factura;

  $this->load->view('templates/MainContainer',$data);
  $this->load->view('templates/HeaderContainer',$data);
  $this->load->view('Factura/CardConsultaFacturas',$data);
  $this->load->view('templates/FooterContainer');

  // code...
}
    //put your code here
}
