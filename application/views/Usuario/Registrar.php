<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Usuarios</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:7px;">
                            <button type="button" class="btn btn-primary" id="btnAgregarUsuario"><i class="icon-android-add"></i> Agregar Usuario</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:7px;">
                            <button type="button" class="btn btn-primary" id="btnAgregarClienteUsuario"><i class="icon-android-add"></i> Agregar Usuario Cliente</button>
                        </div>
                    </div>
                </div>
                <br>


                <table class="table table-responsive table-bordered table-striped" id="tblUsuario"  style="width: 100%">
                    <thead>
                        <th>No. Usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>usuario</th>
                        <!--<th>Contraseña</th>-->
                        <th>Perfil</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody >

                    </tbody>
                </table> 




                

                            <div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="ModalLabel">Agregar Usuario 
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </h4>
                                          </div>
                             
                                    <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="modalPerfil" class="form-group">
                                                <label for="perfil">Tipo de Usuario</label>
                                                <select name="perfil" id="perfil" class="form-control" onchange="">
                                                    <option value="">perfil...</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div style="display:none" id="modalCliente" class="form-group">
                                                <label for="cliente">Selecione Cliente</label>
                                                <select name="cliente" id="cliente" class="form-control" onchange="">
                                                    <option value="">Clientes...</option>
                                                </select>
                                            </div>
                                        </div>                                    
                                    </div>
                    
                                                                                 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Nombre">Nombre:</label>
                                                <div class="position-relative">
                                                    <input type="text" id="Nombre" class="form-control" placeholder="Nombre" name="Nombre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ApellidosUsuario">Apellidos:</label>
                                                <div class="position-relative">
                                                    <input type="text" id="ApellidosUsuario" class="form-control" placeholder="ApellidosUsuario" name="ApellidosUsuario">
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="usuario">Usuario:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="usuario" class="form-control" placeholder="usuario" name="usuario">
                                                    <div class="form-control-position">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="contrasena">Contraseña:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="contrasena" class="form-control" placeholder="Contraseña" name="Contraseña">
                                                    <div class="form-control-position">
                                                        <i class="icon-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Modal_chkRestablecer">Restablecer </label>
                                                <input type="checkbox" id="Restablecer">
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


                        <!--<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Confirmar</button>
                                </div>
                                </div>
                            </div>
                        </div>-->


            </div>           
        </div>
    </div>
</div>

