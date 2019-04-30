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
    
    public function ConsultarPaquetesPorOrden()
    {
        $IdOrden = $this->input->post('IdOrden');
        
        
        $PaquetesOrden = $this->Paquetes_Model->ConsultarPaquetesOrdenServicio($IdOrden);
        
        
        
        for($i=0;$i<sizeof($PaquetesOrden);$i++)
        {
            switch ($PaquetesOrden[$i]['IdEstatusPaquete'])
            {
                case PQT_CREADO:
                    $PaquetesOrden[$i]['FechaEnv']= '<button type="button" class="btn btn-primary" id="btnConfirmar" onclick="ConfirmarPaquete('.$PaquetesOrden[$i]['IdPaqueteEnvio'].','.$PaquetesOrden[$i]['IdEstatusPaquete'].')">Confirmar</button>';
                    $PaquetesOrden[$i]['FechaRecLab']="";
                   break;
                case PQT_ENVIADOLABORATORIO:
                    $PaquetesOrden[$i]['FechaRecLab']='<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmacion" id="btnConfirmar">Confirmar</button>';
                    $PaquetesOrden[$i]['FechaFinalCalLab']="";
                    break;
            }
            
            
        }
        
        echo json_encode($PaquetesOrden);
    }
    //put your code here
}
