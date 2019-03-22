<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Controller
 *
 * @author SigueMed
 */


class Login_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        // Load form helper library
        $this->load->helper('form');
        
        
        
        
    }
    
    public function Cargar_Login($logout=FALSE)
    {
        if($this->session->has_userdata('logged_in'))
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
                    $data['logout_message'] = "Sesión Cerrada exitosamente";
                    $this->load->view('Login/login_form', $data); 
                }
         
            }
    }
    
    public function ValidarLogin()
    {
               
           $this->session->set_userdata('logged_in', TRUE);
                
                $data['title'] = "Intec";
                $this->load->view('templates/MainContainer', $data);
                $this->load->view('templates/FooterContainer');
               
                 
                         
                 
             
             
             
        }
        
        public function CerrarSesion()
        {
            $this->session->unset_userdata('logged_in','IdUsuario');
            
            $this->Cargar_Login(TRUE);
        }
    }
    
    

