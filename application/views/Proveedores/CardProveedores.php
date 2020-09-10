    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consulta Proveedores</h4>
                    <input type="hidden" id="NoOrden" name="NoOrden">
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
                    <div class="col-md-3">
                        <div class="form-group" style="margin-top:7px;">
                            <button type="button" class="btn btn-primary" id="btnAgregarLaboratorio"><i class="icon-android-add"></i> Agregar Laboratorio</button>
                        </div>
                    </div>
                    <br>

                    <table class="table table-responsive table-bordered table-striped" id="tblProveedores" style="width: 100%">
                        <thead>
                            <th>No. Laboratorio</th>
                            <th>Descripcion</th>
                            <th>Domicilio</th>
                            <th>Telefono</th>
                            <th>Dias de Servicio</th>
                                        
                            <th>Acciones</th>
                        </thead>
                        <tbody id="tablalaboratorio">
                                        
                        </tbody>
                    </table>   





                    <div class="modal fade" id="modalLaboratorio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="ModalLabel">Agregar Laboratorio 
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <input type="hidden" id="IdOrden" name="IdOrden">
                                    </h4>
                                </div>
                             
                                <div class="modal-body">
                                                                   

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Descripcion">Descripción:</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="Descripcion" class="form-control" placeholder="Descripcion" name="Descripcion">
                                                <div class="form-control-position">
                                                    <i class="icon-speech-bubble"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Domicilio">Domicilio:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="Domicilio" class="form-control" placeholder="Domicilio" name="Domicilio">
                                                    <div class="form-control-position">
                                                        <i class="icon-globe2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Télefono">Telefono:</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="Telefono" class="form-control" placeholder="Telefono" name="Telefono">
                                                    <div class="form-control-position">
                                                        <i class="icon-phone"></i>
                                                    </div>
                                                </div>
                                            </div>                       
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="diasServicios">Dia de Servicio:</label>
                                                <div class="position-relative ">
                                                    <input type="text" id="diasServicios" class="form-control" placeholder="Dias de Servicios" name="diasServicios">
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
    </div>



    <script type="text/javascript">
        var IdLaboratorio = 0;
        $(document).ready(function(){
            ConsultarPaquetesOrden();
        });
        
        function ConsultarPaquetesOrden()
        {
            var t = $('#tblProveedores').DataTable({

            "ajax":{
                url:"<?php echo site_url();?>/Laboratorio_Controller/ConsultarLaboratorio",
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
                        "targets":5, "data":"IdLaboratorio", "render": function(data,type,row,meta)
                        {       
                            return '<a classs = "btn" onclick="OpenModal_ActualizarLaboratorio('+data+')"><i class="icon-pencil2" data-toggle="tooltip" data-placement="top" id="EditarLaboratorio" title="Editar Laboratorio"> Editar</i></a>'+
                            '<br><a classs = "btn" onclick="EliminarLaboratorio('+data+')"><i class="icon-trash" data-toggle="tooltip" data-placement="top" id="EliminarLaboratorio" title="Eliminar Laboratorio"> Eliminar</i></a>';
                        }
                    }],  

            "columns": [
                    { "data": "IdLaboratorio" },
                    { "data": "Descripcion_lab" },
                    { "data": "Domicilio" },
                    { "data": "Telefono" },
                    { "data": "diasServicios" }
                ]
            });
        }
        
        $('#btnAgregarLaboratorio').click(function()
        {
            $('#modalLaboratorio').modal('show');       
        });

        $('#btnAgregarLaboratorio').click(function()
        {
            $('#AgregarModalAgregar').show ();
            $('#ActualizarModalAgregar').hide();

            var c = "Agregar Laboratorio ";
            $('#ModalLabel').html(c);
            $('#modalLaboratorio').modal('show');       
        });

        function OpenModal_ActualizarLaboratorio(id)
        {
            $('#AgregarModalAgregar').hide();
            $('#ActualizarModalAgregar').show();
            var c = "No. Laboratorio: " + id ;
            $('#ModalLabel').html(c);
            IdLaboratorio = id;
            
            datos = {"IdLaboratorio":id};

            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Laboratorio_Controller/ConsultarLaboratorioId',
                dataType: 'json',
                data:datos, 
                success:function(resp)
                {
                    $("#Descripcion").val(resp[0].Descripcion_lab);
                    $("#Domicilio").val(resp[0].Domicilio);
                    $("#Telefono").val(resp[0].Telefono);
                    $("#diasServicios").val(resp[0].diasServicios);
                }
            });
            $('#modalLaboratorio').modal('show');
        }

        $('#ActualizarModalAgregar').click(function()
        {
            datos= {
                Descripcion: $("#Descripcion").val(),         
                Domicilio: $("#Domicilio").val(),
                Telefono: $("#Telefono").val(),
                diasServicios: $("#diasServicios").val(),
                IdLaboratorio: IdLaboratorio
            }; 

            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Laboratorio_Controller/ActualizarLaboratorio',
                data:datos, 
                success:function(resp)
                {
                    swal({
                        title:"Proveedor Actualizado",
                        icon: "success",
                    });
                    ConsultarPaquetesOrden();
                    Limpiar();
                    $('#modalLaboratorio').modal('hide'); 
                }
            });      
        });


        $('#AgregarModalAgregar').click(function()
        {
            var Descripcion = $("#Descripcion").val();
            var Domicilio =$("#Domicilio").val();
            var Telefono = $("#Telefono").val();
            var diasServicios = $("#diasServicios").val();

            datos = {"Descripcion":Descripcion,"Domicilio":Domicilio,"Telefono":Telefono,"diasServicios":diasServicios};

            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Laboratorio_Controller/InsertarLaboratorio',
                data:datos, 
                success:function(resp)
                {
                    ConsultarPaquetesOrden();
                    Limpiar()
                }
            });
            $('#modalLaboratorio').modal('hide');       
        });
        
        function Limpiar() {
            $("#Descripcion").val("");
            $("#Domicilio").val("");
            $("#Telefono").val("");
            $("#diasServicios").val("");
        }

        function EliminarLaboratorio(id){
            swal({
                title: "¿Deseas Eliminar al Proveedor?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    datos = {"IdLaboratorio":id};

                    $.ajax
                    ({            
                        type:'post',
                        url:'<?php echo site_url();?>/Laboratorio_Controller/ActualizarEstatusLaboratorio',
                        data:datos, 
                        success:function(resp)
                        {
                            swal({
                                title:"Proveedor Eliminado",
                                icon: "success",
                            });
                            ConsultarPaquetesOrden();
                        }
                    });
                }
            });
        }
    </script>