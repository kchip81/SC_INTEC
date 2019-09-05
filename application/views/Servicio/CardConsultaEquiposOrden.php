<style>
    td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_open.png');?>) no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_close.png');?>) no-repeat center center;
    }
    th { font-size: 14px; }
    td { font-size: 13px; }
</style>
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <!--CARD HEADER-->
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Consulta Equipos Orden</h4>
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


            </div>
            <!--CARD BODY-->
            <div class="card-body collapse in">
                <div class="card-block">
                    <!--FORM BODY-->
                    <div class="form-body">


                            <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrden"  style="width: 100%">
                                <thead>
                                    <th></th>
                                    <th>No. Orden</th>
                                    <th>Compañia</th>
                                    <th>No. Equipo</th>
                                    <th>Descripcion</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Num. Serie</th>
                                    <th>Clave</th>
                                    <th>No. Paquete</th>
                                    <th>Descripcion Paq.</th>
                                    <th>Estatus Paq.</th>
                                    <th>Etiqueta</th>
                                    <th>Factura</th>
                                    <th>Certificado</th>
                                    <th>Acciones</th>
                                    <th>IdCliente</th>
                                </thead>
                                <tbody >

                                </tbody>
                            </table>
                    </div>

                    <!--MODAL FechaConfirmación-->
                    <div class="modal fade" tabindex="-1" role="dialog" id="modalConfirmacion" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Fecha</h5>
                            <input type="hidden" id="IdPaqueteEnvio" name="IdPaqueteEnvio">
                            <input type="hidden" id="IdEstatusActual" name="IdEstatusActual">
                        </div>
                        <div class="modal-body">
                            <div class="position-relative has-icon-left">
                            <input type="date" id="FechasCon" class="form-control" name="FechasConfirmacion"/>
                            <div class="form-control-position">
                                <i class="icon-calendar5"></i>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="ConfirmarFecha" type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            <button id="CancelarFecha" type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!--MODAL ActualizarEquipoOrden-->
                    <?php echo form_open_multipart('Servicio_Controller/ActualizarEquipoOrden'); // ActualizarEstatusEquipoOrden?>
                            <div class="modal fade" id="ModalActualizarEquipoOrden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-md" role="document" style=''>
                                  <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="ModalLabel">Actualizar Estatus Equipo
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdEquipoOrden" name="IdEquipoOrden">
                                                <input type="hidden" id="IdEquipo" name="IdEquipo">
                                                <input type="hidden" id="IdCliente" name="IdCliente">
                                                <input type="hidden" id="IdEstatusPaquete_Equipo" name="IdEstatusPaquete_Equipo">
                                            </h4>
                                          </div>

                                    <div class="modal-body">

                                        <div class='row'>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label for="Modal_IdOrden">No. Orden:</label>
                                                    <input type='text' id='Modal_IdOrden' class='form-control' name='ModalIdOrden' readonly/>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label for="Modal_IdPaquete">No. Paquete:</label>
                                                    <input type='text' id='Modal_IdPaquete' class='form-control' name='Modal_IdPaquete' readonly/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class='row'>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label for="Modal_Laboratorio">Laboratorio:</label>
                                                    <input type='text' id='Modal_Laboratorio' class='form-control' name='Modal_Laboratorio' readonly/>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label for="Modal_EstatusEquipo">Estatus Equipo:</label>
                                                    <input type='text' id='Modal_EstatusEquipo' class='form-control' name='Modal_EstatusEquipo' readonly/>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="Modal_FechaFinServicio">Fecha Fin Calibración:</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="date" id="Modal_FechaFinServicio" class="form-control" name="Modal_FechaFinServicio" disabled="true"/>
                                                        <div class="form-control-position">
                                                            <i class="icon-calendar5"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="Modal_FechaRetornoLab">Fecha Retorno:</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="date" id="Modal_FechaRetornoLab" class="form-control" name="Modal_FechaRetornoLab" disabled="true"/>
                                                        <div class="form-control-position">
                                                            <i class="icon-calendar5"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <label for="Modal_FechaRecIntec">Fecha Recibido Intec:</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="date" id="Modal_FechaRecIntec" class="form-control" name="Modal_FechaRecIntec" disabled="true"/>
                                                        <div class="form-control-position">
                                                            <i class="icon-calendar5"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="Modal_chkEtiqueta">Etiqueta:</label>
                                                    <input type="checkbox" id="Modal_chkEtiqueta" name="Modal_chkEtiqueta" value="1">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="Modal_chkFactura">Factura:</label>
                                                    <input type="checkbox" id="Modal_chkFactura" name="Modal_chkFactura" value ="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="file" name="Certificado_file" size="20"/>
                                            </div>
                                        </div>
                                    </div>


                                      <!-- FORM ACTIONS-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                            <i class="icon-cross2"></i>Cerrar
                                        </button>

                                        <button type="submit" class="btn btn-success mr-1" name="action" value="ActualizarEquipo" >
                                            <i class="icon-edit"></i>Actualizar Equipo
                                        </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </form>



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
    </div>
