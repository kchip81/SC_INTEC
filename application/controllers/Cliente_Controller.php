<?php

class Cliente_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('Usuario_Model');   
        $this->load->model('Clientes_Model');
        $this->load->model('Equipo_Model');
    }

    public function Load_PlanAnual()
    {
        $data['title'] = 'Plan Anual';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardPlanAnual');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }

    public function Load_CatalogoCliente()
    {
        $data['title'] = 'Catalogo de Cliente';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Cliente/CardCatalogo');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
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

    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        $output ='<option value="">Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
            $output .='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }

        echo $output;
    }

    public function ConsultarEquipoPorCliente()
    {
        $idCliente = $this->input->post('idCliente');

        $Equipo = $this->Equipo_Model->ConsultarEquipoPorCliente($idCliente);
        echo json_encode($Equipo);
        /*
        if($Equipo[0]['IdOrden'] != null)        
            echo json_encode($Equipo);
        else
        {
            $array = array();
            echo json_encode($array);   
        }*/
    }

    public function ConsultarCertificadoEquipo()
    {
        $idEquipo = $this->input->post('idEquipo');

        $Equipo = $this->Equipo_Model->ConsultarCertificadoEquipo($idEquipo);
        echo json_encode($Equipo);
    }



    /*----------------------------------------------------------------------*/

    public function ConsultarCliente()
    {
        $Cliente = $this->Clientes_Model->ConsultarClientes();
        echo json_encode($Cliente);
    }

    public function ConsultarClienteId()
    {
        $IdCliente = $this->input->post('IdCliente');
        $Cliente = $this->Clientes_Model->ConsultarDataClientes($IdCliente);
        echo json_encode($Cliente);
    }
    

    public function InsertarCliente()
    {
        $compania = $this->input->post('compania');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');

        $Cliente = $this->Clientes_Model->InsertarCliente($email,$telefono,$direccion,$nombre,$compania);
        echo json_encode($Cliente);
    }
    
    public function ActualizarCliente()
    {
        $compania = $this->input->post('compania');
        $nombre = $this->input->post('nombre');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $IdCliente =$this->input->post('IdCliente');

        //echo $compania.$telefono . $nombre.$direccion.$IdCliente.$email;

        $actualizacion = $this->Clientes_Model->ActualizarCliente($email,$telefono,$direccion,$nombre,$compania,$IdCliente);
    }
}