<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio_Controller
 *
 * @author SigueMED
 */
class Servicio_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url_helper');
       // $this->load->library('M_pdf');

        $this->load->model('Clientes_Model');
        $this->load->model('Equipo_Model');
        $this->load->model('EquipoOrden_Model');
        $this->load->model('Laboratorio_Model');
        $this->load->model('OrdenServicio_Model');
        $this->load->model('Paquetes_Model');
        $this->load->model('PDF_Model');
    }

    public function Load_NuevaOrdenServcio()
    {
        //log_message('debug', 'NUEVA ORDEN-0-SESSION:['.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_NombreUsuario').']');
        $data['title'] = 'Registrar Nueva Orden de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/FormNuevaOrdenServicio');
        $this->load->view('Servicio/CardOrdenServicio');
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');

        //log_message('debug', 'NUEVA ORDEN-1-SESSION:['.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_NombreUsuario').']');
    }

    public function Load_ConsultarOrdenServcio()
    {
        //log_message('debug', 'CONSULTAR ORDEN-0-SESSION:['.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_NombreUsuario').']');
        $data['title'] = 'Consultas de Ordenes de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/CardConsultaOrdenesAbiertas');

        $this->load->view('templates/FooterContainer');
        //log_message('debug', 'CONSULTAR ORDEN-1-SESSION:['.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_NombreUsuario').']');
    }


    public function Load_EquipoDemora()
    {
        $data['title'] = 'Equipos con demora en Laboratorio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/CardEquiposDemora');
        $this->load->view('templates/FooterContainer');
    }

    public function ConsultarEquipoDemora()
    {
        $Equipo = $this->EquipoOrden_Model->ConsultarEquipoDemora();
        echo json_encode($Equipo);
    }
/* ------------------------------------------------CardConsultaOrdenesServicio--------------------------------------------------------- */
    public function ConsultarPaqueteOrdenServicio($IdOrden)
    {
        $data['title'] = 'Paquete por Orden';
        $data['IdOrden'] =$IdOrden;
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/CardOrdenServicioPaqueteOrden',$data);
        $this->load->view('templates/FooterContainer');
    }

    /*
    *CARGAR CONSULTA DETALLE ORDEN
    */

    public function Load_ConsultarDetalleOrden($IdOrden)
    {
      $data['title'] ='Orden';
      $data['Orden']=$this->OrdenServicio_Model->ConsultarOrdenPorId($IdOrden);
      $this->load->view('templates/MainContainer',$data);
      $this->load->view('templates/HeaderContainer',$data);
      $this->load->view('Servicio/CardConsultaDetalleOrden',$data);
      $this->load->view('Paquete/CardConsultaEquiposPaquetes', $data);
      $this->load->view('templates/FooterContainer');
      // code...
    }

    public function ConsultarEquiposOrden()
    {
      $IdOrden   = $this->input->post('Id');

      $EquiposOrden = $this->EquipoOrden_Model->ConsultarEquiposOrden($IdOrden);

      echo json_encode($EquiposOrden);
      // code...
    }

    public function ConsultarPaqueteServicio($IdOrden)
    {

        $data['title'] = 'Paquetes';
        $data['IdOrden'] =$IdOrden;
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/CardOrdenServicioPaquete',$data);
        //$this->load->view('Servicio/CardOrdenServicioPaqueteOrden',$data);
        $this->load->view('templates/FooterContainer');
    }

    public function Buscar()
    {
        $peticion = $this->input->post('peticion');
        $IdCliente = $this->input->post('IdCliente');

        $Clientes = $this->Equipo_Model->ConsultarEquipos($peticion,$IdCliente);
        echo json_encode($Clientes);
    }

    public function ConsultarIdEquipos()
    {
        $idEquipo = $this->input->post('idEquipo');

        $Clientes = $this->Equipo_Model->ConsultarIdEquipos($idEquipo);
        echo json_encode($Clientes);
    }

    public function InsertarEquipo()
    {
        $IdCliente = $this->input->post('IdCliente');
        $ClaveId = $this->input->post('ClaveId');
        $NumService = $this->input->post('NumService');
        $Modelo = $this->input->post('Modelo');
        $Descripcion = $this->input->post('Descripcion');
        $Marca = $this->input->post('Marca');
        $AlcanceMedicion = $this->input->post('AlcanceMedicion');
        $DivisionMedicion = $this->input->post('DivisionMedicion');

        $Clientes = $this->Equipo_Model->InsertarProducto($Descripcion,$Marca,$Modelo,$NumService, $DivisionMedicion,$AlcanceMedicion,$ClaveId,$IdCliente);

        $resultado = $this->Equipo_Model->ConsultarEquipoID($Clientes);

        echo json_encode($resultado);
    }

    public function ActualizarEquipo()
    {
        $IdCliente = $this->input->post('IdCliente');
        $ClaveId = $this->input->post('ClaveId');
        $NumService = $this->input->post('NumService');
        $Modelo = $this->input->post('Modelo');
        $Descripcion = $this->input->post('Descripcion');
        $Marca = $this->input->post('Marca');
        $AlcanceMedicion = $this->input->post('AlcanceMedicion');
        $DivisionMedicion = $this->input->post('DivisionMedicion');

        $Equipo = $this->Equipo_Model->ActualizarEquipoPorId($IdEquipo,$ClaveId,$NumService,$Modelo,$Descripcion,$Marca,$AlcanceMedicion,$DivisionMedicion);

    }

    public function ConsultarDataClientes_ajax()
    {
        $id = $this->input->post('id');

        if($id != "")
        {
            $Clientes = $this->Clientes_Model->ConsultarDataClientes($id);

            echo json_encode($Clientes);
        }
    }

    public function InsertarOrdenServicio_ajax()
    {
      $IdCliente = $this->input->post('cliente');
      $Fecha = $this->input->post('fecha');
      $FechaEnvio = $this->input->post('FechaEnvio');
      $FechaRecibo = $this->input->post('FechaRecibo');
      $Observaciones = $this->input->post('Observaciones');

      $Clientes = $this->OrdenServicio_Model->InsertarOrdenServicio($IdCliente,$Fecha,$FechaEnvio,$FechaRecibo,$Observaciones);

      echo $Clientes;
    }

    public function InsertarOrdenEquipo_ajax()
    {
      $IdEquipo = $this->input->post('idequipo');
      $IdOrden = $this->input->post('idOrden');

      $Clientes = $this->EquipoOrden_Model->InsertarOrdenEquipo($IdEquipo,$IdOrden);
    }

    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        $output ='<option value="">Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
            $output .='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }

        echo $output;
    }

    public function CrearOrdenPDF($IdOrden)
    {
        $this->load->library('M_pdf');

        $hoy = date("dmyhis");

        $pdf = $this->PDF_Model->GenerarPDF($IdOrden);

        $pdfFilePath = "reporte_".$hoy.".pdf";

        $this->m_pdf->pdf->WriteHTML($pdf);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");

    }
