<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



//Index.php Dirige al Login
$route['default_controller'] = 'Login_Controller/Cargar_Login';
$route['Usuario/CerrarSesion'] = 'Login_Controller/CerrarSesion';

//Registrar
$route['Usuario/Registrar'] = 'Registrar_Controller/Load_Registrar';

//Dashboard
$route['Dashboard'] = 'Dashboard_Controller/Load_Dashboard';

//Servicio
$route['Servicio/NuevaOrden']='Servicio_Controller/Load_NuevaOrdenServcio';
$route['Servicio/ConsultarOrden']='Servicio_Controller/Load_ConsultarOrdenServcio';
$route['Servicio/ConsultarDetalleServicio/(.+)']='Servicio_Controller/Load_ConsultarDetalleOrden/$1';
$route['Servicio/NuevaOrdenPDF/(.+)']='Servicio_Controller/CrearOrdenPDF/$1';
$route['Servicio/PaquetePDF/(.+)']='Servicio_Controller/CrearPDF/$1';
$route['Servicio/ConsultarEquipoDemora']='Servicio_Controller/Load_EquipoDemora';

$route['Servicio/ConsultarPaquetes/(.+)']='Servicio_Controller/Load_ConsultarPaqueteServicio/$1';
$route['Servicio/ConsultarOrdenPaquetes/(.+)']='Servicio_Controller/Load_ConsultarPaqueteOrdenServicio/$1';

//PAQUETES
$route['Paquetes/ConsultarPaquetesAbiertos']='Paquetes_Controller/Load_ConsultarPaquetesAbiertos';
$route['Paquete/ConsultarDetalle/(.+)']='Paquetes_Controller/Load_ConsultarDetallePaquete/$1';



//Cliente
$route['Cliente/ConsultarPlanAnual']='Cliente_Controller/Load_PlanAnual';
$route['Cliente/CatalogoCliente']='Cliente_Controller/Load_CatalogoCliente';
$route['Cliente/CatalogoClienteEquipos/(.+)'] ='Cliente_Controller/Load_CatalogoClienteEquipos/$1';
$route['Cliente/ConsultarOrden/(.+)/(.+)']='Cliente_Controller/Load_ConsultarOrdenServicio/$1/$2';


//Proveedores
$route['Proveedores/CatalogoProveedor']='Laboratorio_Controller/Load_CatalogoLaboratorio';

//Factura
$route['Factura/ConsultarFacturas']='Factura_Controller/Load_ConsultarFacturas';
$route['Factura/RegistrarFactura/(.+)']='Factura_Controller/Load_Factura/$1';
$route['Factura/ConsultarEquiposFactura/(.+)']='Factura_Controller/Load_ConsultarDetalleFactura/$1';
