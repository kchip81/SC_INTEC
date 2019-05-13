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
        $this->load->library('M_pdf');
        
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
        $data['title'] = 'Registrar Nueva Orden de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/FormNuevaOrdenServicio');
        $this->load->view('Servicio/CardOrdenServicio');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }

    public function Load_ConsultarOrdenServcio()
    {
        $data['title'] = 'Consultas de Ordenes de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/CardConsultaOrdenesAbiertas');
        $this->load->view('Servicio/CardConsultaEquiposOrden');
        $this->load->view('templates/FooterContainer');
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

    public function ConsultarDatosOrdenes()
    {
      
      $Datos = $this->OrdenServicio_Model->ConsultarOrdenServicio();

      $array = array();

      foreach($Datos as $dato)
      {
        $TE = 0;
        $TO = 0;

        $totalO = $this->Clientes_Model->ConsultarTotalOrdenes($dato['IdOrden']);
        foreach($totalO as $t){$TO = $t['TotalOrdenes'];}
        $totalE = $this->Clientes_Model->ConsultarTotalEquipos($dato['IdOrden']);
        foreach($totalE as $t){$TE = $t['TotalEquipo'];}

        $arrayOrden = array(
          "IdOrden" => $dato['IdOrden'],
          "Fecha" => $dato['Fecha'],
          "FechaEnvio" => $dato['FechaEnvio'],
          "FechaRecibo" => $dato['FechaRecibo'],
          "NombreCompania" => $dato['NombreCompania'],
          "Observaciones" => $dato['Observaciones'],
          "TotalEquipo" => $TE,
          "TotalOrdenes" => $TO
        );

        array_push($array,$arrayOrden);
      }
      echo json_encode($array);
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

/* ------------------------------------------------CardConsultaOrdenesAbiertas-------------------------------------------------------- */
    //put your code here

    public function do_upload()        
     {
        $this->load->helper(array('form', 'url'));
        $config['upload_path']          = './archivos/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect('Servicio/ConsultarOrden','refresh');
        }else
        {
            $data = array('upload_data' => $this->upload->data());
            redirect('Servicio/ConsultarOrden','refresh');
        }          
    }
}
