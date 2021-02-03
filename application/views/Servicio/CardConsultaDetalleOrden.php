<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <!--CARD HEADER-->
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Información Orden</h4>
                <input type="hidden" id="IdOrden" name="IdOrden">
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
                            <input type="text" class="form-control" name= "txtIdPaquete" id="txtIdOrden" value="<?=$Orden->IdOrden?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="txtCliente">Compañia</label>
                            <input type="text" class="form-control" name= "txtCliente" id="txtCliente" readonly value ="<?=$Orden->NombreCompania?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="txtContacto">Contacto</label>
                            <input type="text" class="form-control" name= "txtContacto" id="txtContacto" value="<?=$Orden->NombreContacto?>" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="txtTelefono">Teléfono</label>
                            <input type="text" class="form-control" name="txtTelefono" id="txtTelefono" value="<?=$Orden->Telefono?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtEstatus">Estatus</label>
                            <input type="text" class="form-control" name="txtEstatus" id="txtEstatus" value="<?=$Orden->DescripcionEstatusOrden?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtFechaCreacion">Fecha Creación</label>
                            <input type="text" class="form-control" name="txtFechaCreacion" id="txtFechaCreacion" value="<?=$Orden->Fecha?>" readonly>
                          </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <button type="button" class="btn btn-sm btn-primary"  name="button" onclick="window.location.href='<?=site_url('Servicio/PDF/')?><?=$Orden->IdOrden?>'">Ver PDF <i class="icon-file-pdf"></i></button>
                        </div>


                        <div class="col-md-3">
                          <button id="eliminarOrden" type="button" class="btn btn-danger" style="display: none;"  name="button" onclick="EliminarOrden()">Eliminar Orden <i class="fas fa-trash"></i></button>

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
    ConsultarEquiposOrden(<?=$Orden->IdOrden?>);
  });

  function EliminarOrden(){

//alert(<?=$Orden->IdOrden?>);
    $.ajax
    ({
        url:'<?php echo site_url();?>/Servicio_Controller/EliminarOrden',
        data:{
          IdOrden:<?=$Orden->IdOrden?>
        },
        method: "POST",
        success:function(resp)
        {
          $(location).attr('href','<?php echo site_url();?>/Servicio/ConsultarOrden');

        }
    });
  }
  </script>