/* ------------------------------------------------CardConsultaOrdenesServicio--------------------------------------------------------- */


/* ------------------------------------------------CardConsultaOrdenesAbiertas-------------------------------------------------------- */

    public function ConsultarDatosOrdenesAbiertas()
    {
      $cerradas = $this->input->post('Cerradas');

      $Datos = $this->OrdenServicio_Model->ConsultarOrdenServicioAbiertas($cerradas);
      echo json_encode($Datos);

    }

    public function ConsultarOrden()
    {
        $IdOrden = $this->input->post('IdOrden');

        $Orden = $this->OrdenServicio_Model->ConsultarOrdenPorId($IdOrden);

        echo json_encode($Orden);
    }

    public function ConsultarLaboratorio_ajax()
    {
        $Laboratorios = $this->Laboratorio_Model->ConsultarLaboratorio();

        $output ='<option value="">Seleccione un laboratorio</option>';

        foreach ($Laboratorios as $laboratorios)
        {
           $output .='<option value="'.$laboratorios['IdLaboratorio'].'">'.$laboratorios['Descripcion_lab'].'</option>';
        }
        echo $output;
    }

    public function ConsultarEquiposSinPaquete_ajax()
    {


        $Equipos = $this->EquipoOrden_Model->ConsultarEquiposOrdenSinPaquete();

        echo json_encode($Equipos);
    }

    public function CrearNuevoPaquete()
    {
        try
        {
            $action = $this->input->post('action');

            if($action =="CrearPaquete")
            {
                $this->db->trans_start();


                $Descripcion = $this->input->post('DescripcionServicio');
                $IdLaboratorio = $this->input->post('laboratorio');

                if($IdLaboratorio != 0 )
                {
                  $NuevoPaquete = array(

                      'Descripcion'=>$Descripcion,
                      'IdLaboratorio'=> $IdLaboratorio,
                      'IdEstatusPaquete'=>PQT_CREADO
                  );

                  $IdNuevoPaquete = $this->Paquetes_Model->CrearNuevoPaquete($NuevoPaquete);

                  $EquiposSeleccionados = $this->input->post('chkEquipoPaquete');

                  for ($i=0;$i<sizeof($EquiposSeleccionados);$i++)
                  {
                      $IdEquipoOrden = $EquiposSeleccionados[$i];
                      $IdPaquete = $IdNuevoPaquete;

                      $this->EquipoOrden_Model->AsignarPaqueteEquipo($IdPaquete, $IdEquipoOrden);
                  }

                  $transStatus = $this->db->trans_complete();

                  if ($transStatus == true)
                  {
                      $this->db->trans_commit();
                  }
                  else
                  {
                      $this->db->trans_rollback();
                  }
                  echo '<script>alert("Paquete Creado Exitosamente");</script>';
                  redirect(site_url('Servicio/ConsultarOrden'));
                }else{
                  echo '<script>alert("Seleccione un laboratorio");</script>';
                  redirect(site_url('Servicio/ConsultarOrden'));
                }
            }
        } catch (Exception $ex) {

            log_message('error', $ex->getMessage());
            $this->db->trans_rollback();
        }
    }

    public function ConsultarEquiposPorOrden()
    {
        $IdOrden = $this->input->post('IdOrden');

        $EquiposOrden = $this->EquipoOrden_Model->ConsultarEquiposOrdenPaquete($IdOrden);

        for ($i=0;$i<sizeof($EquiposOrden);$i++)
        {
            if ($EquiposOrden[$i]['Etiqueta']==TRUE)
            {
                $EquiposOrden[$i]['Etiqueta'] ='<input type="checkbox" checked disabled>';
            }
            else
            {
                $EquiposOrden[$i]['Etiqueta'] ='<input type="checkbox" disabled>';
            }

            if ($EquiposOrden[$i]['Factura']==TRUE)
            {
                $EquiposOrden[$i]['Factura'] ='<input type="checkbox" checked disabled>';
            }
            else
            {
                $EquiposOrden[$i]['Factura'] ='<input type="checkbox" disabled>';
            }


        }

        echo json_encode($EquiposOrden);

    }

    function ConsultarEquipoOrden_ajax()
    {
        $IdEquipoOrden = $this->input->post('IdEquipoOrden');

        $EquipoOrden = $this->EquipoOrden_Model->ConsultarEquipoOrdenPorId($IdEquipoOrden);

        echo json_encode($EquipoOrden);
    }

    public function ActualizarEquipoOrden()
    {
        $IdEquipoOrden = $this->input->post('IdEquipoOrden');
        $IdEstatusPaquete_Equipo = $this->input->post('IdEstatusPaquete_Equipo');
        $FechaFinCalLab = $this->input->post('Modal_FechaFinServicio');
        $FechaRetLab = $this->input->post('Modal_FechaRetornoLab');
        $FechaRecIntec = $this->input->post('Modal_FechaRecIntec');
        $chkFactura =  $this->input->post('Modal_chkFactura');
        $chkEtiqueta =  $this->input->post('Modal_chkEtiqueta');
        $Certificado = $this->input->post('Certificado_file');
        $IdEquipo = $this->input->post('IdEquipo');
        $IdCliente = $this->input->post('IdCliente');

        $IdEstatus = FALSE;
        $FechaEstatus = FALSE;

        log_message('error', '*->FECHAFINCALLAB:'.$FechaFinCalLab);
        switch ($IdEstatusPaquete_Equipo)
        {

            //Equipo REcibido en Laboratorio
            case PQT_RECIBIDOLABORATORIO:
                if($FechaFinCalLab !== null && $FechaFinCalLab !== "" && $FechaFinCalLab !=="0000-00-00")
                {
                    $IdEstatus = PQT_CALIBRACIONTERMINADA;
                    $chkFactura = FALSE;
                    $chkEtiqueta =FALSE;
                    $Certificado = "";
                    $FechaEstatus = $FechaFinCalLab;

                }
                break;
            case PQT_CALIBRACIONTERMINADA:


                if($FechaRetLab !== null && $FechaRetLab !== "" && $FechaRetLab !== "0000-00-00")
                {
                    $IdEstatus= PQT_ENRETORNO;
                    $FechaEstatus = $FechaRetLab;
                }


                break;

            case PQT_ENRETORNO:


                if($FechaRecIntec !== null && $FechaRecIntec !== "" && FechaRecIntec !== "0000-00-00")
                {
                    $IdEstatus = PQT_RECIBIDOINTEC;
                    $FechaEstatus = $FechaRecIntec;
                }

                break;
        }

        $ArchivoCertificado = FALSE;
        $NombreArchivo =  $_FILES['Certificado_file']['name'];

        if ($NombreArchivo !== null && $NombreArchivo !== "")
        {
            $ArchivoCertificado = $this->do_upload($IdCliente,$IdEquipo);
        }
        log_message('error', '*->[DATOS ACTUALIZACIÓN]:IdEquipoOrden:'.$IdEquipoOrden.'|'.$IdEstatus.'|'.$FechaEstatus);

        $this->EquipoOrden_Model->ActualizarEstatusEquipo($IdEquipoOrden,$IdEstatus,$FechaEstatus, $chkFactura, $chkEtiqueta, $ArchivoCertificado);




        redirect(site_url('Servicio/ConsultarOrden'));
        echo "<script>alert(1);</script>";


    }

    public function SubirCertificado_ajax()
    {
      log_message("debug","SubirCertificado_ajax");

      $IdEquipoOrden = $this->input->post('CERT_IdEquipoOrden');

      $IdEquipo = $this->input->post('CERT_IdEquipo');
      $IdCliente = $this->input->post('CERT_IdCliente');

      log_message('debug',"SUBIR_CERTIFICADO=>".$IdEquipoOrden);

      $ArchivoCertificado = $this->do_upload($IdCliente,$IdEquipo);

      if ($ArchivoCertificado != null)
      {
        log_message('debug'," Nombre Archivo=>".$ArchivoCertificado);


        $this->EquipoOrden_Model->GuardarCertificadoEquipo($IdEquipoOrden,$ArchivoCertificado);

        echo '1';
      }
      else {
        echo '0';
      }

      // code...
    }

