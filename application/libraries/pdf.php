<?php
session_start();
$varsession  = $_SESSION['cliente'];
?>
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
                /*border: 1px solid #000;*/
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