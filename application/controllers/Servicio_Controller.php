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
        $this->load->model('Clientes_Model');
        $this->load->helper('url_helper');
        $this->load->library('M_pdf');
        
        $this->load->model('OrdenServicio_Model');
        $this->load->model('Paquetes_Model');
        $this->load->model('EquipoOrden_Model');

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
        $this->load->view('Servicio/CardConsultaPaquetesOrden');
        $this->load->view('templates/FooterContainer');
    }
    
    /*
     * 
     */
    public function ConsultarOrden()
    {
        $IdOrden = $this->input->post('IdOrden');
        
        $Orden = $this->OrdenServicio_Model->ConsultarOrdenPorId($IdOrden);
        
        echo json_encode($Orden);
        
    }
    /*
     * 
     */
    public function ConsultarEquiposSinPaquete_ajax()
    {
        $IdOrden = $this->input->post('IdOrden');
        
        $Equipos = $this->EquipoOrden_Model->ConsultarEquiposOrdenPaquete($IdOrden,null);
        
        echo json_encode($Equipos);
        
        
        
    }
    
    /*
     * 
     */
    public function AgregarEquipoAPaquete_ajax()
    {
        
        
    }


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

    public function CrearNuevaOrden()
    {
        /*$action = $this->input->post('action');

        if ($action ='GuardarEntrada')
        {
            echo '<script>alert("Guardar Orden");</script>';
            //GUARDAR ,ORDEN DE SERVICIO
        }*/
        
    }

    public function Buscar()
    {
        $peticion = $_POST['peticion'];        
        $IdCliente = $this->input->post('IdCliente');

        $Clientes = $this->Clientes_Model->ConsultarEquipo($peticion,$IdCliente);
        $json = array();
        $json = $Clientes;
        echo json_encode($json);
    }

    public function CrearOrdenPDF($IdOrden)
    {
        $this->load->library('M_pdf');

        $idOrden = $IdOrden;
        
      
        $id = $IdOrden;
        
        $Registro = $this->Clientes_Model->ConsultarOrden($id); 
        $Clientes = $this->Clientes_Model->ConsultarOrdenCliente($id);
        
        $i = 1;

        $hoy = date("dmyhis");

        $head = '
        <!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <title>Reporte</title>
            <style>
        
              a {
                color: #5D6975;
                text-decoration: underline;
              }
        
              body {
                position: relative;
                width: 21cm;  
                height: 29.7cm; 
                margin: 0 auto; 
                color: #001028;
                background: #FFFFFF; 
                font-family: Arial, sans-serif; 
                font-size: 12px; 
                font-family: Arial;
              }
        
              header {
                padding: 10px 0;
                margin-bottom: 30px;
              }
        
              #logo {
                text-align: left;
              }
        
              #logo img {
                width: 60px;
                float:left;
                margin: 10px;
              }
        
              h2 {
                font-size: 2.0em;
                text-align: center;
                margin: 0 0 20px 0;
              }
        
        
              table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
              }
        
              table tr:nth-child(2n-1) td {
                background: #F5F5F5;
              }
        
              table th,
              table td {
                text-align: center;
                border: 1px solid #C1CED9;
              }
        
              table th {
                color: #5D6975;
                border-bottom: 1px solid #C1CED9;
                font-weight: normal;
              }
        
        
              table td {
                padding: 10px;
                text-align: left;
              }
        
        
              footer {
                color: #5D6975;
                width: 100%;
                height: 30px;
                position: absolute;
                bottom: 0;
                border-top: 1px solid #C1CED9;
                padding: 8px 0;
                text-align: center;
              }
            
            </style>
          </head>
          <body>
            <header class="clearfix">
              <div id="logo">
                <img src="http://localhost/SC_Intec/app-assets/images/logo/IntecLogo.png" style="width: 50px" align="left">
                <h2>Datos de Servicio de Calibración</h2>
              </div>
              
              <p>Con la funalidad de brindarle un mejor servicio y evitar la comicion de datos que el cliente requiere en su informe de calibración</p>
        
            </header>
            ';

            foreach($Clientes as $cliente)
            {
              $table = '
                <table>
                  <thead>
                    <tr>
                      <th colspan="4">Datos del Informe cliente</th> 
                    <tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td style="width:150px">Contacto</td>
                    <td colspan="3">'.$cliente['NombreContacto'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Compañia</td>
                    <td colspan="3">'.$cliente['NombreCompania'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Domicilio del Informe</td>
                    <td colspan="3">'.$cliente['Domicilio'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Correo Contacto</td>
                    <td colspan="3">'.$cliente['Correo'].'</td>
                    <tr>
                  </tbody>
                  <thead>
                  <tr>
                    <th colspan="4">Especificaciones de Servicio</th> 
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Fecha de Recibo en Intec:</td>
                    <td>'.$cliente['Fecha'].'</td>
                    <td>Fecha de envio al Laboratorio:</td>
                    <td>'.$cliente['FechaEnvio'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Fecha de recivido del Laboratorio:</td>
                    <td>'.$cliente['FechaRecibo'].'</td>
                    <td style="width:150px">Observaciones:</td>
                    <td>'.$cliente['Observaciones'].'</td>
                  <tr>                  
                </tbody>
              
                </table> 
                <table>
                <thead>
                  <tr>
                    <th>Partida</th>
                    <th>Descripción del equipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Numero de Serie</th>
                    <th>Clavé de identificacion</th>
                    <th>Alcance de Medición</th>
                    <th>Divicion Minima</th>
                  </tr>
                </thead>
                <tbody>
                ';
           }
                foreach($Registro as $registro)
                {
                  $table2 .='
                  <tr>
                    <td>'.$i.'</td>
                    <td>'.$registro['Descripcion'].'</td>
                    <td>'.$registro['Marca'].'</td>
                    <td>'.$registro['Modelo'].'</td>
                    <td>'.$registro['NumService'].'</td>
                    <td>'.$registro['ClaveId'].'</td>
                    <td>'.$registro['AlcanceMedicion'].'</td>
                    <td>'.$registro['DivisionMedicion'].'</td>
                  </tr>
                    ';
                    $i++;
                  }
            $table3 ='
                  
                </tbody>
              </table>
              <table >
                  <thead>
                    <tr>
                      <th colspan="3">Datos del Proveedor</th> 
                    <tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width:150px">Nombre</td>
                      <td colspan="2">David Parroquín Vargas</td>
                    <tr>
                    <tr>
                      <td style="width:150px">Compañia</td>
                      <td colspan="2">Intec</td>
                    <tr>
                    <tr>
                      <td style="width:150px">Domicilio del Informe</td>
                      <td colspan="2">28 de Agosto #318 Barrio de la Estación, Aguascalientes, Aguascalientes</td>
                    <tr>
                    <tr>
                      <td style="width:150px">Correo Electronico</td>
                      <td colspan="2">contacto@iintec.com</td>
                    <tr>  
                    <tr>
                      <td style="width:150px">RFC</td>
                      <td>PAVD8412297E8</td>
                      <td>Teléfono. 01(449)962 80 22</td>
                    <tr>
                  </tbody>
                </table>
          </body>
        </html>
        ';

    $pdf = $head.$table.$table2.$table3;

    $pdfFilePath = "reporte_".$hoy.".pdf";

    $this->m_pdf->pdf->WriteHTML($pdf);
    $this->m_pdf->pdf->Output($pdfFilePath, "I");

    }
    
    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        echo $output ='<option value="">Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
           echo $output ='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }
    }
  
    public function ConsultarDatosClientes()
    {
      $id = $_POST['id'];

      if($id != "")
      {
          $Clientes = $this->Clientes_Model->ConsultarDatosPaqueteClientes($id);     
          $json = array();
          $json = $Clientes;
          echo json_encode($json);
      }
    }

    public function ConsultarDataClientes_ajax()
    {
        $id = $_POST['id'];

        if($id != "")
        {
            $Clientes = $this->Clientes_Model->ConsultarDataClientes($id);     
            $json = array();
            $json = $Clientes;
            echo json_encode($json);
        }
    }

    public function InsertProducto()
    {
      $Descripcion = $_POST[''];
      $Marca = $_POST[''];
      $Modelo = $_POST[''];
      $NumService = $_POST[''];
      $DivisionMedicion = $_POST[''];
      $AlcanceMedicion = $_POST[''];
      $ClaveId = $_POST[''];
      $IdCliente = $_POST[''];

      $Clientes = $this->Clientes_Model->Insertar($Descripcion,$Marca,$Modelo,$NumService, $DivisionMedicion,$AlcanceMedicion,$ClaveId,$IdCliente);       
    }


    public function LlenarTabla()
    {
        $id =$_POST['id'];
        $clave = $_POST['clave'];
        $numser = $_POST['numser'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];
        $marca = $_POST['marca'];
        $alcance = $_POST['alcance'];
        $division = $_POST['division'];

        if($division != "" && $alcance != "" && $descripcion != ""&& $marca != "")
        {

          echo '
            <tr>
            <td class="id">'.$id.'</td>
            <td class="descripcion">'.$descripcion.'</td>
            <td class="marca">'.$marca.'</td>
            <td class="modelo">'.$modelo.'</td>
            <td class="numser">'.$numser.'</td>
            <td class="clave">'.$clave.'</td>
            <td class="alcance">'.$alcance.'</td>
            <td class="division">'.$division.'</td>
            <td><button type="button" class="btn btn-primary" id="btnEliminarSubProducto">Eliminar</button></td>
            </tr>';
        }              
    }

    public function Insertar_ajax()
    {
        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $codigo = $_POST['codigo'];
        $nLote = $_POST['nLote'];
        $fCaducidad = $_POST['fCaducidad'];
        $cantidad = $_POST['cantidad'];
        $costo = $_POST['costo'];
        $Cliente = $_POST['cliente'];

        $Clientes = $this->Clientes_Model->Insertar($id,$producto,$codigo,$nLote,$fCaducidad,$cantidad,$costo,$Cliente );       
    
    }

    
    public function InsertarOrdenServicio()
    {
      $IdCliente = $_POST['cliente'];
      $Fecha = $_POST['fecha'];
      $FechaEnvio = $_POST['FechaEnvio'];
      $FechaRecibo = $_POST['FechaRecibo'];
      $Observaciones = $_POST['Observaciones'];      

      $Clientes = $this->Clientes_Model->InsertarOrdenServicio($IdCliente,$Fecha,$FechaEnvio,$FechaRecibo,$Observaciones);       

      echo $Clientes;

    }

    public function InsertarOrdenEquipo()
    {
      $IdEquipo = $_POST['idequipo'];
      $IdOrden = $_POST['idOrden'];

      $Clientes = $this->Clientes_Model->InsertarOrdenEquipo($IdEquipo,$IdOrden); 
    }


    public function ConsultarDatosOrdenes()
    {
      
      $Datos = $this->Clientes_Model->ConsultarOrdenServicio();

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

    public function ConsultarPaqueteOrdenes()
    {
      $idEnvio = $_POST['idEnvio'];
      $idorden = $_POST['idOrden'];

      
      $Datos = $this->Clientes_Model->ConsultarPaqueteOrdenes($idorden);

      $array = array();

      foreach($Datos as $dato)
      {
        $TE = 0;

        $totalE = $this->Clientes_Model->ConsultarTotalEquipo($dato['IdOrden'],$dato['IdPaqueteEnvio']);
        foreach($totalE as $t){$TE = $t['TotalEquipo'];}

        $arrayOrden = array(
          "IdOrden" => $dato['IdOrden'],
          "IdPaqueteEnvio" => $dato['IdPaqueteEnvio'],
          "NombreCompania" => $dato['NombreCompania'],
          "Descripcion" => $dato['Descripcion'],
          "Descripcion_lab" => $dato['Descripcion_lab'],
          "FechaEnv" => $dato['FechaEnv'],
          "FechaRecLab" => $dato['FechaRecLab'],
          "FechaFinalCalLab" => $dato['FechaFinalCalLab'],
          "FechaRetLab" => $dato['FechaRetLab'],
          "FechaRecpIntecLab" => $dato['FechaRecpIntecLab'],
          "Estatus" => $dato['Estatus'],
          "TotalEquipo" => $TE
        );

        $boton = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmacion" id="btnConfirmar">Confirmar</button>';

        if($dato['Estatus'] == 0)
          $arrayOrden['FechaEnv'] = $boton;
        else if($dato['Estatus'] == 1)
          $arrayOrden['FechaRecLab'] = $boton;
        else if($dato['Estatus'] == 2)
          $arrayOrden['FechaFinalCalLab'] = $boton;
        else if($dato['Estatus'] == 3)
          $arrayOrden['FechaRetLab'] = $boton;
        else if($dato['Estatus'] == 4)
          $arrayOrden['FechaRecpIntecLab'] = $boton;

        array_push($array,$arrayOrden);

      }
      echo json_encode($array);
    }



    public function ConsultarLaboratorio_ajax()
    {
        $Laboratorios = $this->Clientes_Model->ConsultarLaboratorio();


        $output ='<option value="">Seleccione un laboratorio</option>';

        foreach ($Laboratorios as $laboratorios)
        {
           $output .='<option value="'.$laboratorios['IdLaboratorio'].'">'.$laboratorios['Descripcion_lab'].'</option>';
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
                
                $IdOrden = $this->input->post('IdOrden');
                $Descripcion = $this->input->post('DescripcionServicio');
                $IdLaboratorio = $this->input->post('laboratorio');

                $NuevoPaquete = array(
                    'IdOrden'=> $IdOrden,
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
                

            }
            
        } catch (Exception $ex) {
            
            log_message('error', $ex->getMessage());
            $this->db->trans_rollback();

        }
        
    }
    
   

    /*
     * 
     */
    public function ConsultarOrdenLaboratorio_ajax()
    {
        $Laboratorios = $this->Clientes_Model->ConsultarOrdenLaboratorio();
       
        foreach ($Laboratorios as $laboratorios)
        {
          echo '
            <tr>
            <td>'.$laboratorios['Descripcion'].'</td>
            <td><input type="checkbox" name="verificar" id="verificar"></td>
            </tr>';
        }
    }

    public function ConsultarOrdenDatosPaqute_ajax()
    {
        $id = $_POST['idOrden'];
        $Datos = $this->Clientes_Model->ConsultarOrdenPaquete($id);
       
        foreach ($Datos as $datos)
        { 
          if($datos['IdPaqueteEnvio'] == null)
          {
            echo '
              <tr>
                <td class="idEquipo">'.$datos['IdEquipoOrden'].'</td>
                <td class="descripcion">'.$datos['Descripcion'].'</td>
                <td><input type="checkbox" name="verificar" id="verificar"></td>
              </tr>';
          }
        }
    }

    public function UpdatePaquete()
    {
      $IdEquipo = $_POST['IdEquipoOrden'];
      $idEnvio = $_POST['idEnvio'];

      $Update = $this->Clientes_Model->ModificarPaqueteOrdenes($idEnvio,$IdEquipo); 
    } 

    public function ConsultarPaqueteOrden()
    {
      $IdOrden = $_POST['idOrden'];

      $Paquete = $this->Clientes_Model->ConsultarPaqueteOrden($IdOrden);

      foreach($Paquete  as $paquete)
      {
        echo '
        <tr>
          <td class="idPaquete">'.$paquete['IdPaqueteEnvio'].'</td>
          <td class="laboratorio">'.$paquete['Descripcion_lab'].'</td>
          <td class="NoEquipo">'.$paquete['IdEquipo'].'</td>
        </tr>';
      }
    }

    public function ModificarPaqueteOrden()
    {
      $fecha = $_POST['fecha'];
      $IdPaqueteEnvio = $_POST['IdPaqueteEnvio'];
      $Estatus = $this->Clientes_Model->ConsultarEstatus($IdPaqueteEnvio);
      
      foreach ($Estatus as $e)
      {
        if($e['Estatus'] == 0)
            $Fecha = "FechaEnv";
        if($e['Estatus'] == 1)
            $Fecha = "FechaRecLab";
        if($e['Estatus'] == 2)
            $Fecha = "FechaFinalCalLab";
        if($e['Estatus'] == 3)
            $Fecha = "FechaRetLab";
        if($e['Estatus'] == 4)
            $Fecha = "FechaRecpIntecLab";

        $PaqueteOrden = $this->Clientes_Model->ModificarEstatusPaqueteOrdenes($e['Estatus'],$Fecha,$IdPaqueteEnvio,$fecha);
      }
    }
    //put your code here
}
