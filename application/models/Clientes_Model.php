<?php

class Clientes_Model extends CI_Model{
    private $table;
    public function __construct()
    {
        $this->table = "cliente";
        $this->tabla = "equipo";
        parent::__construct();
        $this->load->database();

    }

    public function ConsultarClientes()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function ConsultarDataClientes($idCliente)
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $this->db->where($this->table.".IdCliente = '$idCliente'");
        
        $query = $this->db->get();

        return $query->result_array();
    } 

    public function Insertar($IdProducto,$NomProducto,$Codigo,$NoLote,$fCaducidad,$cantidad,$costo,$IdCliente)
    {
        $data = array('IdProducto' => $IdProducto,'NomProducto' => $NomProducto,'Codigo' => $Codigo,'NoLote' => $NoLote
        ,'fCaducidad' => $fCaducidad,'Cantidad' => $cantidad,'Costo' => $costo,'IdCliente' => $IdCliente);

        return $this->db->insert('complemento_orden_servicio',$data);        
    } 


    public function InsertarProducto($Descripcion,$Marca,$Modelo,$NumService, $DivisionMedicion,$AlcanceMedicion,$ClaveId,$IdCliente)
    {
        $data = array('Descripcion' => $Descripcion,'Marca' => $Marca,'Modelo' => $Modelo,'NumService' => $NumService
        ,'ClaveId' => $ClaveId,'AlcanceMedicion' => $AlcanceMedicion,'DivisionMedicion' => $DivisionMedicion,'IdCliente' => $IdCliente);

        return $this->db->insert('equipo',$data);        
    } 



    public function ConsultarEquipo($peticion)
    {
        $this->db->select($this->tabla.'.*');
        $this->db->from($this->tabla);
        $this->db->where($this->tabla.$peticion);
        
        $query = $this->db->get();

        return $query->result_array();
    }
}