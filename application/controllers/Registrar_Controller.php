<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registrar_Controller
 *
 * @author SigueMED
 */
class Registrar_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');        
        $this->load->helper('url_helper');
        $this->load->model('Usuario_Model');
        $this->load->model('Perfil_Model');
    }

    public function Load_Registrar()
    {
        $data['title'] = 'Registrar Usuario';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Usuario/Registrar');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }

    public function ConsultarUsuario()
    {
        $Usuarios = $this->Usuario_Model->ConsultarDataUsuarios();
        echo json_encode($Usuarios);
    }

    public function ConsultarUsuarioId()
    {
        $id =  $this->input->post('IdUsuario');

        $Usuarios = $this->Usuario_Model->ConsultarDataUsuariosId($id);
        echo json_encode($Usuarios);
    }

    public function InsertarUsuario()
    {
        $Nombre =  $this->input->post('Nombre');
        $ApellidosUsuario =  $this->input->post('ApellidosUsuario');
        $usuario =  $this->input->post('usuario');
        $contrasena =  $this->input->post('contrasena');
        $tipo =  $this->input->post('tipo');
        $creacion =$this->input->post('creacion');
        $contrasena = md5($contrasena);

        
        $this->Usuario_Model->InsertarUsuario($Nombre,$ApellidosUsuario,$usuario,$contrasena,$tipo,$creacion);
    }

    public function ActualizarUsuario()
    {
        $Nombre =  $this->input->post('Nombre');
        $ApellidosUsuario =  $this->input->post('ApellidosUsuario');
        $usuario =  $this->input->post('usuario');
        $contrasena =  $this->input->post('contrasena');
        $tipo =  $this->input->post('tipo');
        $contrasena = md5($contrasena);
        $creacion =$this->input->post('creacion');
        $IdUsuario =$this->input->post('IdUsuario');
       
    
        $res = $this->Usuario_Model->ActualizarUsuario($Nombre,$ApellidosUsuario,$usuario,$contrasena,$tipo,$IdUsuario,$creacion);
        $res = $this->Usuario_Model->caducidad($IdUsuario);
    }

    public function ConsultarTipoUsuario()
    {
        $Perfil = $this->Perfil_Model->ConsultarTipoUsuario();

        $output ='<option value="">Seleccione tipo de Perfil</option>';

        foreach ($Perfil as $perfil)
        {
           $output .='<option value="'.$perfil['IdPerfil'].'">'.$perfil['DescripcionPerfil'].'</option>';
        }
        echo $output;
    }

    public function EliminarUsuarioPorId()
    {
        $IdUsuario = $this->input->post('IdUsuario');

        $this->Usuario_Model->EliminarUsuarioPorId($IdUsuario);
    }
    //put your code here
}
