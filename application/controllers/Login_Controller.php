<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Controller
 *
 * @author Simplifica Mi Negocio
 */


class Login_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        // Load form helper library
        $this->load->helper('form');
        
        $this->load->model('Usuario_Model');
        
        
        
        
    }
    
    public function Cargar_Login($logout=FALSE)
    {
        log_message('debug','*->Cargar_Login->SESSION->USERDATA:'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_NombreUsuario')); 
        if($this->session->has_userdata('intec_logged_in'))
            {
                $data['title'] = "Intec";
                $this->load->view('templates/MainContainer', $data);
                $this->load->view('templates/FooterContainer');
                
            }
            else
            {
                if ($logout!== TRUE)
                {
                    $this->load->view('Login/login_form'); 
                    
                }
                else
                {
                    session_destroy();
                    log_message('debug', '*->SESSION DESTRUIDA');
                    $data['logout_message'] = "Sesión Cerrada exitosamente";
                    $this->load->view('Login/login_form', $data); 
                }
         
            }
    }
    
    public function ValidarLogin()
    {
               
           $Usr = $this->input->post('username');
           $Contrasena = $this->input->post('password');
            
             
             
             //Validar el usuario y contraseña
             $Usuario = $this->Usuario_Model->ValidarUsuarioContrasena($Usr,$Contrasena); 
             
             if ($Usuario==TRUE)
             {//El usuario y contrasena son correctos
                 
                 //Cargar funciones del perfil
                
                 $SessionData = array(
                     'intec_IdUsuario'=>$Usuario->IdUsuario,
                     'intec_NombreUsuario'=>$Usuario->NombreUsuario.' '.$Usuario->ApellidosUsuario,
                     'intec_IdPerfil'=>$Usuario->IdPerfil,
                     'intec_DescripcionPerfil'=>$Usuario->DescripcionPerfil,
                     
                     'intec_logged_in'=>TRUE,
                     
                 );
                 
                 //Establecer Sesion del usuario
                 $this->session->set_userdata($SessionData);
                 
                 log_message('debug', '*->Validar_Login->SESSION:['.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_NombreUsuario').']');
                
                $data['title'] = "Intec";
                $this->load->view('templates/MainContainer', $data);
                $this->load->view('templates/FooterContainer');
               
                 
                         
                 
             }
             else
             {
                $data['errorMessage'] = 'Usuario y/o Contraseña Incorrectos';
               
          
                $this->load->view('Login/login_form', $data);
             }
                
                
               
                 
                         
                 
             
             
             
        }
        
        public function CerrarSesion()
        {
            $this->session->unset_userdata('intec_logged_in','intec_IdUsuario');
            
            $this->Cargar_Login(TRUE);
        }
    }
    
    