<script>

    var idUsuario =0;
    $(document).ready(function()
    {
        CargarPerfil();
        CargarUsuarios();
        CargarClientes();
    });

    function CargarUsuarios()
    {
        var t = $('#tblUsuario').DataTable({

        "ajax":{
            url:"<?php echo site_url();?>/Registrar_Controller/ConsultarUsuario",
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
                    "targets":5, "data":"IdUsuario", "render": function(data,type,row,meta)
                    {       
                        return '<a classs = "btn" onclick="OpenModal_ActualizarUsuario('+data+')"><i class="icon-pencil2" data-toggle="tooltip" data-placement="top" id="EditarUsuario" title="Editar Usuario"> Editar</i></a><br><a classs ="btn" onclick="EliminarUsuario('+data+')"><i class="icon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar Usuario"> Eliminar</i></a></a>';
                    }
                }],  
        
        "columns": [
                { "data": "IdUsuario" },
                { "data": "NombreUsuario" },
                { "data": "ApellidosUsuario" },
                { "data": "usuario" },
                { "data": "DescripcionPerfil" }
            ]
        });
    }

    function CargarClientes()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarClientes_ajax',
            success:function(resp)
            {
                $("#cliente").html(resp)
            }
        });
    }

    function CargarPerfil()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Registrar_Controller/ConsultarTipoUsuario',    
            success:function(resp)
            {
                $("#perfil").html(resp) 
            }
        });
    }

    
    function EliminarUsuario(id)
    {

        swal({
                title: "¿Desea Eliminar al Usuario?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    datos = {"IdUsuario":id};

                    $.ajax
                    ({            
                        type:'post',
                        url:'<?php echo site_url();?>/Registrar_Controller/EliminarUsuarioPorId',
                        data:datos, 
                        success:function(resp)
                        {
                            swal({
                                title:"Usuario Eliminado",
                                icon: "success",
                            });
                            CargarUsuarios();
                        }
                    });
                   
                }
            });


        /*var result = confirm("¿Desea eliminar al usuario? ");

        if(result)
        {
            datos = {"IdUsuario":id};

            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Registrar_Controller/EliminarUsuarioPorId',
                data:datos, 
                success:function(resp)
                {
                    CargarUsuarios();
                }
            });
        }*/
    }

    $('#btnAgregarUsuario').click(function()
    {
        $('#AgregarModalAgregar').show ();
        $('#ActualizarModalAgregar').hide();
        $('#modalPerfil').show();
        var c = "Agregar Usuario ";
        $('#ModalLabel').html(c);
        $('#modalUsuario').modal('show');     
        var chequear=document.getElementById('Restablecer');
        chequear.setAttribute('checked','checked');
    });

    $('#btnAgregarClienteUsuario').click(function()
    {
        $('#modalCliente').show ();
        $('#AgregarModalAgregar').show ();
        $('#ActualizarModalAgregar').hide();
        $('#modalPerfil').show();
        var c = "Agregar Usuario para Cliente";
        $('#ModalLabel').html(c);
        $('#modalUsuario').modal('show');     
        var chequear=document.getElementById('Restablecer');
        chequear.setAttribute('checked','checked');
    });


    $('#AgregarModalAgregar').click(function()
    {
        var Nombre = $("#Nombre").val();
        var ApellidosUsuario =$("#ApellidosUsuario").val();
        var usuario = $("#usuario").val();
        var contrasena =  $("#contrasena").val();
        var select = $("#perfil").val();
        var cliente = $("#cliente").val();
        $("#cliente").val($("#cliente option:first").val());

        var restablecer = $('#Restablecer').prop('checked');

        if(!restablecer)
            restablecer = 1;

        datos = {"Nombre":Nombre,"ApellidosUsuario":ApellidosUsuario,"usuario":usuario,
                "contrasena":contrasena,"tipo":select, "creacion":restablecer, "cliente":cliente};

        if($("#perfil").val() != "")
        {
            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Registrar_Controller/InsertarUsuario',
                data:datos, 
                success:function(resp)
                {
                    swal( {
                        title: "Se agrego el usuario correctamente",
                        icon: "success",
                    });
                    $('#modalCliente').hide();
                    CargarUsuarios();
                    Limpiar()
                }
            });
            $('#modalUsuario').modal('hide');  
        }else {
            swal( {
                title: "Selecione el perfil del usuario",
                icon: "info",
            });
        }
            //alert("Selecione el perfil del usuario");    
    });

    $('#ActualizarModalAgregar').click(function()
    {
        if($("#perfil").val() != "")
        {
            var restablecer = 0;
            if($("#Restablecer:checked").val())
                restablecer = 0;
            else
                restablecer = 1;

            datos= {
                Nombre :$("#Nombre").val(),
                ApellidosUsuario :$("#ApellidosUsuario").val(),
                usuario : $("#usuario").val(),
                contrasena : $("#contrasena").val(),
                tipo: $("#perfil").val(),
                creacion:restablecer,
                IdUsuario:idUsuario
            }; 

            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Registrar_Controller/ActualizarUsuario',
                data:datos, 
                success:function(resp)
                {
                    swal( {
                        title: "Se modifico el usuario correctamente",
                        icon: "success",
                    });
                    CargarUsuarios();
                    Limpiar()
                    $('#modalUsuario').modal('hide'); 
                }
            });
        }else {
            swal({
                title: "Selecione el perfil del usuario",
                icon: "info",
            });
        }
            //alert("Selecione el perfil del usuario");    
    });


    function OpenModal_ActualizarUsuario(idUsuarios)
    {
        $('#AgregarModalAgregar').hide();
        idUsuario=idUsuarios;
        $('#ActualizarModalAgregar').show();
        var c = "No. Usuario: " + idUsuarios ;
        $('#ModalLabel').html(c);
        
        datos = {"IdUsuario":idUsuarios};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Registrar_Controller/ConsultarUsuarioId',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                $("#Nombre").val(resp.NombreUsuario);
                $("#ApellidosUsuario").val(resp.ApellidosUsuario);
                $("#usuario").val(resp.usuario);

                var chequear=document.getElementById('Restablecer');
                if(resp.creacion == 1)
                    chequear.removeAttribute('checked');
                else
                    chequear.setAttribute('checked','checked');
                

                //$("#contrasena").val(resp.contrasena);
            }
        });
        $('#modalUsuario').modal('show'); 
    }

    function Limpiar() {
        $("#Nombre").val("");
        $("#ApellidosUsuario").val("");
        $("#usuario").val("");
        $("#contrasena").val("");
        $('#modalCliente').hide();
        var chequear=document.getElementById('Restablecer');
        chequear.removeAttribute('checked');
    }

   
</script> 


  