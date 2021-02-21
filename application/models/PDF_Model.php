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
        $this->load->model('Paquetes_Model');
        $this->load->model('Servicio_Model');
        $this->load->model('Equipo_Servicio_Model');
    }
    
    public function GenerarPDF($IdOrden)
    {        
        $id = $IdOrden;
        
        $Registro = $this->EquipoOrden_Model->ConsultarOrden($id); 
        $Clientes = $this->OrdenServicio_Model->ConsultarOrdenCliente($id);
        
        $i = 1;
      $table2 = '';
      $table = '';
        $head = '
        <!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <title>Reporte</title>
            <link rel="shortcut icon" type="image/x-icon" href="'.base_url().'/app-assets/images/ico/IntecIco.ico">
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
              $table .= '
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
    public function GenerarPDFLaboratorio($id)
    {        
        
        $Registro = $this->EquipoOrden_Model->ConsultarPDF($id); 
        $Laboratorio = $this->Paquetes_Model->ConsultarPDF($id);
        $idLast = 0;
        $cliente1 = '';
        $clienteLast = '';
        $table2 = '';
        $table = '';
        $head = '
        <!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <title>Reporte</title>
            <link rel="shortcut icon" type="image/x-icon" href="'.base_url().'/app-assets/images/ico/IntecIco.ico">
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
            <div align="center">
              <figure align="center">
                <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogo.png" style="width: 100px" align="center">
              </figure>
              <div>
          
              </div>
          </header>
          <br>

            ';

            foreach($Laboratorio as $laboratorio)
            {
              $table .= '
                <table>
                  <thead>
                    <tr>
                      <th colspan="4">Datos del Laboratorio</th> 
                    <tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td style="width:150px">Laboratorio</td>
                    <td colspan="3">'.$laboratorio['Descripcion_lab'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Domicilio</td>
                    <td colspan="3">'.$laboratorio['Domicilio'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Teléfono</td>
                    <td colspan="3">'.$laboratorio['Telefono'].'</td>
                  <tr>
                  </tbody>
                  <thead>
                  <tr>
                    <th colspan="4">Especificaciones del Paquete</th> 
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="1">Descripcion</td>
                    <td colspan="1" style="width:150px">'.$laboratorio['Descripcion'].'</td>
                    <td colspan="1">Fecha de envio al Laboratorio:</td>
                    <td colspan="1">'.$laboratorio['FechaEnv'].'</td>
                  <tr>                
                </tbody>
                </table> 
                <br>
                ';
            }
                  $count = 0; 
                  foreach($Registro as $registro)
                  {
                    $id = $registro['ID'];
                    $Clientes = $this->OrdenServicio_Model->ConsultarOrdenCliente($id);
                    
                    if($id != $idLast){
                      foreach($Clientes as $cliente)
                      {
                        if($count != 0){
                          $table2 .= '</tbody>
                          </table>';
                        }

                        $table2 .='
                         
                        <table>
                          <thead>
                            <tr>
                              <th colspan="4">Datos del Informe cliente</th> 
                            <tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td style="width:150px">Compañia</td>
                            <td colspan="3">'.$cliente['NombreCompania'].'</td>
                          <tr>
                          <tr>
                            <td style="width:150px">Domicilio del Informe</td>
                            <td colspan="3">'.$cliente['Domicilio'].'</td>
                          <tr>
                          </tbody>
                        </table>
                        <br>
      
                        <table>
                          <thead>
                            <tr>
                              <th>No. Orden</th>
                              <th>Cliente</th>
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
                        $count++;
                      }
                    
                    }

                    $table2 .='
                    <tr>
                      <td>'.$registro['ID'].'</td>
                      <td>'.$registro['NombreCompania'].'</td>
                      <td>'.$registro['Descripcion'].'</td>
                      <td>'.$registro['Marca'].'</td>
                      <td>'.$registro['Modelo'].'</td>
                      <td>'.$registro['NumService'].'</td>
                      <td>'.$registro['ClaveId'].'</td>
                      <td>'.$registro['AlcanceMedicion'].'</td>
                      <td>'.$registro['DivisionMedicion'].'</td>
                    </tr>
                    ';
                    $idLast = $registro['ID'];

                }
            $table3 ='</tbody>
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



    public function GenerarPDFModel($IdOrden)
    {        
        $id = $IdOrden;
        
        $Registro = $this->EquipoOrden_Model->ConsultarOrden($id); 
        $Clientes = $this->OrdenServicio_Model->ConsultarOrdenCliente($id);
        
        $i = 1;
      $table2 = '';
      $table = '';

        $head = '
          <style>
        
              a {
                text-decoration: none;
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
        
            
            </style>


          <header>
            <div>
              <figure>
                <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogo.png" style="width: 70px" align="left">
              </figure>
              <div>
                <h2 class="title">Datos de Servicio de Calibración</h2><br>
                <p>Con la finalidad de brindarle un mejor servicio y evitar la comisión de datos que el cliente requiere en su informe de calibración</p>
                </div>
              </div>
          </header>

            ';

            foreach($Clientes as $cliente)
            {
              $table .= '
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
                <div class="table-responsive"> 
                <table class="table">
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
              </div>
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
        ';

        $pdf = $head.$table.$table2.$table3;

        return $pdf;
    }

    public function GenerarPDFLaboratorioMODEL($id)
    {        
        
        $Registro = $this->EquipoOrden_Model->ConsultarPDF($id); 
        $Laboratorio = $this->Paquetes_Model->ConsultarPDF($id);
        $idLast = 0;
        $cliente1 = '';
        $clienteLast = '';
        $table2 = '';
        $table = '';
        $head = '
        <style>
        
              a {
                text-decoration: none;
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
        
            </style>


          <header>
            <div align="center">
              <figure align="center">
                <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogo.png" style="width: 100px" align="center">
              </figure>
              <div>
          
              </div>
          </header>
          <br>

            ';

            foreach($Laboratorio as $laboratorio)
            {
              $table .= '
                <table>
                  <thead>
                    <tr>
                      <th colspan="4">Datos del Laboratorio</th> 
                    <tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td style="width:150px">Laboratorio</td>
                    <td colspan="3">'.$laboratorio['Descripcion_lab'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Domicilio</td>
                    <td colspan="3">'.$laboratorio['Domicilio'].'</td>
                  <tr>
                  <tr>
                    <td style="width:150px">Teléfono</td>
                    <td colspan="3">'.$laboratorio['Telefono'].'</td>
                  <tr>
                  </tbody>
                  <thead>
                  <tr>
                    <th colspan="4">Especificaciones del Paquete</th> 
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="1">Descripcion</td>
                    <td colspan="1" style="width:150px">'.$laboratorio['Descripcion'].'</td>
                    <td colspan="1">Fecha de envio al Laboratorio:</td>
                    <td colspan="1">'.$laboratorio['FechaEnv'].'</td>
                  <tr>                
                </tbody>
                </table> 
                <br>
                ';
            }
                  $count = 0; 
                  foreach($Registro as $registro)
                  {
                    $id = $registro['ID'];
                    $Clientes = $this->OrdenServicio_Model->ConsultarOrdenCliente($id);
                    
                    if($id != $idLast){
                      foreach($Clientes as $cliente)
                      {
                        if($count != 0){
                          $table2 .= '</tbody>
                          </table>';
                        }

                        $table2 .='
                         
                        <table>
                          <thead>
                            <tr>
                              <th colspan="4">Datos del Informe cliente</th> 
                            <tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td style="width:150px">Compañia</td>
                            <td colspan="3">'.$cliente['NombreCompania'].'</td>
                          <tr>
                          <tr>
                            <td style="width:150px">Domicilio del Informe</td>
                            <td colspan="3">'.$cliente['Domicilio'].'</td>
                          <tr>
                          </tbody>
                        </table>
                        <br>
                        <div class="table-responsive"> 
                        <table class="table">
                          <thead>
                            <tr>
                              <th>No. Orden</th>
                              <th>Cliente</th>
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
                        $count++;
                      }
                    
                    }

                    $table2 .='
                    <tr>
                      <td>'.$registro['ID'].'</td>
                      <td>'.$registro['NombreCompania'].'</td>
                      <td>'.$registro['Descripcion'].'</td>
                      <td>'.$registro['Marca'].'</td>
                      <td>'.$registro['Modelo'].'</td>
                      <td>'.$registro['NumService'].'</td>
                      <td>'.$registro['ClaveId'].'</td>
                      <td>'.$registro['AlcanceMedicion'].'</td>
                      <td>'.$registro['DivisionMedicion'].'</td>
                    </tr>
                    ';
                    $idLast = $registro['ID'];

                }
            $table3 ='</tbody>
              </table>
              </div>

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
        ';

        $pdf = $head.$table.$table2.$table3;

        return $pdf;
    }



    public function GenerarPDFMantenimientoModel($Id)
    {                
        $ServicioInfo = $this->Servicio_Model->ConsultarServicioId($Id); 
        $ServicioEquipos = $this->Equipo_Servicio_Model->ConsultarServicioEquipoId($Id); 
        $completo1 =0;
        $completo2 =0;
        $completo3 =0;
        $equipo = '<td colspan="" >
                <table><tbody>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Marca:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Modelo:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Alcance:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 70px;font-size: 10px;font-size: 10px;">
                      Div. Min:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      N/S:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                    <tr>
                      <td style="width: 50px;font-size: 10px;">
                        Daño:
                      </td>
                      <td style="border-bottom: 1px solid #000;font-size: 10px;">
                         
                      </td>
                    </tr>
                  </tr>
                </tbody></table></td>';
        $i = 1;
      $table2 = '';
      $table = '';

        $head = '
          <style>
        
              a {
                text-decoration: none;
              }
        
             
              header {
                padding: 5px 0;
                margin-bottom: 0px;
              }
        
              h2 {
                text-align: center;
              }        
        
              table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 10px;
              }
        
              table th,
              table td {
                text-align: center;
                border: 0; 
                border-bottom:0px solid #000
              }
        
              table th {
                color: #5D6975;
                border-bottom: 1px solid #C1CED9;
                font-weight: normal;
                padding: 5px;
              }
        
              figure{
        
                margin-top: 0px;
                margin-right: 0px;
                margin-left: 20px;
                margin-bottom: 0px;
        
              }
        
              table td {
                padding: 5px;
                text-align: left;
              }
        
              
            
            </style>
            ';

            foreach($ServicioInfo as $servicio)
            {
              $table .= '
              <div class="table-responsive"> 
              <table class="table" cellspacing="0">
              <thead>
                <tr>
                  <th style="background: #F5F5F5;" colspan="6">DATOS DEL CLIENTE</th> 
                <tr>
              </thead>
              <tbody>
                <tr>
                  <td  style="background: #FFFFFF;width: 100px;" colspan="1" rowspan="3">
                    <figure>
                      <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogoV.png" style="width: 70px" align="left">
                    </figure>
                  </td>
                  <td style="background: #FFFFFF;text-align: left;width:100px" colspan="1">Razón social:</td>
                  <td style="background: #FFFFFF;border-bottom: 1px solid #000;width:320px" colspan="2">'.$servicio['RazonSocial'].'</td>
                  <td style="background: #FFFFFF;text-align: center;width:50px" colspan="1">Fecha:</td>
                  <td style="background: #FFFFFF;border-bottom: 1px solid #000;width:80px;text-align: center;">'.$servicio['Fecha'].' </td>
                <tr>
                <tr>
                  <td style="background: #FFFFFF;text-align: left" colspan="1" >Direccion:</td>
                  <td style="background: #FFFFFF;border-bottom: 1px solid #000;" colspan="4">'.$servicio['Domicilio'].'</td>
                <tr>
                
                <tr>
                  
                  <td style="background: #FFFFFF;text-align: center;" colspan="1">Telefono:</td>
                  <td style="background: #FFFFFF;border-bottom: 1px solid #000;text-align: center;width: 110px" colspan="1">'.$servicio['Telefono'].'</td>
        
                  <td style="background: #FFFFFF;text-align: center;width: 150px" colspan="1">Correo electronico:</td>
                  <td style="background: #FFFFFF;border-bottom: 1px solid #000;" colspan="1">'.$servicio['Correo'].'</td>
        
                  <td style="border:1px solid #000;background: #FFFFFF;text-align: center;font-size: xx-small;width: 300px" colspan="3" rowspan="3"><br><br>Aceptación de permiso firmada</td>
                <tr>
        
                <tr>
                  <td style="background: #FFFFFF;text-align: center;width:100px" colspan="3">Nombre y cargo a quien se entrega:</td>
                  <td style="background: #FFFFFF;text-align: center;border-bottom: 1px solid #000;">'.$servicio['Recoge'].'</td>
                <tr>
        
                <tr>
                  <td style="background: #FFFFFF;text-align: center;width:100px" colspan="1">Priodidad:</td>
                  <td style="background: #FFFFFF;text-align: center;padding-right: 0px;padding-left: 0px;" colspan="1" >
                    <input type="checkbox" id="Priodidad" name="Priodidad" value="1"'; 
                    if($servicio['Prioridad'] == 0)
                      $table.=' checked="checked"';
                    
                    $table.='> Ordinario 3-5 días<br>
                  </td>
                  <td style="background: #FFFFFF;text-align: center;" colspan="1" >
                    <input type="checkbox" id="Priodidad" name="Priodidad" value="2"'; 
                    if($servicio['Prioridad'] == 1)
                      $table.=' checked="checked"';
                    
                    $table.='> Urgente 1-2 días<br>
                  </td>
        
                  <td style="background: #FFFFFF;text-align: right;" colspan="1">
                    <label>Requerimientos especiales:</label><br>
                  </td>
        
                  <td style="border:1px solid #000;background: #FFFFFF;text-align: center;width: 300px" colspan="3" rowspan="3">'.$servicio['Requerimiento'].'</td>
                </tr>
                <thead>
                  <tr>
                    <th style="background: #F5F5F5;" colspan="6">DATOS DEL EQUIPO</th> 
                  <tr>
                </thead>
      
              </tbody>      
          </table>
          </div> 
                  ';
            }
            $table2 = '
              <table class="table" cellspacing="0">
              <tbody colspan="6">
              <tr>';
              $count =0;
              foreach($ServicioEquipos as $servicioequipo)
              {
                $count++;
                $table2=$table2.'<td colspan="" >                 

                <table><tbody>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Marca:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Marca'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Modelo:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Modelo'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Alcance:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['AlcanceMedicion'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 70px;font-size: 10px;font-size: 10px;">
                      Div. Min:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['DivisionMedicion'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      N/S:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Ns'].'
                    </td>
                    <tr>
                      <td style="width: 50px;font-size: 10px;">
                        Daño:
                      </td>
                      <td style="border-bottom: 1px solid #000;font-size: 10px;">
                        '.$servicioequipo['Dano'].' 
                      </td>
                    </tr>
                  </tr>
                </tbody></table>

                </td>';

                if($count == 1)
                  $completo1=$servicioequipo['Completo'];
                else if($count == 2)
                  $completo2=$servicioequipo['Completo'];
                else if($count == 1)
                  $completo3=$servicioequipo['Completo'];
              }

              if($count == 0)
              $table2=$table2.$equipo.$equipo.$equipo;
              else if($count == 1)
              $table2=$table2.$equipo.$equipo;
              else if($count == 2)
              $table2=$table2.$equipo;


                $table2.'
              </tr>
              </tbody>
            </table>';

            
            $table3 ='        
            <table cellspacing="0" colspan="6">
            <thead>
              <tr>
                <th style="background: #F5F5F5;" colspan="6">GENERALES DEL EQUIPO</th> 
              <tr>
            </thead>
            <tbody>
              
              <tr>
                
                <td colspan="" >
                  <table style="margin-bottom: 0px;"><tbody>
                   <tr>
                     <td style="width: 50px;text-align: center;">
                      Completo?
                     </td>
                     <td>';
                     
                     if($completo1 == 1){
                     $table3.='
                     <input type="checkbox" checked="checked" id="Completo" name="Completo" value="1">Si
            
                      <input type="checkbox" id="Completo" name="Completo" value="2">No
                      ';
                     }
                     else{
                      $table3.='
                        <input type="checkbox"  id="Completo" name="Completo" value="1">Si
             
                       <input type="checkbox"checked="checked" id="Completo" name="Completo" value="2">No
                       ';
                      
                     }
            
                     $table3.='</td>
                   </tr>
                  </tbody></table>
                 </td>
            
            
                 <td colspan="" >
                  <table style="margin-bottom: 0px;"><tbody>
                   <tr>
                     <td style="width: 50px;text-align: center;">
                      Completo?
                     </td>
                     <td>';
                     
                     if($completo2 == 1){
                     $table3.='
                     <input type="checkbox" checked="checked" id="Completo" name="Completo" value="1">Si
            
                      <input type="checkbox" id="Completo" name="Completo" value="2">No
                      ';
                     }
                     else{
                      $table3.='
                        <input type="checkbox"  id="Completo" name="Completo" value="1">Si
             
                       <input type="checkbox"checked="checked" id="Completo" name="Completo" value="2">No
                       ';
                      
                     }
            
                     $table3.='</td>
                   </tr>
                  </tbody></table>
                 </td>
            
            
              
                 <td colspan="" >
                  <table style="margin-bottom: 0px;"><tbody>
                   <tr>
                     <td style="width: 50px; text-align: center;">
                       Completo?
                     </td>
                     <td>';
                     
                     if($completo3 == 1){
                     $table3.='
                     <input type="checkbox" checked="checked" id="Completo" name="Completo" value="1">Si
            
                      <input type="checkbox" id="Completo" name="Completo" value="2">No
                      ';
                     }
                     else{
                      $table3.='
                        <input type="checkbox"  id="Completo" name="Completo" value="1">Si
             
                       <input type="checkbox"checked="checked" id="Completo" name="Completo" value="2">No
                       ';
                      
                     }
            
                     $table3.='</td>
                   </tr>
                  </tbody></table>
                 </td>
         
      </tr>
    </tbody>
  </table>

  <table cellspacing="0" colspan="6">
    <thead>
      <tr>
        <th style="background: #F5F5F5;" colspan="6">Observaciones del servicio</th> 
      <tr>
    </thead>
    <tbody>
    <td colspan="" >
    <table><tbody>
     <tr>
       <td style="width: 70px; text-align: left;">
         Fecha Ini:
       </td>
       <td style="border-bottom: 1px solid #000;"></td>
     </tr>
     <tr>
      <td style="width: 70px; text-align: left;">
        Hora Ini:
      </td>
      <td style="border-bottom: 1px solid #000;"></td >
    </tr>
    <tr>
      <td style="width: 75px; text-align: left;">
        Fecha Out:
      </td>
      <td style="border-bottom: 1px solid #000;"></td >
    </tr>
    <tr>
      <td style="width: 70px; text-align: left;">
        Hora Ini:
      </td>
      <td style="border-bottom: 1px solid #000;"></td >
    </tr>

    <tr>
      <td style="text-align: left;">
        Observaciones:
      </td>
    </tr>
    </tbody></table>
   </td>


   <td colspan="" >
    <table><tbody>
      <tr>
        <td style="width: 70px; text-align: left;">
          Fecha Ini:
        </td>
        <td style="border-bottom: 1px solid #000;"></td>
      </tr>
      <tr>
       <td style="width: 70px; text-align: left;">
         Hora Ini:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>
     <tr>
       <td style="width: 75px; text-align: left;">
         Fecha Out:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>
     <tr>
       <td style="width: 70px; text-align: left;">
         Hora Ini:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>

     <td style="text-align: left;">
       Observaciones:
     </td>
    </tbody></table>
   </td>

   <td colspan="" >
    <table><tbody>
      <tr>
        <td style="width: 70px; text-align: left;">
          Fecha Ini:
        </td>
        <td style="border-bottom: 1px solid #000;"></td>
      </tr>
      <tr>
       <td style="width: 70px; text-align: left;">
         Hora Ini:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>
     <tr>
       <td style="width: 75px; text-align: left;">
         Fecha Out:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>
     <tr>
       <td style="width: 70px; text-align: left;">
         Hora Ini:
       </td>
       <td style="border-bottom: 1px solid #000;"></td >
     </tr>

     <td style="text-align: left;">
      Observaciones:
     </td>
    </tbody></table>
   </td>
    </tbody>
  </table>



            </div>';
        $pdf = $head.$table.$table2.$table3;

        return $pdf;
    }


    public function GenerarPDFMantenimiento($Id)
    {                
      $ServicioInfo = $this->Servicio_Model->ConsultarServicioId($Id); 
      $ServicioEquipos = $this->Equipo_Servicio_Model->ConsultarServicioEquipoId($Id); 
            
      $completo1 =0;
      $completo2 =0;
      $completo3 =0;
      $equipo = '<td colspan="" >
                <table><tbody>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Marca:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Modelo:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Alcance:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 70px;font-size: 10px;font-size: 10px;">
                      Div. Min:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      N/S:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      
                    </td>
                    <tr>
                      <td style="width: 50px;font-size: 10px;">
                        Daño:
                      </td>
                      <td style="border-bottom: 1px solid #000;font-size: 10px;">
                         
                      </td>
                    </tr>
                  </tr>
                </tbody></table></td>';
      
      $table2 = '';
      $table = '';

        $head = '<!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <title>Reporte</title>
            <link rel="shortcut icon" type="image/x-icon" href="'.base_url().'/app-assets/images/ico/IntecIco.ico">
            <style>
              
              a {
                text-decoration: none;
              }
        
              
              header {
                padding: 5px 0;
                margin-bottom: 0px;
              }
        
              h2 {
                text-align: center;
              }        
        
              table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 10px;
              }
        
              table th,
              table td {
                text-align: center;
                border: 0; 
                border-bottom:0px solid #000
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
        
              figure{
                
                margin-top: 0px;
                margin-right: 0px;
                margin-left: 20px;
                margin-bottom: 0px;
        
              }

              body{
                
                margin-top: 0px;
                margin-right: 0px;
                margin-left: 0px;
                margin-bottom: 0px;
        
              }

              *{
                margin-top: 0cm;
                margin-bottom: 0cm;
                margin-left: 0cm;
                margin-right: 0cm;
                }
            
                @page {
                  margin: 5mm;
                  margin-header: 5mm;
                  margin-footer: 0mm;
              }
            </style>
          </head>
          <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" rightmargin="0">        
        ';

        foreach($ServicioInfo as $servicio)
        {
          $table .= '
          <table class="table" cellspacing="0">
          <thead>
            <tr>
              <th style="background: #F5F5F5;" colspan="6">DATOS DEL CLIENTE</th> 
            <tr>
          </thead>
          <tbody>
            <tr>
              <td  style="background: #FFFFFF;width: 100px;" colspan="1" rowspan="3">
                <figure>
                  <img class="logo" src="'.base_url().'app-assets/images/logo/IntecLogoV.png" style="width: 70px" align="left">
                </figure>
              </td>
              <td style="background: #FFFFFF;text-align: left;font-size: 15px;width:100px" colspan="1">Razón social:</td>
              <td style="background: #FFFFFF;border-bottom: 1px solid #000;width:320px" colspan="2">'.$servicio['RazonSocial'].'</td>
              <td style="background: #FFFFFF;text-align: center;width:50px" colspan="1">Fecha:</td>
              <td style="background: #FFFFFF;border-bottom: 1px solid #000;width:80px;text-align: center;">'.$servicio['Fecha'].' </td>
            <tr>
            <tr>
              <td style="background: #FFFFFF;text-align: left" colspan="1" >Direccion:</td>
              <td style="background: #FFFFFF;border-bottom: 1px solid #000;" colspan="4">'.$servicio['Domicilio'].'</td>
            <tr>
            
            <tr>
              
              <td style="background: #FFFFFF;text-align: center;" colspan="1">Telefono:</td>
              <td style="background: #FFFFFF;border-bottom: 1px solid #000;text-align: center;width: 110px" colspan="1">'.$servicio['Telefono'].'</td>
    
              <td style="background: #FFFFFF;text-align: center;width: 150px" colspan="1">Correo electronico:</td>
              <td style="background: #FFFFFF;border-bottom: 1px solid #000;" colspan="1">'.$servicio['Correo'].'</td>
    
              <td style="border:1px solid #000;background: #FFFFFF;text-align: center;font-size: xx-small;width: 300px" colspan="3" rowspan="3"><br><br>Aceptación de permiso firmada</td>
            <tr>
    
            <tr>
              <td style="background: #FFFFFF;text-align: center;width:100px" colspan="3">Nombre y cargo a quien se entrega:</td>
              <td style="background: #FFFFFF;text-align: center;border-bottom: 1px solid #000;">'.$servicio['Recoge'].'</td>
            <tr>
    
            <tr>
              <td style="background: #FFFFFF;text-align: center;width:100px" colspan="1">Priodidad:</td>
              <td style="background: #FFFFFF;;font-size: 12px;text-align: center;padding-right: 0px;padding-left: 0px;" colspan="1" >';

              if($servicio['Prioridad'] == 0)
                $table.='<input type="checkbox" id="Priodidad" name="Priodidad" checked="checked" > Ordinario 3-5 días<br>';
              else
                $table.='<input type="checkbox" id="Priodidad" name="Priodidad" > Ordinario 3-5 días<br>';

              $table.='</td>

              <td style="background: #FFFFFF;text-align: center; ;font-size: 12px;" colspan="1" >';

              if($servicio['Prioridad'] == 1)
                $table.='<input type="checkbox" id="Priodidad" name="Priodidad" checked="checked" > Urgente 1-2 días<br>';
              else
                $table.='<input type="checkbox" id="Priodidad" name="Priodidad" > Urgente 1-2 días<br>';

              $table.='</td>
    
              <td style="background: #FFFFFF;text-align: right;" colspan="1">
                <label>Requerimientos especiales:</label><br>
              </td>
    
              <td style="border:1px solid #000;background: #FFFFFF;text-align: center;width: 300px" colspan="3" rowspan="3">'.$servicio['Requerimiento'].'</td>
            </tr>
            <thead>
              <tr>
                <th style="background: #F5F5F5;" colspan="6">DATOS DEL EQUIPO</th> 
              <tr>
            </thead>
  
          </tbody>      
      </table>
              ';
        }


        
        $table2 .= '
              <table class="table" cellspacing="0">
              <tbody colspan="6">
              <tr>';
              $count =0;
              foreach($ServicioEquipos as $servicioequipo)
              {
                $count++;
                $table2.='<td colspan="" >                 

                <table><tbody>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Marca:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Marca'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Modelo:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Modelo'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      Alcance:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['AlcanceMedicion'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 70px;font-size: 10px;font-size: 10px;">
                      Div. Min:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['DivisionMedicion'].'
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50px;font-size: 10px;">
                      N/S:
                    </td>
                    <td style="border-bottom: 1px solid #000;font-size: 10px;">
                      '.$servicioequipo['Ns'].'
                    </td>
                    <tr>
                      <td style="width: 50px;font-size: 10px;">
                        Daño:
                      </td>
                      <td style="border-bottom: 1px solid #000;font-size: 10px;">
                        '.$servicioequipo['Dano'].' 
                      </td>
                    </tr>
                  </tr>
                </tbody></table>

                </td>';

                if($count == 1)
                  $completo1=$servicioequipo['Completo'];
                else if($count == 2)
                  $completo2=$servicioequipo['Completo'];
                else if($count == 1)
                  $completo3=$servicioequipo['Completo'];
              }

              if($count == 0)
              $table2=$table2.$equipo.$equipo.$equipo;
              else if($count == 1)
              $table2=$table2.$equipo.$equipo;
              else if($count == 2)
              $table2=$table2.$equipo;


                $table2.='
              </tr>
              </tbody>
            </table>';

            
$table3 ='        
<table cellspacing="0" colspan="6">
<thead>
  <tr>
    <th style="background: #F5F5F5;" colspan="6">GENERALES DEL EQUIPO</th> 
  <tr>
</thead>
<tbody>
  
  <tr>
    
    <td colspan="" >
      <table style="margin-bottom: 0px;"><tbody>
       <tr>
         <td style="width: 50px;text-align: center;">
          Completo?
         </td>
         <td>';
         
         if($completo1 == 1){
         $table3.='
         <input type="checkbox" checked="checked" id="Completo" name="Completo">Si

          <input type="checkbox" id="Completo" name="Completo" >No
          ';
         }
         else{
          $table3.='
            <input type="checkbox"  id="Completo" name="Completo">Si
 
           <input type="checkbox" checked="checked" id="Completo" name="Completo">No
           ';
          
         }

         $table3.='</td>
       </tr>
      </tbody></table>
     </td>


     <td colspan="" >
      <table style="margin-bottom: 0px;"><tbody>
       <tr>
         <td style="width: 50px;text-align: center;">
          Completo?
         </td>
         <td>';
         
         if($completo2 == 1){
         $table3.='
         <input type="checkbox" checked="checked" id="Completo" name="Completo">Si

          <input type="checkbox" id="Completo" name="Completo">No
          ';
         }
         else{
          $table3.='
            <input type="checkbox"  id="Completo" name="Completo">Si
 
           <input type="checkbox" checked="checked" id="Completo" name="Completo">No
           ';
          
         }

         $table3.='</td>
       </tr>
      </tbody></table>
     </td>


  
     <td colspan="" >
      <table style="margin-bottom: 0px;"><tbody>
       <tr>
         <td style="width: 50px; text-align: center;">
           Completo?
         </td>
         <td>';
         
         if($completo3 == 1){
         $table3.='
         <input type="checkbox" checked="checked" id="Completo" name="Completo">Si

          <input type="checkbox" id="Completo" name="Completo">No
          ';
         }
         else{
          $table3.='
            <input type="checkbox"  id="Completo" name="Completo">Si
 
           <input type="checkbox" checked="checked" id="Completo" name="Completo">No
           ';
          
         }

         $table3.='</td>
       </tr>
      </tbody></table>
     </td>
     
  </tr>
</tbody>
</table>

<table cellspacing="0" colspan="6">
<thead>
  <tr>
    <th style="background: #F5F5F5;" colspan="6">Observaciones del servicio</th> 
  <tr>
</thead>
<tbody>
<td colspan="" >
<table><tbody>
 <tr>
   <td style="width: 70px; text-align: left;font-size: 10px;">
     Fecha Ini:
   </td>
   <td style="border-bottom: 1px solid #000;font-size: 10px;"></td>
 </tr>
 <tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 75px; text-align: left;font-size: 10px;">
    Fecha Out:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>

<tr>
  <td style="text-align: left;font-size: 10px;">
    Observaciones:
  </td>
</tr>
</tbody></table>
</td>




<td colspan="" >
<table><tbody>
 <tr>
   <td style="width: 70px; text-align: left;font-size: 10px;">
     Fecha Ini:
   </td>
   <td style="border-bottom: 1px solid #000;font-size: 10px;"></td>
 </tr>
 <tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 75px; text-align: left;font-size: 10px;">
    Fecha Out:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>

<tr>
  <td style="text-align: left;font-size: 10px;">
    Observaciones:
  </td>
</tr>
</tbody></table>
</td>


<td colspan="" >
<table><tbody>
 <tr>
   <td style="width: 70px; text-align: left;font-size: 10px;">
     Fecha Ini:
   </td>
   <td style="border-bottom: 1px solid #000;font-size: 10px;"></td>
 </tr>
 <tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 75px; text-align: left;font-size: 10px;">
    Fecha Out:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>
<tr>
  <td style="width: 70px; text-align: left;font-size: 10px;">
    Hora Ini:
  </td>
  <td style="border-bottom: 1px solid #000;font-size: 10px;"></td >
</tr>

<tr>
  <td style="text-align: left;font-size: 10px;">
    Observaciones:
  </td>
</tr>
</tbody></table>
</td>

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
