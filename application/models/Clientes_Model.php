<?php

class Clientes_Model extends CI_Model{
    private $table;
    public function __construct()
    {
        $this->table = "cliente";
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
        //$this->db->insect_id();

        
    } 

}