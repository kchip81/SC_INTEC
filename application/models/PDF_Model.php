<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDF_Model
 *
 * @author SigueMED
 */
class PDF_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('OrdenServicio_Model');
        $this->load->model('EquipoOrden_Model');
    }
    
    public function GenerarPDF($IdOrden)
    {        
        $id = $IdOrden;
        
        $Registro = $this->EquipoOrden_Model->ConsultarOrden($id); 
        $Clientes = $this->OrdenServicio_Model->ConsultarOrdenCliente($id);
        
        $i = 1;

        $head = '
        <!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <title>Reporte</title>
            <link rel="shortcut icon" type="image/x-icon" href="http://localhost/SC_Intec/app-assets/images/ico/IntecIco.ico">
            <style>
        
              a {
                color: #5D6975;
                text-decoration: underline;
              }
        
              body {
                position: relative;
                width: 21cm;  
                height: 29cm; 
                margin: 0 auto; 
                color: #001028;
                background: #FFFFFF; 
                font-family: Arial, sans-serif; 
                font-size: 12px; 
                font-family: Arial;
              }
        
              header {
                padding: 5px 0;
                margin-bottom: 0px;
              }
        
              h2 {
                font-size: 2.0em;
                text-align: center;
              }        
        
              table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 10px;
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
                padding: 5px;
              }
        
        
              table td {
                padding: 5px;
                text-align: left;
              }
        
        
              footer {
                color: #5D6975;
                width: 100%;
                height: 20px;
                position: absolute;
                bottom: 0;
                border-top: 1px solid #C1CED9;
                padding: 8px 0;
                text-align: center;
              }
            
            </style>
          </head>
          <body>


          <header>
            <div>
              <figure>
                <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogo.png" style="width: 50px" align="left">
              </figure>
              <div>
                <h2 class="title">Datos de Servicio de Calibración</h2>
                <p>Con la finalidad de brindarle un mejor servicio y evitar la comisión de datos que el cliente requiere en su informe de calibración</p>
                </div>
              </div>
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
                    <td style="width:150px">Fecha de recibido del Laboratorio:</td>
                    <td>'.$cliente['FechaRecibo'].'</td>
                    <td style="width:150px">Observaciones:</td>
                    <td>'.$cliente['Observaciones'].'</td>
                  <tr>                  
                </tbody>
              
                </table> 
                <br>
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
              <br>
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

        return $pdf;
    }
    //put your code here
}
