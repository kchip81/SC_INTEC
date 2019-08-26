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
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtNumEnvio">No. Guía</label>
                            <input type="text" class="form-control" name="txtNumEnvio" id="txtNumEnvio" value="<?=$Paquete->NumeroGuia?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="txtNumEnvio">No. Guía</label>
                            <input type="text" class="form-control" name="txtNumEnvio" id="txtNumEnvio" value="<?=$Paquete->NumeroGuia?>">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
