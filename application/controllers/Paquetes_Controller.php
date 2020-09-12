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
        $this->load->model('EquipoOrden_Model');

    }

    //CARGAR VISTAS---------------------------------------------------------------------------------------------
    public function Load_ConsultarPaquetesAbiertos()
    {



        $data['title'] = 'Consultas de Ordenes de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Paquete/CardConsultaPaquetesAbiertos');
        //$this->load->view('Paquete/CardConsultaEquiposPaquetes');

        $this->load->view('templates/FooterContainer');


    }

    public function ConsultarNumEquiposOrden(){

        $Id =  $this->input->post('Id');

        $result = $this->EquipoOrden_Model->ConsultarNumEquiposOrden($Id);

        echo $result->numequipo;
    }

    public function EliminarPaquete()
    {
        $IdPaqueteEnvio = $this->input->post('IdPaqueteEnvio');

        $result = $this->Paquetes_Model->EliminarPaquete($IdPaqueteEnvio);

        if($result)
            echo 'borrado';
        else
            echo 'no se borro';

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

    public function ConsultarEquiposPaquetes()
    {
        $id = $this->input->post('Id');

        $PaquetesOrden = $this->EquipoOrden_Model->ConsultarEquiposPaquetes($id);

        echo json_encode($PaquetesOrden);
    }

    //DETALLE Paquete
    public function Load_ConsultarDetallePaquete($IdPaqueteOrden)
    {

      $data['title'] = 'Paquete';
       $data['Paquete'] = $this->Paquetes_Model->ConsultarPaquete($IdPaqueteOrden);
       $data['EquiposPaquete'] = $this->EquipoOrden_Model->ConsultarEquiposPaquetes($IdPaqueteOrden);

      $this->load->view('templates/MainContainer',$data);
      $this->load->view('templates/HeaderContainer',$data);
      $this->load->view('Paquete/CardConsultaDetallePaquete', $data);
      $this->load->view('Paquete/CardConsultaEquiposPaquetes', $data);

      $this->load->view('templates/FooterContainer');


      // code...
    }

    public function ObtenerNuevoEstatus_ajax()
    {
      $IdEstatusActual = $this->input->post('IdEstatus');

      $this->load->model('CatalogoEstatusPaquetes_Model');

      $NuevoEstatus = $this->CatalogoEstatusPaquetes_Model->ObtenerSiguienteEstatus($IdEstatusActual);

      echo json_encode($NuevoEstatus);
      // code...
    }

    public function AvanzarEstatusEquipo_ajax()
    {

      try {

        $this->db->trans_start();
        $IdEquipoOrden = $this->input->post('IdEquipoOrden');
        $IdEstatusActual = $this->input->post('IdEstatusActual');
        $FechaEstatus = $this->input->post('FechaEstatus');

        $result = $this->EquipoOrden_Model->RegistrarEstatusEquipo($IdEquipoOrden,$IdEstatusActual+1,$FechaEstatus);

        $transStatus= $this->db->trans_complete();

        if ($transStatus == true)
        {
            $this->db->trans_commit();
        }
        else
        {
            $this->db->trans_rollback();
        }

        echo $result;

      } catch (Exception $e) {
        log_message('error', $ex->getMessage());
        $this->db->trans_rollback();
      }


      // code...
    }

    public function RecibirEtiquetaEquipo_ajax()
    {
      $IdEquipoOrden = $this->input->post('IdEquipoOrden');
      $FechaEtiqueta = $this->input->post('FechaEtiqueta');

      $result = $this->EquipoOrden_Model->RecibirEtiquetaEquipo($IdEquipoOrden,$FechaEtiqueta);

      echo $result;
      // code...
    }

    public function AvanzarEstatusEquiposPaquete_ajax()
    {
      $IdPaqueteOrden = $this->input->post('IdPaqueteEnvio');
      $IdEstatusPaquete = $this->input->post('IdEstatusPaquete');

      $this->load->helper('date');

      $FechaEstatus = mdate('%Y-%m-%d',now());

      $resultado = $this->EquipoOrden_Model->AvanzarEstatusEquiposPorPaquete($IdPaqueteOrden,$FechaEstatus);
      if($resultado)
        $resul = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, $IdEstatusPaquete+1);

        switch ($IdEstatusPaquete+1) {
            case 1:
                echo 'Creado';
                break;
            case 2:
                echo 'Enviado a Laboratorio';
                break;
            case 3:
                echo 'Recibido Laboratorio';
                break;
            case 4:
                echo 'Calibración Terminada';
                break;
            case 5:
                echo 'En Retorno';
                break;
            case 6:
                echo 'Recibido Intec';
                break;
            case 7:
                echo 'Terminado';
                break;
                
            default:
                echo'Terminado';
                break;
            
      }

    }

    /*public function ActualizarPaqueteStatus()
    {
      $IdPaqueteOrden = $this->input->post('IdPaqueteEnvio');
      $IdEstatusPaquete = $this->input->post('IdEstatusPaquete');

      switch ($IdEstatusPaquete) {
        case 'Creado':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 1);
            break;
        case 'Enviado a Laboratorio':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 2);
            break;
        case 'Recibido Laboratorio':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 3);
            break;
        case 'Calibración Terminada':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 4);
            break;
        case 'En Retorno':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 5);
            break;
        case 'Recibido Intec':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 6);
            break;
        case 'Terminado':
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 7);
            break;
            
        default:
            $result = $this->Paquetes_Model->ActualizarPaqueteStatus($IdPaqueteOrden, 7);
            break;
      }

      echo $result;
    }*/

    //put your code here
}
