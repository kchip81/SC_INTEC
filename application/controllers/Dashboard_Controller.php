<?php

class Dashboard_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('Paquetes_Model');
        $this->load->model('EquipoOrden_Model');
        $this->load->model('OrdenServicio_Model');
        
    }

    public function Load_Dashboard()
    {
        $data['title'] = 'Intec';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer');

        $this->load->view('Tablero/CardEquipoDemora');
        $this->load->view('Tablero/CardOrdenesAbiertas');
        $this->load->view('Tablero/CardPaquetesAbiertos');
        $this->load->view('Tablero/CardManteCalib');
        
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

    public function ConsultarTotalCalibra()
    {
        $Total = $this->OrdenServicio_Model->ConsultarTotalCalibra();
        echo json_encode($Total);
    }

    public function ConsultarTotalMant()
    {
        $Total = $this->OrdenServicio_Model->ConsultarTotalMant();
        echo json_encode($Total);
    }

    public function ConsutarTotaOrdenesAbiertos()
    {
        $Total = $this->OrdenServicio_Model->ConsutarTotaOrdenesAbiertos();
        echo json_encode($Total);
    }
    //put your code here
}
