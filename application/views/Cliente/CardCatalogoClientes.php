<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Catalogo de Equipos de <?php echo $this->uri->segment(4);?></h4>
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
            
            <table class="table table-responsive table-bordered table-striped" id="tblClienteEquipos"  style="width: 100%">
                <thead>
                    <th>No. Equipo</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Num. Serie</th>
                    <th>Clave</th>
                    <th>Acciones</th>
                </thead>
                <tbody >

                </tbody>
            </table>
          


            <div class="modal fade" tabindex="-1" role="dialog" id="ModalEquipo" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button onclick="cerrar()" type="button" class="close" id="CancelarModalEquipo">&times;</button>
                                <h5 class="modal-title" id="actualizarModalLabel">Actualizar Equipo</h5>
                            </div>
                            <div class="modal-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h4 id="ClienteSelect"></h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ClaveModalProducto">Clavé de Identificación:</label>
                                        <input type="text" id="ClaveModalProducto" class="form-control" placeholder="Clavé de Identificación" name="ClaveModalProducto" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DescripcionModalProducto">Numero de serie:</label>
                                        <div class="position-relative">
                                            <input type="text" id="NumSerieModalProducto" class="form-control" placeholder="Numero de serie" name="NumSerieModalProducto" required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="LoteModalProducto">Modelo:</label>
                                        <input type="text" id="ModeloModalProducto" class="form-control" placeholder="Modelo" name="ModeloModalProducto" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CodigoModalProducto">Marca:</label>
                                        <input type="text" id="MarcaModalProducto" class="form-control" placeholder="Marca" name="MarcaModalProducto" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DescripcionModalProducto">Descripción del Equipo:</label>
                                        <input type="text" id="DescripcionModalProducto" class="form-control" placeholder="Descripción" name="DescripcionModalProducto" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="LoteModalProducto">Alcance de Medicion:</label>
                                        <input type="text" id="AlcanceModalProducto" class="form-control" placeholder="Alcance de Medicion" name="AlcanceModalProducto" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CantidadModalProducto">División Minima:</label>
                                        <input type="text" id="DivisionModalProducto" class="form-control" placeholder="División Minima" name="DivisionModalProducto" required>
                                    </div>
                                </div>
                            </div>




                            </div>
                            <div class="modal-footer">
                                <button id="ModificarModalEquipo" type="button" class="btn btn-primary">Confirmar</button>
                                <button id="CancelarModalEquipo" onclick="cerrar()" type="button" class="btn btn-primary">Cancelar</button>
                            </div>
                            </div>
                        </div>
                        </div>



        </div>
    </div>
</div>



<script>

    var idClientes =0;

    var idEquipoa = 0;

    $(document).ready(function()
    {
        CargarClientesEquipos(<?php echo $this->uri->segment(3);?>);
    });

    function CargarClientesEquipos(id)  
    {

        var t = $('#tblClienteEquipos').DataTable({     
        
        "ajax":{
            url:"<?php echo site_url();?>/Cliente_Controller/ConsultarEquipos?idCliente="+id,
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
                        var url = '<?php echo site_url();?>/Cliente/ConsultarOrden/<?php echo $this->uri->segment(4);?>/'+row['IdEquipo'];
                        return '<a classs = "btn" onclick="OpenModal_ActualizarEquipo('+row['IdEquipo']+')"><i class="icon-pencil2" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Editar Equipo"> Editar</i></a>'
                        +'<br><a href="'+url+'" classs = "btn" ><i class="icon-eye" data-toggle="tooltip" data-placement="top" id="verOrdenes" title="Ver Equipos"> Ver Ordenes</i></a>';
;
                    }
                }],


       "columns": [
                { "data": "IdEquipo" },
                { "data": "Descripcion" },
                { "data": "Marca" },
                { "data": "Modelo" },
                { "data": "NumService" },
                { "data": "ClaveId" }
            ]
        });
    }


    $("#ModificarModalEquipo").click(function()
    {
        datos= {
            IdEquipo: idEquipoa,
            ClaveId: $('#ClaveModalProducto').val(),
            NumService: $("#NumSerieModalProducto").val(),
            Modelo: $("#ModeloModalProducto").val(),
            Descripcion: $('#DescripcionModalProducto').val(),
            Marca: $("#MarcaModalProducto").val(),
            AlcanceMedicion: $("#AlcanceModalProducto").val(),
            DivisionMedicion: $('#DivisionModalProducto').val()
        };

        if($('#ClaveModalProducto').val() != "" || $("#NumSerieModalProducto").val() != "" || $("#ModeloModalProducto").val() != "")
        {
            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Cliente_Controller/ActualizarEquipoPorId',
                dataType: 'json',
                data:datos,
                success:function(resp)
                {

                }

            });
            CargarClientesEquipos(<?php echo $this->uri->segment(3);?>);
            cerrar();
        }
    });

    function cerrar()
    {
        $('#ModalEquipo').modal('hide');
    }

    function OpenModal_ActualizarEquipo(IdEquipo)
    {
        var c = "Actualizar equipo: " + IdEquipo ;
        $('#actualizarModalLabel').html(c);

        idEquipoa = IdEquipo;
        $.ajax
        ({
            url:'<?php echo site_url();?>/Cliente_Controller/ConsultarEquipoPorId',
            data:{
                IdEquipo:IdEquipo
            },
            method: "POST",
            success:function(resp)
            {
                var Equipo = JSON.parse(resp);

                $('#ClaveModalProducto').val(Equipo['ClaveId']);
                $('#NumSerieModalProducto').val(Equipo['NumService']);
                $('#ModeloModalProducto').val(Equipo['Modelo']);
                $('#DescripcionModalProducto').val(Equipo['Descripcion']);
                $('#MarcaModalProducto').val(Equipo['Marca']);
                $('#AlcanceModalProducto').val(Equipo['AlcanceMedicion']);
                $('#DivisionModalProducto').val(Equipo['DivisionMedicion']);

                $('#ModalEquipo').modal('show');
            }
        });
    }

</script>
