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
        
        $this->load->model('Laboratorio_Model');
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
    //put your code here
}
