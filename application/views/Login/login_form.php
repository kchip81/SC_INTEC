<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Intec</title>
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
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

   
    <!-- END Custom CSS-->
  </head>
    <body>
        <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <?php
                    if (isset($errorMessage)) {
                      
                        echo "<div class='alert alert-danger mb-2' role='alert'>";
                        echo $errorMessage;
                        echo "</div>";
                    }
                        if (isset($logout_message)) {
                          
                           
                            echo "<div class='alert alert-info mb-2' role='alert'>";
                            echo $logout_message;
                            echo "</div>";
                        }
                    ?>
            <section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="<?php echo base_url();?>app-assets/images/logo/IntecLogo.png" alt="branding logo"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Sistema de Control</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    
     

                        <?php echo form_open('Login_Controller/ValidarLogin','class="form-horizontal form-simple" novalidate'); ?>
                    
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <input type="text" class="form-control form-control-lg input-lg"name="username" id="usuario" placeholder="Tu Usuario" required>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control form-control-lg input-lg" name="password" id="password" placeholder="Contraseña" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group row">
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me"> Recuerdame</label>
                                </fieldset>
                            </div>
                           
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" value=" Login " name="submit"><i class="icon-unlock2"></i> Ingresar</button>
                      
                    </form>
                </div>
            </div>




                            <div class="modal fade" id="modalContraseña" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="ModalLabel">Actualización de la contraseña
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdOrden" name="IdOrden">
                                            </h4>
                                          </div>
                             
                                    <div class="modal-body">
                                                                   
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" class="form-control form-control-lg input-lg" readonly="readonly" value="<?php echo $this->session->userdata('intec_Usuario'); ?>"  id="user" placeholder="Usuario">
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                        </fieldset>
                                        <br>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg input-lg" id="anteriorcontrasena" placeholder="Contraseña" required>
                                            <div class="form-control-position">
                                                <i class="icon-lock"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" onkeyup="muestra_seguridad_clave(this.value)" class="form-control form-control-lg input-lg" name="password" id="nuevacontrasena" placeholder="Nueva Contraseña" required>
                                            <div class="form-control-position">
                                                <i class="icon-lock"></i>
                                            </div>
                                            <div id="progress" class="progress">
                                                <div class="progress-bar  bg-info" role="progressbar" style="width: 100%;border-radius: 10px;text-align:center;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
                                            </div>
                                        </fieldset>
                                    
                                    </div>
                                      <!-- FORM ACTIONS-->
                                    <div class="modal-footer">
                                        <button id="ActualizarModal" type="button" class="btn btn-primary"><i class="icon-refresh"></i> Actualizar</button>
                                    </div>
                                </div>
                            </div>
  
            
        </div>
    </div>
</section>

        </div>
      </div>
    </div>

    <script>
        var security = 0;
        $(document).ready(function()
        {
            var message = "<?php echo $errorMessage; ?>";
   
            if(message.localeCompare("Actualizar contraseña") == 0 || message.localeCompare("Contraseña muy vieja") == 0)
            {
                $('#modalContraseña').modal('show');
            }
        });
    
        function muestra_seguridad_clave(clave){
            seguridad=seguridad_clave(clave);
            security = seguridad;
            var barra = '<div class="progress-bar  bg-info" role="progressbar" style="width: 100%;border-radius: 10px;text-align:center;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'+ seguridad +'%</div>';
            $('#progress').html(barra);
        }
    
        var numeros="0123456789";
        var letras="abcdefghyjklmnñopqrstuvwxyz";
        var letras_mayusculas="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";

        function tiene_numeros(texto){
            for(i=0; i<texto.length; i++){
                if (numeros.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_letras(texto){
            texto = texto.toLowerCase();
            for(i=0; i<texto.length; i++){
                if (letras.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_minusculas(texto){
            for(i=0; i<texto.length; i++){
                if (letras.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_mayusculas(texto){
            for(i=0; i<texto.length; i++){
                if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function seguridad_clave(clave){
            var seguridad = 0;
            if (clave.length!=0){
                if (tiene_numeros(clave) && tiene_letras(clave)){
                    seguridad += 30;
                }
                if (tiene_minusculas(clave) && tiene_mayusculas(clave)){
                    seguridad += 30;
                }
                if (clave.length >= 4 && clave.length <= 5){
                    seguridad += 10;
                }else{
                    if (clave.length >= 6 && clave.length <= 8){
                        seguridad += 30;
                    }else{
                        if (clave.length > 8){
                            seguridad += 40;
                        }
                    }
                }
            }
            return seguridad				
        }	

        $('#ActualizarModal').click(function()
        {
            if(security >=50){
    
                datos = {
                    IdUsuario: $("#user").val(),
                    Contrasena: $("#anteriorcontrasena").val(),
                    ContrasenaNueva: $("#nuevacontrasena").val()
                };

                $.ajax
                ({            
                    type:'post',
                    url:'<?php echo site_url();?>/Login_Controller/ActualizarContrasena',
                    data:datos, 
                    success:function(resp)
                    {
                        alert(resp);
                        if(resp != "Contraseña incorrecta")
                        $('#modalContraseña').modal('hide'); 
                    }
                });  
            }else
                alert("Seguridad muy baja");
        });
    </script>
        
        
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url();?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>

