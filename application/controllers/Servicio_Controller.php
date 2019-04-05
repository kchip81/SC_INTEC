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

        $Clientes = $this->Clientes_Model->ConsultarEquipo($peticion);
        $json = array();
        $json = $Clientes;
        echo json_encode($json);
    }

    public function CrearOrdenPDF()
    {
        $this->load->library('M_pdf');

        $peticion = "2";
        $Cliente = $this->Clientes_Model->ConsultarDataClientes($peticion);

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

            $table = '
              <table>
                <thead>
                  <tr>
                    <th colspan="2">Datos del Informe cliente</th> 
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:150px">Contacto</td>
                    <td></td>
                  <tr>
                  <tr>
                    <td style="width:150px">Compañia</td>
                    <td></td>
                  <tr>
                  <tr>
                    <td style="width:150px">Domicilio del Informe</td>
                    <td></td>
                  <tr>
                  <tr>
                    <td style="width:150px">Correo Contacto</td>
                    <td></td>
                  <tr>
                </tbody>
              </table> 
              '; 
              $table2 ='
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
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  
                </tbody>
              </table>
              ';
              $table3 ='
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

      /*<td class="numser">'.$numser.'</td>
            <td class="producto">'.$producto.'</td>
            <td class="codigo">'.$codigo.'</td>
            <td class="nombre">'.$nombre.'</td>
            <td class="nLote">'.$nLote.'</td>
            <td class="fCaducidad">'.$fCaducidad.'</td>
            <td class="cantidad">'.$cantidad.'</td>
            <td class="costo">$'.$costo.'</td>*/
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
    //put your code here
}
