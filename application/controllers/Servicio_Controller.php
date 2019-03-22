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
        
    }
    //put your code here
}
