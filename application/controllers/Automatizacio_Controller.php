<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Automatizacio_Controller
 *
 * @author SigueMED
 */
class Automatizacio_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('PDF_Model');
        $this->load->model('Servicio_Model');
        $this->load->model('Clientes_Model');
        $this->load->model('Equipo_Model');
        $this->load->model('Equipo_Servicio_Model');
    }

    public function Load_Automatizacion()
    {
        $data['title'] = 'Automatizacion Creacion de Orden';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Automatizacion/CardAutomatizacion');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }
    
    public function CargarDatosExcel()
    {
        $this->load->library('Excel');

        $ruta = 'upload/';
        $uploadStatus = 1; 
        $uploadedFile = ''; 

        if(!is_dir($ruta)){
            mkdir($ruta,0755);
        }

        $file = $_FILES["file"]["name"];       
        if(!empty($_FILES["file"]["name"])){ 

            $name_file = basename($_FILES["file"]["name"]); 
            $targetFilePath = $ruta . $name_file; 

            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                $uploadedFile = $name_file; 

                $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
                $spreadsheet = $reader->load($ruta.$name_file);
                $sheet = $spreadsheet->getSheet(0);


                foreach ($sheet->getRowIterator(2) as $row) {
						
                    $description = trim($sheet->getCellByColumnAndRow(1,$row->getRowIndex()));
                    $stock = trim($sheet->getCellByColumnAndRow(2,$row->getRowIndex()));
                    
                    
                    $data_product=['description'=>$description,'stock'=>$stock];
                    $arr_data_produts[]=$data_product;
                    $number_products++;
                    
                }
                unlink($targetFilePath);                
                echo json_encode($arr_data_produts);


            }else{ 
                $uploadStatus = 0; 
            } 
        }

        if(!$uploadStatus == 1){
            echo 'Fallo al importar los datos';
        }
    }


    public function Load_MantenimientoPDF($idServicio)
    {

        $data['title'] = 'Servicio';

        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Automatizacion/CardPDFMantenimiento',$data);
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');


      // code...
    }

    public function PDFMantenimientoMODEL(){
        $ID = $this->input->post('id');
        echo $pdf = $this->PDF_Model->GenerarPDFMantenimientoModel($ID);
    }

    public function Load_CatalogoServicio()
    {

        $data['title'] = 'Servicio';

        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Automatizacion/CardServicios',$data);
        $this->load->view('templates/FormFooter',$data);
        $this->load->view('templates/FooterContainer');
      // code...
    }

    public function Load_Process($idServicio)
    {
        $data['title'] = 'Procesos';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Task/CardProcess');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }

    public function CrearPDFServicio($IdOrden)
    {
        $this->load->library('M_pdf');

        $hoy = date("dmyhis");

        $style="<style>@page *{
            margin-top: 0cm;
            margin-bottom: 0cm;
            margin-left: 0cm;
            margin-right: 0cm;
            }</style>";
        

        $pdf = $this->PDF_Model->GenerarPDFMantenimiento($IdOrden);

        $pdfFilePath = "reporte_".$hoy.".pdf";

        $this->m_pdf->pdf->WriteHTML($pdf);
        $this->m_pdf->pdf->WriteHTML($style);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }

    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        $output ='<option value="" disabled selected>Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
            $output .='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }

        echo $output;
    }

    public function ConsultarDatosEquipos()
    {
        $IdCliente = $this->input->post('IdCliente');
        $Equipos = $this->Equipo_Model->ConsultarEquiposbyCliente($IdCliente);


        $output ='<option value="" disabled selected>Seleccione un Equipo</option>';

        foreach ($Equipos as $equipos)
        {
            $output .='<option value="'.$equipos['IdEquipo'].'">'.$equipos['Descripcion'].' - '.$equipos['NumService'].' </option>';
        }

        echo $output;
    }

    public function ConsultarDatosEquiposByServicio()
    {
        $Id = $this->input->post('Id');
        $Equipos = $this->Equipo_Servicio_Model->ConsultarServicioEquipo($Id);


        $output ='<option value="" disabled selected>Seleccione un Equipo</option>';

        foreach ($Equipos as $equipos)
        {
            $output .='<option value="'.$equipos['IdEquipo'].'">'.$equipos['Descripcion'].' - '.$equipos['NumService'].' </option>';
        }

        echo $output;
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
    public function CrearServicio(){
        $idCliente = $this->input->post('idCliente');
        $razon = $this->input->post('razon');
        $fecha = $this->input->post('fecha');
        $recoge = $this->input->post('recoge');
        $prioridad = $this->input->post('prioridad');
        $requerimiento = $this->input->post('requerimiento');
        
        echo $data = $this->Servicio_Model->InsertarServicio($idCliente,$razon,$fecha,$recoge,$prioridad,$requerimiento);
    }

    public function InsertarServicio()
    {
        
        $IdServicio = $this->input->post('IdServicio');
        $IdEquipo = $this->input->post('IdEquipo');
        $CountEquipos = $this->Equipo_Servicio_Model->ConsultarNumEquipos($IdServicio);

        if($CountEquipos->NumEquipos <3){

            echo $this->Equipo_Servicio_Model->InsertarServicio($IdServicio,$IdEquipo);
        }else{
            echo 0;
        }
    }

    public function ConsultarServicios(){
        $Data = $this->Servicio_Model->ConsultarServicio();
        echo json_encode($Data);
    }

    public function phpinfo(){
        echo phpinfo();
    }
}
