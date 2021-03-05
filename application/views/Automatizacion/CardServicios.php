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
            <br>
            <div class="col-md-3">
                <div class="form-group" style="margin-top:7px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalServicio" id="btnAgregarServicio"><i class="icon-android-add"></i> Crear servicio</button>
                </div>
            </div>
            <br>
            <div class="card-body collapse in">
                <div class="card-block">
                    <!--FORM BODY-->
                    <div class="form-body">

                        <table class="table table-responsive table-bordered table-striped" id="tblServicio"  style="width: 100%">
                            <thead>
                                <th>No. Servicio</th>
                                <th>Cliente</th>
                                <th>Contacto</th>
                                <th>Domicilio</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Fecha</th>
                                <th>Razon Social</th>
                                <th>Recoge</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody >

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>




<div class="modal fade" tabindex="-1" role="dialog" id="ModalServicio" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button onclick="cerrar()"  data-dismiss="modal" type="button" class="close" id="CancelarModal">&times;</button>
            <h5 class="modal-title" id="ModalLabel">Crear servicio</h5>
        </div>
        <div class="modal-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Clientes">Clientes</label>
                    <select name="cliente" id="cliente" class="form-control">
                        <option value="">Clientes...</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Cliente:</label>
                    <input type="text" id="Cliente" class="form-control" placeholder="Cliente" name="Cliente" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="DescripcionModalProducto">Contacto:</label>
                    <div class="position-relative">
                        <input type="text" id="Contacto" class="form-control" placeholder="Contacto" name="NumSerieModalProducto" required>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Domicilio:</label>
                    <input type="text" id="Domicilio" class="form-control" placeholder="Domicilio" name="Domicilio" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="DescripcionModalProducto">Correo:</label>
                    <div class="position-relative">
                        <input type="text" id="Correo" class="form-control" placeholder="Correo" name="Correo" required>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Telefono:</label>
                    <input type="text" id="Telefono" class="form-control" placeholder="Telefono" name="Telefono" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="DescripcionModalProducto">Razón social:</label>
                    <div class="position-relative">
                        <input type="text" id="Razon" class="form-control" placeholder="Razón social" name="Razon" required>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Recoge:</label>
                    <input type="text" id="Recoge" class="form-control" placeholder="Recoge" name="Recoge" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="DescripcionModalProducto">Fecha:</label>
                    <div class="position-relative">
                        <input type="date" id="Fecha" class="form-control" name="Fecha"/>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Prioridad:</label>
                    <div class="form-check">
                        <input style="left: 15px;" type="radio" class="form-check-input with-gap"  id="Ordinario" checked name="Prioridad" value ="0">
                        <label class="form-check-label" for="Ordinario">Ordinario 3-5 días   </label>
                    </div>

                    <div class="form-check">
                        <input style="left: 15px;" type="radio" class="form-check-input with-gap" id="Urgente" name="Prioridad" value="1">
                        <label class="form-check-label" for="Urgente">Urgente 1-2 días</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ClaveModalProducto">Requerimiento:</label>
                    <input type="text" id="Requerimiento" class="form-control" placeholder="Requerimiento" name="Requerimiento" required>
                </div>
            </div>
        </div>

        </div>
        <div class="modal-footer">
            <button id="ConfirmarModal" onclick="Guardar()" type="button" class="btn btn-primary">Confirmar</button>
            <button id="CancelarModal" onclick="cerrar()"  data-dismiss="modal" type="button" class="btn btn-primary">Cancelar</button>
        </div>
        </div>
    </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="ModalEquipo" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button  data-dismiss="modal" type="button" class="close" id="CancelarModal">&times;</button>
            <h5 class="modal-title" id="ModalLabel">Agragar equipo</h5>
        </div>
        <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" id="hiddenServicio" name="Servicio" value="">

                    <label for="">Equipos</label>
                    <select name="" id="Equiposselect" class="form-control">

                    </select>
                </div>
            </div>
        </div>
        

        </div>
        <div class="modal-footer">
            <button id="ConfirmarModal" onclick="InsertarServicio()" type="button" class="btn btn-primary">Agregar</button>
            <button id="CancelarModal" onclick="cerrarEquipo()"  data-dismiss="modal" type="button" class="btn btn-primary">Cancelar</button>
        </div>
        </div>
    </div>
    </div>



