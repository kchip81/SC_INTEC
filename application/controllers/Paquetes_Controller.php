<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paquetes_Controller
 *
 * @author SigueMED
 */
class Paquetes_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
        
        $this->load->model('Paquetes_Model');
        
    }
    
    //CARGAR VISTAS---------------------------------------------------------------------------------------------
    public function Load_ConsultarPaquetesAbiertos()
    {

        $data['title'] = 'Consultas de Ordenes de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Paquete/CardConsultaPaquetesAbiertos');
        
        $this->load->view('templates/FooterContainer');

 
    }
    
    public function ConsultarPaquetesAbiertos_ajax()
    {
        
        $PaquetesAbiertos = $this->Paquetes_Model->ConsultarPaquetesAbiertos();
        
        for($i=0;$i<sizeof($PaquetesAbiertos);$i++)
        {
            switch ($PaquetesAbiertos[$i]['IdEstatusPaquete'])
            {
                case 1:
                    $PaquetesAbiertos[$i]['FechaEnv']= '<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesAbiertos[$i]['IdPaqueteEnvio'].','.$PaquetesAbiertos[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                   break;
                case 2:
                    $PaquetesAbiertos[$i]['FechaRecLab']='<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesAbiertos[$i]['IdPaqueteEnvio'].','.$PaquetesAbiertos[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    break;
                
                }          
        }
        
        echo json_encode($PaquetesAbiertos);
        
    }
    //---------------------------------------------------------------------------------------------------------
    
    public function ConsultarPaquetesPorOrden()
    {
        $IdOrden = $this->input->post('IdOrden');
        
        
        $PaquetesOrden = $this->Paquetes_Model->ConsultarPaquetesOrdenServicio($IdOrden);
        
        
        
        for($i=0;$i<sizeof($PaquetesOrden);$i++)
        {
            switch ($PaquetesOrden[$i]['IdEstatusPaquete'])
            {
                case 1:
                    $PaquetesOrden[$i]['FechaEnv']= '<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                   break;
                case 2:
                    $PaquetesOrden[$i]['FechaRecLab']='<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    break;
                case 3:
                    $PaquetesOrden[$i]['FechaFinalCalLab']='<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    break;
                case 4:
                    $PaquetesOrden[$i]['FechaRetLab']='<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    break;
                case 5:
                    $PaquetesOrden[$i]['FechaRecpIntecLab']='<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    break;
                }          
        }
        
        echo json_encode($PaquetesOrden);
    }


    public function ModificarPaquetesPorOrden()
    {
        $IdPaqueteOrden = $this->input->post('IdPaqueteEnvio');
        $IdEstatusPaquete = $this->input->post('IdEstatusActual');
        $FechaEstatus = $this->input->post('fecha');
        $NumeroGuia = $this->input->post('NumeroGuia');
        $CostoEnvio = $this->input->post('CostoEnvio');

        switch ($IdEstatusPaquete)
        {
            case 1:
                $Fecha = "FechaEnv";
                $datosOrden =array("NumeroGuia"=>$NumeroGuia, "CostoEnvio"=>$CostoEnvio);
                $this->Paquetes_Model->ActualizarPaquete($IdPaqueteOrden,$datosOrden);
                break;
            case 2:
                $Fecha = "FechaRecLab";
                break;
            case 3:
                $Fecha = "FechaFinalCalLab";
                break;
            case 4:
                $Fecha = "FechaRetLab";
                break;
            case 5:
                $Fecha = "FechaRecpIntecLab";
                break;
        }

        $IdEstatusPaquete=$IdEstatusPaquete+1;

        if($IdEstatusPaquete <= 3)
        {
            $this->Paquetes_Model->ActualizarEstatusPaquete($IdPaqueteOrden,$IdEstatusPaquete,$FechaEstatus,$Fecha);      
            
        }
        
    }
    
    
    //put your code here
}
