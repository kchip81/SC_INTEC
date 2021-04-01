<!--<div style="visibility: hidden; display:inline;" class="row match-height">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Cargar archivo</h4>
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

            <div class="card-body collapse in">
                <div class="card-block">

                    <div class="form-body">  

                    <div class="modal">
                        <div class="alert alert-success" role="alert">
                            <p style="text-align: center;">Espere por favor...</p>
                            <div id="loading"></div>
                        </div>
                        <br><br><br><br><br><br>
                    </div>
                        


                        <div class="dragdrop">

                            <form action="" enctype="multipart/form-data" id="formuploadajax">
                                <input id="file" name="file" type="file" accept=".xl*" required>
                                <p>Arrastre el archivo aquí o haga clic aqui.</p>
                                <button type="submit">Cargar orden</button>
                            </form>                        
                        </div>

                                                                                                   
                    </div> 
                </div>
            </div>


        </div>
    </div>
</div>-->


<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Catalogo de servicios</h4>
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
            

            <div class="card-body collapse in">
                <div class="card-block">
                    <!--FORM BODY-->
                    <div class="form-body">

                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Clientes">Cliente</label>
                                    <select name="cliente" id="cliente" class="form-control">
                                        <option value="">Clientes...</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="NombreProveedor">Contacto:</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="NombreProveedor" class="form-control" placeholder="Contacto" name="NombreProveedor" readonly>
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="compania">Compañía:</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="compania" class="form-control" placeholder="Compañía" name="compania" readonly>
                                        <div class="form-control-position">
                                            <i class="icon-office"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="DireccionCliente">Dirección:</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="DireccionCliente" class="form-control" placeholder="Dirección" name="DireccionCliente" readonly>
                                        <div class="form-control-position">
                                            <i class="icon-globe2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailProveedor">Correo Contacto:</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="emailProveedor" class="form-control" placeholder="email" name="emailProveedor" readonly>
                                        <div class="form-control-position">
                                            <i class="icon-mail2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <table class="table table-responsive table-bordered table-striped" id="tblServicio"  style="width: 100%">
                            <thead>
                                <th>No. Orden</th>
                                <th>No. Equipo</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Num. Serie</th>
                                <th>Clave</th>
                                <th>Acciónes</th>
                            </thead>
                            <tbody >

                            </tbody>
                        </table>


                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <div class="modal-Carga">
                                    <div class="alert alert-success" role="alert">
                                        <p style="text-align: center;">Espere por favor...</p>
                                        <div id="loading"></div>
                                    </div>
                                    <br><br><br><br><br><br>
                                </div>
                                    


                                    <div class="dragdrop">

                                        <form action="" enctype="multipart/form-data" id="formuploadajax">
                                            <input id="file" name="file" type="file" accept=".xl*" required>
                                            <p>Arrastre el archivo aquí o haga clic aqui.</p>
                                            <button type="submit">Cargar orden</button>
                                        </form>                        
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>



<style>

body{
  background: rgba(0,0,0,0.9);
}
form{
  position: absolute;
  top: 50%;
  left: 5%;
  margin-top: -100px;
  width: 90%;
  height: 210px;
  border: 4px dashed #96989A;
}
form p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: black;
  font-family: Arial;
}
form input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
form button{
  margin: 0;
  color: #fff;
  background: #16a085;
  border: none;
  width: 100%;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
}
form button:hover{
  background: #149174;
	color: #0C5645;
}
form button:active{
  border:0;
}

.dragdrop{
  height: 250px;
}


.alert{
    text-align: center;
}
.modal-alert .alert #loading {
  
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid rgba(255,255,255,.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

.modal-Carga{
    display: none;
}

.modal-block{
    display: block;
}

@keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}


</style>

<script>
$(document).ready(function(){
  $('form input').change(function () {
    if(this.files.length != 0)
        $('form p').text(this.files[0].name);
    else
        $('form p').text('Arrastre el archivo aquí o haga clic en esta área.');
    });

    $("#formuploadajax").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url();?>/Automatizacio_Controller/CargarDatosExcel',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.modal-Carga').removeClass("modal-Carga").addClass("modal-alert");            
                $('.modal-Carga').addClass("modal-block");            
            },
            success: function(response){ 
                $('.modal-alert').removeClass("modal-alert").addClass("modal");

            },error: function (jqXHR, exception) {
                $('.modal-alert').removeClass("modal-alert").addClass("modal");
                $('form p').text('Arrastre el archivo aquí o haga clic en esta área.');
                $('.modal-block').removeClass("modal-block").addClass("modal-Carga");            

                swal({
                    title: "Archivo subido",
                    icon: "info",
                });
            }
        });
    });
});
</script>




<script>

    var idClientes =0;

    $(document).ready(function()
    {
        CargarClientes();
    });

    $("#cliente").change(function()
    {
        CargarDatosClientes($(this).val());
    });

    function CargarDatosClientes(id)
    {
        datos = {"id":id};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/ConsultarDataClientes_ajax',
            dataType: 'json',
            data:datos,
            success:function(resp)
            {
                $('#NombreProveedor').val(resp[0].NombreContacto);
                $("#DireccionCliente").val(resp[0].Domicilio);
                $("#compania").val(resp[0].NombreCompania);
                $("#emailProveedor").val(resp[0].Correo);
                CargarDatos(id);
            }
        });
    }

    function CargarDatos(id){

        datos = {"IdCliente":id};

        $('#tblServicio').DataTable({
            "ajax":{
                url:"<?php echo site_url();?>/Automatizacio_Controller/ConsultarEquiposOrdenesCalibracion",
                method:"POST",
                data: datos,
                dataSrc: ""
            },

             "destroy":true,
             "language": {
                  "lengthMenu": "Mostrando _MENU_ registros por pag.",
                  "zeroRecords": "Sin Datos - disculpa",
                  "info": "Motrando pag. _PAGE_ de _PAGES_",
                  "infoEmpty": "Sin registros disponibles",
                  "infoFiltered": "(filtrado de _MAX_ total)"
              },

                "columnDefs":[
                {
                    "targets":7, "data":"IdOrden", "render": function(data,type,row,meta)
                    {
                        return '<a classs = "btn" onclick="OpenModal('+data+')"><i class="fa fa-file-upload" data-toggle="tooltip" data-placement="top" id="Subir Archivo" title="Subir Archivo"> Subir Archivo</i></a><br><a classs = "btn" onclick="OpenModal('+data+')"><i class="fa fa-file-download" data-toggle="tooltip" data-placement="top" id="BajarArchivo" title="Bajar Archivo"> Bajar Excel</i></a><br><a classs = "btn" onclick="OpenModal('+data+')"><i class="fa fa-file-download" data-toggle="tooltip" data-placement="top" id="BajarArchivo" title="Bajar Archivo"> Bajar PDF</i></a>';
                    }
                }],

              "columns": [
                    { "data": "IdOrden" },
                    { "data": "IdEquipo" },
                    { "data": "Descripcion" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "NumService" },
                    { "data": "ClaveId" }
                ]
            });
    }

    function CargarClientes()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/ConsultarClientes_ajax',
            success:function(resp)
            {
                $("#cliente").html(resp)
            }
        });
    }

</script>