/* ------------------------------------------------CardConsultaOrdenesAbiertas-------------------------------------------------------- */
    //put your code here

    public function do_upload($IdCliente, $IdEquipo)
     {
        $path = './Certificados/';
        if (!is_dir($path.$IdCliente))
        {
            mkdir($path.$IdCliente);

        }
        $path.= $IdCliente.'/';
        if(!is_dir($path.$IdEquipo))
        {
             mkdir($path.$IdEquipo);

        }
        $path.= $IdEquipo.'/';

        $this->load->helper(array('form', 'url'));
        $config['upload_path']          = $path;
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('Certificado_file'))
        {

            log_message('error',$this->upload->display_errors() );
            return FALSE;
        }else
        {

            $File = $this->upload->data('file_name');
            log_message('debug','ARCHIVO:'.$File);
            return $File;

        }
    }

    public function ConsultarEquipoPorId()
    {
        $IdEquipo = $this->input->post('IdEquipo');

        $Equipo = $this->Equipo_Model->ConsultarEquipoPorId($IdEquipo);

        echo json_encode($Equipo);
    }

    public function ActualizarEquipoPorId()
    {
        $IdEquipo = $this->input->post('IdEquipo');
        $ClaveId = $this->input->post('ClaveId');
        $NumService = $this->input->post('NumService');
        $Modelo = $this->input->post('Modelo');
        $Descripcion = $this->input->post('Descripcion');
        $Marca = $this->input->post('Marca');
        $AlcanceMedicion = $this->input->post('AlcanceMedicion');
        $DivisionMedicion = $this->input->post('DivisionMedicion');

        $Equipo = $this->Equipo_Model->ActualizarEquipoPorId($IdEquipo,$ClaveId,$NumService,$Modelo,$Descripcion,$Marca,$AlcanceMedicion,$DivisionMedicion);
    }

    public function EliminarEquipoOrdenPorId()
    {
        $IdOrden = $this->input->post('IdOrden');

        $EquiposPaquetes = $this->EquipoOrden_Model->ConsultarEquiposPaquetesOrden($IdOrden);

        if (sizeof($EquiposPaquetes)==0)
        {
            $this->EquipoOrden_Model->EliminarEquiposOrden($IdOrden);
            $this->OrdenServicio_Model->EliminarEquipoOrdenPorId($IdOrden);
            echo json_encode(1);
        }
        else
        {
             echo json_encode(2);
        }


    }


    public function CrearPDF($IdOrden)
    {
        $this->load->library('M_pdf');

        $hoy = date("dmyhis");

        $pdf = $this->PDF_Model->GenerarPDFLaboratorio($IdOrden);

        $pdfFilePath = "reporte_".$hoy.".pdf";

        $this->m_pdf->pdf->WriteHTML($pdf);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");

    }

    public function EliminarEquipoPorIdPaquete()
    {
        $IdOrden = $this->input->post('IdOrden');
        $IdEquipo = $this->input->post('IdEquipo');

        $result = $this->EquipoOrden_Model->EliminarEquipoPorIdPaquete($IdEquipo,$IdOrden);

        if($result)
            echo 'borrado';
        else
            echo 'no se borro';

    }


    public function EliminarEquipodelPaquete()
    {
        $IdOrden = $this->input->post('IdOrden');
        $IdEquipo = $this->input->post('IdEquipo');

        $result = $this->EquipoOrden_Model->EliminarEquipodelPaquete($IdEquipo,$IdOrden);

    }


    public function ConsultarNumOrdenEquipo(){

        $Id =  $this->input->post('Id');

        $result = $this->EquipoOrden_Model->ConsultarNumOrdenEquipo($Id);

        echo $result->numequipo;
    }

    public function EliminarOrden()
    {
        $IdOrden = $this->input->post('IdOrden');

        $result = $this->OrdenServicio_Model->EliminarOrden($IdOrden);

        if($result)
            echo 'borrado';
        else
            echo 'no se borro';

    }
}
