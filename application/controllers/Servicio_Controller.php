<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio_Controller
 *
 * @author SigueMED
 */
class Servicio_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->model('Clientes_Model');
        $this->load->helper('url_helper');
    }
    
    public function Load_NuevaOrdenServcio()
    {
        $data['title'] = 'Registrar Nueva Orden de Servicio';
        $this->load->view('templates/MainContainer',$data);
        $this->load->view('templates/HeaderContainer',$data);
        $this->load->view('Servicio/FormNuevaOrdenServicio');
        $this->load->view('Servicio/CardOrdenServicio');
        $this->load->view('templates/FormFooter',$data); 
        $this->load->view('templates/FooterContainer');
    }
    
    public function CrearNuevaOrden()
    {
        
    }

    
    public function ConsultarClientes_ajax()
    {
        $Clientes = $this->Clientes_Model->ConsultarClientes();


        echo $output ='<option value="">Seleccione un cliente</option>';

        foreach ($Clientes as $cliente)
        {
           echo $output ='<option value="'.$cliente['IdCliente'].'">'.$cliente['NombreCompania'].'</option>';
        }
    }

    public function ConsultarDataClientes_ajax()
    {
        $id = $_POST['id'];

        if($id != "")
        {
            $Clientes = $this->Clientes_Model->ConsultarDataClientes($id);     
            $json = array();
            $json = $Clientes;
            echo json_encode($json);
        }
    }

    public function ConsultarProducto()
    {
        echo $output ='<option value="">Seleccione un producto</option>';

        for ($i = 0; $i <= 5 ; $i++)
        {
           echo $output ='<option value="'.$i.'">producto'.$i.'</option>';
        }
    }


    public function LlenarTabla()
    {
        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $nLote = $_POST['nLote'];
        $fCaducidad = $_POST['fCaducidad'];
        $cantidad = $_POST['cantidad'];
        $costo = $_POST['costo'];
        if($codigo != '' && $nombre != '' && $nLote != '' && $fCaducidad != '' && $cantidad != '' && $costo != '')
        {
            echo '
            <tr>
            <td class="id">'.$id.'</td>
            <td class="producto">'.$producto.'</td>
            <td class="codigo">'.$codigo.'</td>
            <td class="nombre">'.$nombre.'</td>
            <td class="nLote">'.$nLote.'</td>
            <td class="fCaducidad">'.$fCaducidad.'</td>
            <td class="cantidad">'.$cantidad.'</td>
            <td class="costo">$'.$costo.'</td>
            <td><button type="button" class="btn btn-primary" id="btnEliminarSubProducto">Eliminar</button></td>
            </tr>';
        }               
    }

    public function Insertar_ajax()
    {
        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $codigo = $_POST['codigo'];
        $nLote = $_POST['nLote'];
        $fCaducidad = $_POST['fCaducidad'];
        $cantidad = $_POST['cantidad'];
        $costo = $_POST['costo'];

        // $Clientes = $this->Clientes_Model->Insertar;     

    }
    //put your code here
}
