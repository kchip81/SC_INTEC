<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <!--CARD HEADER-->
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Información Paquete</h4>
                <input type="hidden" id="IdPaquete" name="IdPaquete">
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                        <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                </div>


            </div>
            <!--CARD BODY-->
            <div class="card-body collapse in">
                <div class="card-block">
                    <!--FORM BODY-->
                    <div class="form-body">
                      <div class="row">
                        <div class="col-md-1">
                          <div class="form-group">
                            <label for="txtIdPaquete">#</label>
                            <input type="text" class="form-control" name= "txtIdPaquete" id="txtIdPaquete" value="<?=$Paquete->IdPaqueteEnvio?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="txtProveedor">Laboratorio</label>
                            <input type="text" class="form-control" name= "txtProveedor" id="txtProveedor" readonly value ="<?=$Paquete->Descripcion_lab?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="txtTelefonoProveedor">Telefono</label>
                            <input type="text" class="form-control" name= "txtTelefonoProveedor" id="txtTelefonoProveedor" value="<?=$Paquete->Telefono?>" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="txtEstatusPaquete">Estatus Paquete</label>
                            <input type="text" class="form-control" name="txtEstatusPaquete" id="txtEstatusPaquete" value="<?=$Paquete->DescripcionEstatusPaquete?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtNumEnvio">No. Guía</label>
                            <input type="text" class="form-control" name="txtNumEnvio" id="txtNumEnvio" value="<?=$Paquete->NumeroGuia?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtFechaEnv">Fecha Envío</label>
                            <input type="text" class="form-control" name="txtFechaEnv" id="txtFechaEnv" value="<?=$Paquete->FechaEnv?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtCostoEnvio">Costo Envío</label>
                            <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input type="text" class="form-control" name="txtCostoEnvio" id="txtCostoEnvio" value="<?=$Paquete->CostoEnvio?>" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtFechaRec">Fecha Recepción</label>
                            <input type="text" class="form-control" name="txtFechaRec" id="txtFechaRec" value="<?=$Paquete->FechaRecLab?>" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <button type="button" class="btn btn-primary"  name="button" onclick="window.open('<?=site_url('Servicio/PaquetePDF/')?><?=$Paquete->IdPaqueteEnvio?>')">Ver PDF <i class="icon-file-pdf"></i></button>

                        </div>

                        <div class="col-md-3">
                          <button type="button" class="btn btn-green"  name="btnAvanzarEstatus" id="btnAvanzarEstatus" onclick="AvanzarEstatusPaquete()">Avanzar Estatus <i class="fas fa-sign-in-alt"></i></button>

                        </div>

                        <div class="col-md-3">
                          <button id="eliminar" type="button" class="btn btn-danger" style="display: none;"  name="button" onclick="EliminarPaquete()">Eliminar Paquete <i class="fas fa-trash"></i></button>

                        </div>

                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    ConsultarEquiposPaquete(<?=$Paquete->IdPaqueteEnvio?>);

    var IdEstatusPaquete = <?=$Paquete->IdEstatusPaquete?>;

    if (IdEstatusPaquete < 3)
    {

      var x = document.getElementById("btnAvanzarEstatus");
      x.style.display = "none";

    }
  });

  function EliminarPaquete(){
    //alert(<?=$Paquete->IdPaqueteEnvio?>);

    $.ajax
    ({
        url:'<?php echo site_url();?>/Paquetes_Controller/EliminarPaquete',
        data:{
          IdPaqueteEnvio:<?=$Paquete->IdPaqueteEnvio?>
        },
        method: "POST",
        success:function(resp)
        {
          $(location).attr('href','<?php echo site_url();?>/Paquetes/ConsultarPaquetesAbiertos');

        }
    });

  }

  function AvanzarEstatusPaquete() {

    $.ajax({
      url: '<?=site_url()?>/Paquetes_Controller/AvanzarEstatusEquiposPaquete_ajax',
      type: 'POST',
      data: {IdPaqueteEnvio: <?=$Paquete->IdPaqueteEnvio?>}
    })
    .done(function() {
      swal({
          title: "El estatus de los equipos ha sido actualizado",
          icon: "success",
      });
      //alert('El estatus de los equipos ha sido actualizado');
    })
    .fail(function() {
      swal({
          title: "error AvanzarEstatusPaquete",
          icon: "error",
      });
      //alert("error AvanzarEstatusPaquete()");
    });

    ConsultarEquiposPaquete(<?=$Paquete->IdPaqueteEnvio?>);

  }
  </script>