</div>
<script type="text/javascript">

    var idEquipoa = 0;

    $(document).ready(function(){
        // Add event listener for opening and closing details
        $('#tblEquiposOrden tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var t = $("#tblEquiposOrden").DataTable();
            var row = t.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    });

    function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Fecha Envio:</td>'+
            '<td>'+d.FechaEnv+'</td>'+
            '<td>Fecha Calibración:</td>'+
            '<td>'+d.FechaFinCalLab+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Fecha Recepción:</td>'+
            '<td>'+d.FechaRecLab+'</td>'+
            '<td>Fecha Retorno:</td>'+
            '<td>'+d.FechaRetLab+'</td>'+

        '</tr>'+

    '</table>';
}
    function ConsultarEquiposOrden(IdOrden)
    {
        var t = $('#tblEquiposOrden').DataTable({
            "ajax":{
                url:"<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposPorOrden",
                method:"POST",
                data: {IdOrden:IdOrden},
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
                    "targets":15, "data":"IdOrden", "render": function(data,type,row,meta)
                        {
                            return '<a classs = "btn" onclick="OpenModal_ActualizarEquipoOrden('+data+')"><i class="icon-repeat" data-toggle="tooltip" data-placement="top" id="VerEstatus" title="Editar Estatus"> Estatus</i></a><br>'
                            + '<a classs = "btn" onclick="OpenModal_ActualizarEquipo('+row['IdEquipo']+')"><i class="icon-pencil2" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Editar Equipo"> Editar</i></a>';

                        }},
                {
                    "targets":14, "data":"Certificado", "render": function(data,type,row,meta)
                        {
                            var certificado = data;
                            if (certificado !== "")
                            {

                                var url = '<?php echo base_url();?>Certificados/'+row['IdCliente']+'/'+row['IdEquipo']+'/'+data;
                                return '<a href="'+url+'" target="_blank"><i class="icon-file-pdf"></i></a>';
                            }
                            else
                            {
                                return data;
                            }

                        }},
                {"visible":false, "targets":[16]}],

              "columns": [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    { "data": "IdOrden" },
                    { "data": "NombreCompania" },
                    { "data": "IdEquipoOrden" },
                    { "data": "Descripcion" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "NumService" },
                    { "data": "ClaveId" },
                    { "data": "IdPaqueteEnvio" },
                    { "data": "Descripcion_lab" },
                    { "data": "DescripcionEstatusPaquete"},
                    { "data": "Etiqueta"},
                    { "data": "Factura"},
                    { "data": "Certificado"},
                    { "data":"IdEquipoOrden"},
                    { "data": "IdCliente"}

                        //{ "data": "<a></<a>"}

                    ]

            });

            var tbl = document.getElementById("tblEquiposOrden");
            tbl.scrollIntoView();



    }

    function EditarEquipo()
    {
        var table =$("#tblEquiposOrden").DataTable();
        var data = table.row( $(this).parents('tr') ).data();
        alert(data);
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
                url:'<?php echo site_url();?>/Servicio_Controller/ActualizarEquipoPorId',
                dataType: 'json',
                data:datos,
                success:function(resp)
                {
                    //alert("naskndaksd");
                }

            });
            cerrar();
        }
    });

    function OpenModal_ActualizarEquipo(IdEquipo)
    {
        var c = "Actualizar equipo: " + IdEquipo ;
        $('#actualizarModalLabel').html(c);

        idEquipoa = IdEquipo;
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarEquipoPorId',
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

    function Limpiar()
    {
        $('#ClaveModalProducto').val("");
        $("#NumSerieModalProducto").val("");
        $("#ModeloModalProducto").val("");
        $('#DescripcionModalProducto').val("");
        $("#MarcaModalProducto").val("");
        $("#AlcanceModalProducto").val("");
        $('#DivisionModalProducto').val("");
    }

    function cerrar()
    {
        $('#ModalEquipo').modal('hide');
        Limpiar();
    }

    function OpenModal_ActualizarEquipoOrden(IdEquipoOrden)
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarEquipoOrden_ajax',
            data:{
                IdEquipoOrden:IdEquipoOrden
            },
            method: "POST",
            success:function(resp)
            {

                var EquipoOrden = JSON.parse(resp);

                LimpiarModalActualizarEquipo();

                $('#IdEquipoOrden').val(EquipoOrden['IdEquipoOrden']);
                $("#IdEstatusPaquete_Equipo").val(EquipoOrden['IdEstatusPaquete']);
                $("#IdCliente").val(EquipoOrden['IdCliente']);
                $("#IdEquipo").val(EquipoOrden['IdEquipo']);
                $("#Modal_IdOrden").val(EquipoOrden['IdOrden']);
                $("#Modal_IdPaquete").val(EquipoOrden['IdPaqueteEnvio']);
                $("#Modal_EstatusEquipo").val(EquipoOrden['DescripcionEstatusPaquete']);
                $("#Modal_Laboratorio").val(EquipoOrden['Descripcion_Lab']);
                $("#Modal_FechaFinServicio").val(EquipoOrden['FechaFinCalLab']);
                $("#Modal_FechaRetornoLab").val(EquipoOrden['FechaRetLab']);
                if(EquipoOrden['Factura']== '1')
                {
                    $("#Modal_chkFactura").prop("checked",true);
                }

                if(EquipoOrden['Etiqueta']== '1')
                {
                    $("#Modal_chkEtiqueta").prop("checked",true);

                }

                $("#Modal_chkFactura").prop("disabled",true);
                $("#Modal_chkEtiqueta").prop("disabled",true);
                $("#Modal_FechaFinServicio").prop("disabled",true);
                $("#Modal_FechaRetornoLab").prop("disabled",true);

                if(EquipoOrden['IdEstatusPaquete']==3)
                {
                    $("#Modal_FechaFinServicio").prop("disabled",false);

                }
                else if(EquipoOrden['IdEstatusPaquete']==4)
                {

                    $("#Modal_FechaRetornoLab").prop("disabled",false);
                    $("#Modal_chkFactura").prop("disabled",false);
                    $("#Modal_chkEtiqueta").prop("disabled",false);

                }
                else if(EquipoOrden['IdEstatusPaquete']==5)
                {
                    $("#Modal_FechaRecIntec").prop("disabled",false);
                    $("#Modal_chkFactura").prop("disabled",false);
                    $("#Modal_chkEtiqueta").prop("disabled",false);
                }

                $("#ModalActualizarEquipoOrden").modal('show');

            }
        });
    }

   function LimpiarModalActualizarEquipo()
   {
        $("#Modal_IdOrden").val();
        $("#Modal_IdCliente").val();
        $("#Modal_IdEquipoOrden").val();
        $("#Modal_IdPaquete").val();
        $("#Modal_EstatusEquipo").val();
        $("#Modal_Laboratorio").val();
        $("#Modal_FechaFinServicio").val();
        $("#Modal_FechaRetornoLab").val();
        $("#Modal_FechaRecIntec").val();

        $("#Modal_chkFactura").prop("checked",false);
        $("#Modal_chkEtiqueta").prop("checked",false);
   }


</script>