<script>

    var idClientes =0;
    var idServicio =0;
    $(document).ready(function()
    {
        CargarServicios();
        CargarClientes();
        FechaActual();
    });

    function cerrar(){
        $('#ModalServicio').modal('hiden');
        $('#Cliente').val('');
        $('#Contacto').val('');
        $("#Domicilio").val('');
        $("#Telefono").val('');
        $("#Correo").val('');
        $("#Razon").val('');
        $("#Fecha").val('');
        $("#Recoge").val('');
        $("#Requerimiento").val('');
    }

    function Guardar(){

        var razon = $("#Razon").val();
        var fecha = $("#Fecha").val();
        var recoge = $("#Recoge").val();
        var requerimiento = $("#Requerimiento").val();

        var prioridad = document.getElementsByName('Prioridad'); 
              
        for(i = 0; i < prioridad.length; i++) { 
            if(prioridad[i].checked) 
            var prioridad = prioridad[i].value;
        }



        datos = {"idCliente":idClientes,"razon":razon,"fecha":fecha,"recoge":recoge,'prioridad':prioridad,'requerimiento':requerimiento};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/CrearServicio',
            dataType: 'json',
            data:datos,
            success:function(resp)
            {

                CargarServicios();
                cerrar();
                swal({
                    title: "El servicio ha sido creada",
                    icon: "success",
                });
            }
        });
    }

    $("#cliente").change(function()
    {
        if($('#cliente option:selected').text() != "Seleccione un cliente")
            $("#ConfirmarModal").attr("disabled", false);
        else
            $("#ConfirmarModal").attr("disabled", true);
        
        CargarDatosClientes($(this).val());
    });

    function CargarDatosClientes(id)
    {
        idClientes = id;
        datos = {"id":id};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/ConsultarDataClientes_ajax',
            dataType: 'json',
            data:datos,
            success:function(resp)
            {
                $('#Cliente').val(resp[0].NombreCompania);
                $('#Contacto').val(resp[0].NombreContacto);
                $("#Domicilio").val(resp[0].Domicilio);
                $("#Telefono").val(resp[0].Telefono);
                $("#Correo").val(resp[0].Correo);
            }
        });
    }

    function InsertarServicio()
    {
        var IdServicio = $("#hiddenServicio").val();
        
        var idEquipo = $("#Equiposselect option:selected").val();
        datos = {"IdEquipo":idEquipo,"IdServicio":IdServicio};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/InsertarServicio',
            dataType: 'json',
            data:datos,
            success:function(resp)
            {
                //if(resp != '0'){
                    swal({
                        title: "Equipo agregado correctamente",
                        icon: "success",
                    });
                /*}else{
                    swal({
                        title: "No se puede agregar mas equipos",
                        icon: "error",
                    });
                }*/
                
            }
        });
    }

    function FechaActual()
    {
        var fecha = new Date();
        var mes = fecha.getMonth()+1;
        var dia = fecha.getDate();
        var ano = fecha.getFullYear();
        $('#MesInicioModal').val(mes);
        $('#MesInicioSubProducto').val(mes);
        if(dia<10)
            dia='0'+dia;
        if(mes<10)
            mes='0'+mes
        document.getElementById('Fecha').value=ano+"-"+mes+"-"+dia;
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

    function dataServicio(data,idClientes,idServicio){
        idServicio = data;

        $("#hiddenServicio").val(idServicio);
        
        datos = {"IdCliente":idClientes};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Automatizacio_Controller/ConsultarDatosEquipos',
            data:datos,
            success:function(resp)
            {
                $("#Equiposselect").html(resp);
            },
            error:function(resp)
            {
                $("#Equiposselect").html(resp.responseText);
            }
        });
    }

    function CargarServicios()
    {
        var t = $('#tblServicio').DataTable({

        "ajax":{
            url:"<?php echo site_url();?>/Automatizacio_Controller/ConsultarServicios",
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
                    "targets":9, "data":"IdServicio", "render": function(data,type,row,meta)
                    {
                        var url = '<?php echo site_url();?>/Automatizacion/VerPDF/'+data;
                        var urlService = '<?php echo site_url();?>/Servicio/Process/'+data;

                        return '<a classs = "btn" href="'+url+'"><i class="icon-eye4" data-toggle="tooltip" data-placement="top" id="Detalle" title="Visualizar servicio"> Detalles</i></a><br>'+
                        '<a data-toggle="modal" data-target="#ModalEquipo" onclick="dataServicio('+data+','+row['IdCliente']+','+row['IdServicio']+')" classs = "btn" href="#"><i class="icon-android-add" data-toggle="tooltip" data-placement="top" id="AgregarEquipo" title="Agregar Equipo"> Agregar</i></a><br>'+
                        '<a classs = "btn" href="'+urlService+'"><i class="icon-wrench3" data-toggle="tooltip" data-placement="top" id="Servicio" title="Servicio"> Servicio</i></a>';
                    }
                }],

        "columns": [
                { "data": "IdServicio" },
                { "data": "NombreCompania" },
                { "data": "NombreContacto" },
                { "data": "Domicilio" },
                { "data": "Correo" },
                { "data": "Telefono" },
                { "data": "Fecha" },
                { "data": "RazonSocial" },
                { "data": "Recoge" }
            ]
        });
    }

</script>