<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calendario_Controller
 *
 * @author SigueMED
 */
class Calendario_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('OrdenServicio_Model');
        $this->load->model('Paquetes_Model');
    }

    public function Load_CatalogoCalendario()
    {
        $data['title'] = 'Calendario';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Task/CardCalendario');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }
    
    public function Load_Process()
    {
        $data['title'] = 'Procesos';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Task/CardProcess');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }

    public function ConsultarFechaPaquetes(){
        $Data = $this->Paquetes_Model->ConsultarFechaPaquetes();
        echo json_encode($Data);
    }

    public function ConsutarFechasOrdenes()
    {
        $Data = $this->OrdenServicio_Model->ConsutarFechasOrdenes();
        echo json_encode($Data);
    }
    
    //put your code here
}
