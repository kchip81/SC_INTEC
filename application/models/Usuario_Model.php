<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_Model
 *
 * @author SigueMed
 */
class Usuario_Model extends CI_Model {
    private $table;
    
    public function __construct()
    {
        parent::__construct();
            $this->load->database();
            $this->table = "usuarios";
    }
    
    public function ValidarUsuarioContrasena($Usuario=FALSE, $Contrasena=FALSE )
    {
        $this->db->select($this->table.'.*, date_format(fechaActualizado,"%Y-%m-%d") as fechaA, DescripcionPerfil, perfil.IdPerfil');
        $this->db->from($this->table);
        $this->db->join('perfil',$this->table.'.IdPerfil = perfil.IdPerfil');
        
        $this->db->where ('usuario', $Usuario);
        $this->db->where ('contrasena', $Contrasena);

        $this->db->limit(1);
 
        $query = $this->db->get();
        return $query->row();          
    }  

    public function ValidarUsuarioFecha($Usuario)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where ('usuario', $Usuario);
        $this->db->where ('fechaActualizado < now()');
        $this->db->limit(1);
 
        $query = $this->db->get();
        return $query->row(); 
        
    }

    public function ConsultarDataUsuarios()
    {
        $this->db->select('*');
        $this->db->from($this->table);        
        $query = $this->db->get();
        
        return $query->result_array();
    } 

    public function ConsultarDataUsuariosId($IdUsuario)
    {
        $this->db->select('*');
        $this->db->from($this->table); 
        $this->db->where ('IdUsuario', $IdUsuario);
        
        $query = $this->db->get();
        return $query->row();  
    }

    public function InsertarUsuario($Nombre,$ApellidosUsuario,$usuario,$contrasena,$tipo,$creacion)
    {
        $data = array('NombreUsuario' => $Nombre,'ApellidosUsuario' => $ApellidosUsuario,'usuario' => $usuario,'contrasena' => $contrasena
        ,'IdPerfil' => $tipo,'creacion' => $creacion );

        $this->db->insert($this->table,$data);  
        
        $insertId = $this->db->insert_id();
    }

    public function EliminarUsuarioPorId($IdUsuario)
    {
        $this->db->where($this->table.'.IdUsuario', $IdUsuario);
        $this->db->delete($this->table);
    }

    public function ActualizarUsuario($Nombre,$ApellidosUsuario,$usuario,$contrasena,$tipo,$IdUsuario,$creacion)
    {
        $this->db->set('NombreUsuario',$Nombre);
        $this->db->set('ApellidosUsuario',$ApellidosUsuario);
        $this->db->set('usuario',$usuario);
        $this->db->set('IdPerfil',$tipo);
        $this->db->set('contrasena',$contrasena);
        $this->db->set('creacion',$creacion);
        //$this->db->set('fechaCaducidad','ADDDATE(fechaActualizado, INTERVAL 180 DAY)');
        $this->db->where($this->table.'.IdUsuario', $IdUsuario);
        
        return $this->db->update($this->table);
    }

    public function caducidad($IdUsuario)
    {
        $this->db->set('fechaCaducidad','ADDDATE(fechaActualizado, INTERVAL 180 DAY)', false);
        $this->db->where($this->table.'.IdUsuario', $IdUsuario);
        return $this->db->update($this->table);
    }
    
    public function ActualizarContrasena($IdUsuario,$contrasenanueva)
    {
        $this->db->set('contrasena',md5($contrasenanueva));
        $this->db->set('creacion',1);
        $this->db->set('fechaCaducidad','ADDDATE(fechaActualizado, INTERVAL 180 DAY)', false);
        $this->db->where($this->table.'.usuario', $IdUsuario);
        return $this->db->update($this->table);
    }
}
