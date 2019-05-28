<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Laboratorio_Controller
 *
 * @author SigueMED
 */
class Laboratorio_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('Laboratorio_Model');
    }

    public function Load_CatalogoLaboratorio()
    {
        $data['title'] = 'Catalogo de Proveedores';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Proveedores/CardProveedores');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
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

    public function ConsultarLaboratorio()
    {
        $Laboratorios = $this->Laboratorio_Model->ConsultarLaboratorio();
        echo json_encode($Laboratorios);
    }

    public function ConsultarLaboratorioId()
    {
        $id =  $this->input->post('IdLaboratorio');
        $Laboratorios = $this->Laboratorio_Model->ConsultarLaboratorioId($id);
        echo json_encode($Laboratorios);
    }

    public function ActualizarLaboratorio()
    {
        $Descripcion_lab = $this->input->post('Descripcion');
        $Domicilio = $this->input->post('Domicilio');
        $Telefono = $this->input->post('Telefono');
        $Id = $this->input->post('IdLaboratorio');

        $this->Laboratorio_Model->ActualizarLaboratorio($Descripcion_lab,$Domicilio,$Telefono,$Id);
    }

    public function InsertarLaboratorio()
    {
        $Descripcion_lab = $this->input->post('Descripcion');
        $Domicilio = $this->input->post('Domicilio');
        $Telefono = $this->input->post('Telefono');
        $Id = $this->input->post('IdLaboratorio');

        $this->Laboratorio_Model->InsertarLaboratorio($Descripcion_lab,$Domicilio,$Telefono,$Id);
    }

    //put your code here
}
