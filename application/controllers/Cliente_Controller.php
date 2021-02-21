<?php

class Cliente_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url_helper');
        $this->load->model('Usuario_Model');
        $this->load->model('Clientes_Model');
        $this->load->model('Equipo_Model');
        $this->load->model('EquipoOrden_Model');
        $this->load->model('Laboratorio_Model');
        $this->load->model('OrdenServicio_Model');
        $this->load->model('Paquetes_Model');
    }

    public function Load_PlanAnual()
    {
        $data['title'] = 'Plan Anual';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardPlanAnual');
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');
    }

    public function Load_CatalogoCliente()
    {
        $data['title'] = 'Catalogo de Cliente';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardCatalogo');
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');
    }

    public function Load_CatalogoClienteEquipos($IdCliente)
    {

        $this->load->model('Clientes_Model');
        $cliente = $this->Clientes_Model->ConsultarDataClientes($IdCliente);

        $data['cliente']= $cliente;

        $data['title'] = 'Catalogo de Equipos';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardCatalogoClientes');
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');

    }

    public function Load_ConsultarOrdenServicio($IdCliente, $IdEquipo)
    {

      $this->load->model('Clientes_Model');
        $cliente = $this->Clientes_Model->ConsultarDataClientes($IdCliente);
        $this->load->model('Equipo_Model');

        $Equipo = $this->Equipo_Model->ConsultarIdEquipos($IdEquipo);

        $data['Cliente']=$cliente;
        $data['Equipo'] = $Equipo;

        $data['title'] = 'Consultas de Ordenes de Servicio del Cliente '.$cliente[0]['NombreCompania'];
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardConsultaOrdenesAbiertas',$data);
        $this->load->view('templates/FooterContainer');
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

    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        $output ='<option disabled selected value="">Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
            $output .='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }

        echo $output;
    }

    public function ConsultarEquipoByCliente(){
        $idCliente = $this->input->post('idCliente');

        $Equipo = $this->Equipo_Model->ConsultarPlanEquipoPorCliente($idCliente);
        echo json_encode($Equipo);
    }

    public function ConsultarEquipoPorCliente()
    {
        $idCliente = $this->input->post('idCliente');
        $Mes = $this->input->post('MesConsulta');
        $Opcion = $this->input->post('Opcion');


        $Equipo = $this->Equipo_Model->ConsultarPlanAnualPorCliente($idCliente,$Mes,$Opcion);
        echo json_encode($Equipo);
        /*
        if($Equipo[0]['IdOrden'] != null)
            echo json_encode($Equipo);
        else
        {
            $array = array();
            echo json_encode($array);
        }*/
    }

    public function ConsultarCertificadoEquipo()
    {
        $idEquipo = $this->input->post('idEquipo');

        $Equipo = $this->Equipo_Model->ConsultarCertificadoEquipo($idEquipo);
        echo json_encode($Equipo);
    }



    /*----------------------------------------------------------------------*/

    public function ConsultarCliente()
    {
        $Cliente = $this->Clientes_Model->ConsultarClientes();
        echo json_encode($Cliente);
    }

    public function ConsultarClienteId()
    {
        $IdCliente = $this->input->post('IdCliente');
        $Cliente = $this->Clientes_Model->ConsultarDataClientes($IdCliente);
        echo json_encode($Cliente);
    }


    public function InsertarCliente()
    {
        $compania = $this->input->post('compania');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');

        $Cliente = $this->Clientes_Model->InsertarCliente($email,$telefono,$direccion,$nombre,$compania);
        echo json_encode($Cliente);
    }

    public function ActualizarCliente()
    {
        $compania = $this->input->post('compania');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $IdCliente =$this->input->post('IdCliente');

        $actualizacion = $this->Clientes_Model->ActualizarCliente($email,$telefono,$direccion,$nombre,$compania,$IdCliente);
    }

    /* ------------------------------------------------------------------------- */

    public function ConsultarClienteEquipos()
    {
        $Cliente = $this->Clientes_Model->ConsultarClienteEquipos();
        echo json_encode($Cliente);
    }

    public function ConsultarEquipos()
    {
        $id = $this->input->get('idCliente');

        $Cliente = $this->Equipo_Model->ConsultarEquipoClientePorId($id);
        echo json_encode($Cliente);
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
        $MesInicio = $this->input->post('MesInicio');
        $Periodo = $this->input->post('Periodo');

        $Equipo = $this->Equipo_Model->ActualizarEquipoPorId($IdEquipo,$ClaveId,$NumService,$Modelo,$Descripcion,$Marca,$AlcanceMedicion,$DivisionMedicion,$Periodo,$MesInicio);
 }


    /* ------------------------------------------------------------------------- */


    public function ConsultarDatosOrdenesAbiertasEquipo()
    {
      $cerradas = $this->input->post('Cerradas');
      $idEquipo = $this->input->post('idEquipo');
      $Datos = $this->OrdenServicio_Model->ConsultarDatosOrdenesAbiertasEquipo($cerradas,$idEquipo);
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

        $output ='<option disabled selected value="">Seleccione un laboratorio</option>';

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

    public function CargarDatosPeriodos()
    {
        $Equipo = $this->Equipo_Model->ConsultarDatosPeriodos();

        $output ='<option disabled selected value="">Seleccione un Periodo</option>';

        foreach ($Equipo as $equipo)
        {
            $output .='<option value="'.$equipo['IdPeriodo'].'">'.$equipo['TipoPeriodo'].'</option>';
        }

        echo $output;
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
      log_message("error","SubirCertificado_ajax");

      $IdEquipoOrden = $this->input->post('CERT_IdEquipoOrden');

      $IdEquipo = $this->input->post('CERT_IdEquipo');
      $IdCliente = $this->input->post('CERT_IdCliente');

      log_message('debug',"SUBIR_CERTIFICADO=>".$IdEquipoOrden);

      $ArchivoCertificado = $this->do_upload($IdCliente,$IdEquipo);
      log_message('debug'," Nombre Archivo=>".$ArchivoCertificado);


      $this->EquipoOrden_Model->GuardarCertificadoEquipo($IdEquipoOrden,$ArchivoCertificado);

      echo '1';
      // code...
    }

}
