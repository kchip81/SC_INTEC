<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Catalogo de Clientes</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            <!--</div>-->
            <br>
            <div class="col-md-3">
                <div class="form-group" style="margin-top:7px;">
                    <button type="button" class="btn btn-primary" id="btnAgregarCliente"><i class="icon-android-add"></i> Agregar Cliente</button>
                </div>
            </div>
            <br>
            <table class="table table-responsive table-bordered table-striped" id="tblCliente"  style="width: 100%">
                <thead>
                    <th>No. Cliente</th>
                    <th>Compañia</th>
                    <th>Contacto</th>
                    <th>Domicilio</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </thead>
                <tbody >

                </tbody>
            </table> 



                            <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="ModalLabel">Agregar Cliente 
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdOrden" name="IdOrden">
                                            </h4>
                                          </div>
                             
                                    <div class="modal-body">
                                                                                 
                                    <!--<h5>Agregar Cliente</h5>-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="NombreProveedor">Contacto:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="NombreProveedor" class="form-control" placeholder="Usuario" name="NombreProveedor">
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
                                                    <input type="text" id="compania" class="form-control" placeholder="Compañía" name="compania">
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
                                                    <input type="text" id="DireccionCliente" class="form-control" placeholder="Dirección" name="DireccionCliente">
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
                                                    <input type="text" id="emailProveedor" class="form-control" placeholder="email" name="emailProveedor">
                                                    <div class="form-control-position">
                                                        <i class="icon-mail2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="TelefonoCliente">Telefono:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="TelefonoCliente" class="form-control" placeholder="Telefono" name="TelefonoCliente">
                                                    <div class="form-control-position">
                                                        <i class="icon-phone"></i>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                      <!-- FORM ACTIONS-->
                                    <div class="modal-footer">
                                        <button onclick="Limpiar()" type="button" class="btn btn-warning mr-1" data-dismiss="modal"><i class="icon-cross2"></i> Cerrar</button>
                                        <button id="AgregarModalAgregar" type="button" class="btn btn-primary"><i class="icon-android-add"></i> Agregar</button>
                                        <button id="ActualizarModalAgregar" type="button" class="btn btn-primary" style="display:none">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

  


        </div>
    </div>
</div>



<script>

    var idClientes =0;
    $(document).ready(function()
    {
        CargarClientes();
    });

    function CargarClientes()
    {
        var t = $('#tblCliente').DataTable({

        "ajax":{
            url:"<?php echo site_url();?>/Cliente_Controller/ConsultarCliente",
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
                    "targets":6, "data":"IdCliente", "render": function(data,type,row,meta)
                    {       
                        return '<a classs = "btn" onclick="OpenModal_ActualizarCliente('+data+')"><i class="icon-pencil2" data-toggle="tooltip" data-placement="top" id="EditarCliente" title="Editar Cliente"> Editar</i></a>';
                    }
                }],  
        
        "columns": [
                { "data": "IdCliente" },
                { "data": "NombreCompania" },
                { "data": "NombreContacto" },
                { "data": "Domicilio" },
                { "data": "Correo" },
                { "data": "Telefono" }
            ]
        });
    }

    $('#btnAgregarCliente').click(function()
    {
        $('#modalCliente').modal('show');       
    });

    $('#btnAgregarCliente').click(function()
    {
        $('#AgregarModalAgregar').show ();
        $('#ActualizarModalAgregar').hide();

        var c = "Agregar Cliente ";
        $('#ModalLabel').html(c);
        $('#modalCliente').modal('show');       
    });

    function OpenModal_ActualizarCliente(idCliente)
    {
        $('#AgregarModalAgregar').hide();
        $('#ActualizarModalAgregar').show();
        var c = "No. Cliente: " + idCliente ;
        $('#ModalLabel').html(c);
        idClientes = idCliente
        
        datos = {"IdCliente":idCliente};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Cliente_Controller/ConsultarClienteId',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                $("#NombreProveedor").val(resp[0].NombreContacto);
                $("#compania").val(resp[0].NombreCompania);
                $("#DireccionCliente").val(resp[0].Domicilio);
                $("#TelefonoCliente").val(resp[0].Telefono);
                $("#emailProveedor").val(resp[0].Correo);
            }
        });
        $('#modalCliente').modal('show'); 
    }

    $('#ActualizarModalAgregar').click(function()
    {
        datos= {
            nombre: $("#NombreProveedor").val(),         
            compania: $("#compania").val(),
            direccion: $("#DireccionCliente").val(),
            telefono: $("#TelefonoCliente").val(),
            email: $("#emailProveedor").val(),
            IdCliente: idClientes
        }; 

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Cliente_Controller/ActualizarCliente',
            data:datos, 
            success:function(resp)
            {
                CargarClientes();
                Limpiar()
                $('#modalCliente').modal('hide'); 
            }
        });      
    });

    $('#AgregarModalAgregar').click(function()
    {
        var nombre = $("#NombreProveedor").val();
        var compania =$("#compania").val();
        var direccion = $("#DireccionCliente").val();
        var telefono =  $("#TelefonoCliente").val();
        var email = $("#emailProveedor").val();

        datos = {"nombre":nombre,"compania":compania,"direccion":direccion,"telefono":telefono,"email":email};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Cliente_Controller/InsertarCliente',
            data:datos, 
            success:function(resp)
            {
                CargarClientes();
                Limpiar()
            }
        });
        $('#modalCliente').modal('hide');       
    });
    
    function Limpiar() {
        $("#NombreProveedor").val("");
        $("#compania").val("");
        $("#DireccionCliente").val("");
        $("#TelefonoCliente").val("");
        $("#emailProveedor").val("");
    }

</script>