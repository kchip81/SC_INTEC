<?php

class Dashboard_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('Paquetes_Model');
        $this->load->model('EquipoOrden_Model');
        
    }

    public function Load_Dashboard()
    {
        $data['title'] = 'Intec';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer');

        $this->load->view('Tablero/CardEquipoDemora');
        $this->load->view('Tablero/CardOrdenesAbiertas');
        $this->load->view('Tablero/CardPaquetesAbiertos');
        
        $this->load->view('templates/FooterContainer');
    }   
    
    public function ConsutarTotaPaquetesAbiertos()
    {
        $Total = $this->Paquetes_Model->ConsutarTotaPaquetesAbiertos();
        echo json_encode($Total);
    }

    public function ConsultarTotalEquipoOrden()
    {
        $Total = $this->EquipoOrden_Model->ConsultarTotalEquipoOrden();
        echo json_encode($Total);
    }

    public function ConsultarTotalEquipoDemora()
    {
        $Total = $this->EquipoOrden_Model->ConsultarTotalEquipoDemora();
        echo json_encode($Total);
    }
    //put your code here
}
