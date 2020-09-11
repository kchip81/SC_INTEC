<?php 
  $Perfil = $this->session->userdata('intec_IdPerfil');
  if($Perfil == null){
    redirect('/', 'refresh');
  }
?>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $title;?></title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>app-assets/images/ico/IntecIco.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/extensions/pace.css">

    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->


    <script src="<?php echo base_url();?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo base_url();?>js/vendor/jquery-3.3.1.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js" type="text/javascript"></script>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>


    <!-- END Custom CSS-->
    <style>
        .embed-responsive-10by3 {
            padding-top: 120%;
         }
    </style>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<?php

        log_message('debug','*->MainContainer->SESSION->USERDATA:'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_NombreUsuario'));

    ?>

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow navbar-border">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="<?php echo site_url(); ?>" class="navbar-brand nav-link"><img alt="branding logo" src="<?php echo base_url();?>app-assets/images/logo/IntecLogoV.png" data-expand="<?php echo base_url();?>app-assets/images/logo/IntecLogoV.png" data-collapse="<?php echo base_url();?>app-assets/images/logo/IntecLogoS.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>

            </ul>

            <ul class="nav navbar-nav float-xs-right">
              <?php 
                                              
                if(is_dir('./FotoUsuario/'.$this->session->userdata('intec_IdUsuario').'/'))
                  $fotoPerfil=base_url().'FotoUsuario/'.$this->session->userdata('intec_IdUsuario').'/'.$this->session->userdata('intec_IdUsuario').'.png';
                else 
                  $fotoPerfil= base_url().'FotoUsuario/default-avatar.png';
 
              ?>
              <!--Navbar Usuario-->
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="<?php echo $fotoPerfil?>"  alt="avatar"><i></i></span><span class="user-name"><?php echo $this->session->userdata('intec_NombreUsuario'); ?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo site_url(); ?>/Usuario/Config" class="dropdown-item"><i class="fas fa-users-cog"></i> User</a>
                    <a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a>
                    <a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a>
                    <a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
                  <div class="dropdown-divider"></div><a href="<?php echo site_url(); ?>/Usuario/CerrarSesion" class="dropdown-item"><i class="icon-power3"></i>Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <?php

          if($Perfil == 1)
          {
            echo '<li class=" nav-item"><a href="#"><i class="icon-group"></i><span data-i18n="nav.agenda.main" class="menu-title">Usuarios</span></a>
              <ul class="menu-content">
                <li><a href="'.site_url('Usuario/Registrar').'" data-i18n="nav.agenda.main" class="menu-item">Catalogo de Usuarios</a>
                </li>
              </ul>
            </li>';
          }

          if($Perfil == 1 || $Perfil == 2)
          {
            $cadena = '<li class=" nav-item"><a href="#"><i class="icon-user-tie"></i><span data-i18n="nav.agenda.main" class="menu-title">Clientes</span></a>
              <ul class="menu-content">
                <li><a href="'.site_url('Cliente/CatalogoCliente').'" data-i18n="nav.agenda.main" class="menu-item">Catalogo de Clientes</a>
                </li>
                ';
                /*<li><a href="'.site_url('Cliente/CatalogoClienteEquipos').'" data-i18n="nav.agenda.main" class="menu-item">Catalogo de Equipos</a>
                </li> */

                if($Perfil == 1)
                {
                  $cadena = $cadena.'<li><a href="'.site_url('Cliente/ConsultarPlanAnual').'" data-i18n="nav.agenda.main" class="menu-item">Plan Anual de servicios</a>
                  </li>';
                }

              $cadena = $cadena.'</ul>
            </li>';
            echo $cadena;
          }

          if($Perfil == 1 || $Perfil == 2)
          {
            echo '<li class=" nav-item"><a href="#"><i class="icon-wrench3"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Servicios</span></a>
              <ul class="menu-content">
                <li><a href="'.site_url('Servicio/NuevaOrden').'" data-i18n="nav.cards.card_statistics" class="menu-item">Crear Orden de Servicio</a>
                </li>
                <li><a href="'.site_url('Servicio/ConsultarOrden').'" data-i18n="nav.cards.card_statistics" class="menu-item">Consultar Ordenes Abiertas</a>
                </li>
                <li><a href="'.site_url('Paquetes/ConsultarPaquetesAbiertos').'" data-i18n="nav.cards.card_statistics" class="menu-item">Consultar Paquetes Abiertos</a></li>
                <li><a href="'.site_url('Servicio/ConsultarEquipoDemora').'" data-i18n="nav.cards.card_statistics" class="menu-item">Equipos con Demora</a></li>
                <li><a href="'.site_url('Factura/ConsultarFacturas').'" data-i18n="nav.cards.card_statistics" class="menu-item">Facturas Servicios</a></li>
              </ul>
            </li>';
          }

          if($Perfil == 3)
          {
            echo '<li class=" nav-item"><a href="#"><i class="icon-wrench3"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Servicios</span></a>
              <ul class="menu-content">
                <li><a href="'.site_url('Servicio_Cliente/NuevaOrden').'" data-i18n="nav.cards.card_statistics" class="menu-item">Crear Orden de Servicio</a>
                </li>
                <li><a href="'.site_url('Servicio_Cliente/ConsultarOrden').'" data-i18n="nav.cards.card_statistics" class="menu-item">Consultar Ordenes Abiertas</a>
                </li>
              </ul>
            </li>';
          }

          if($Perfil == 1 || $Perfil == 2)
          {
            echo '<li class=" nav-item"><a href="#"><i class="icon-ios-speedometer"></i><span data-i18n="nav.expediente.main" class="menu-title">Proveedores</span></a>
              <ul class="menu-content">
                <li><a href="'.site_url('Proveedores/CatalogoProveedor').'" data-i18n="nav.expediente.main" class="menu-item">Catalogo de Proveedores</a>
                </li>
              </ul>
            </li>';
          }


          ?>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->
