<style>
    td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_open.png');?>) no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_close.png');?>) no-repeat center center;
    }
/*    th { font-size: 13px; }
    td { font-size: 12px; }*/
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
                                    <th>Acciones</th>
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
                    <?php echo form_open_multipart('Servicio_Controller/do_upload'); // ActualizarEstatusEquipoOrden?>
                            <div class="modal fade" id="ModalActualizarEquipoOrden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document" style='width: 50%'>
                                  <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Actualizar Estatus Equipo
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdOrden" name="IdOrden">
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
                                            <div class='col-md-3'>
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
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="Modal_chkEtiqueta">Etiqueta:</label>
                                                    <input type="checkbox" id="Modal_chkEtiqueta" name="Modal_chkEtiqueta">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="Modal_chkFactura">Factura:</label>
                                                    <input type="checkbox" id="Modal_chkFactura" name="Modal_chkFactura">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2"> 
                                                <input type="file" name="userfile" size="20"/>
                                            </div>
                                        </div>
                                    </div>


                                      <!-- FORM ACTIONS-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                            <i class="icon-cross2"></i>Cerrar
                                        </button>
                                        
                                        <button type="submit" class="btn btn-success mr-1" name="action" value="CrearPaquete" >
                                            <i class="icon-edit"></i>Crear Paquete
                                        </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </form>








                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
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
            '<td>Fecha Caliabración:</td>'+
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
                    "targets":14, "data":"IdOrden", "render": function(data,type,row,meta)
                        {       
                            return '<a classs = "btn" onclick="OpenModal_ActualizarEquipoOrden('+data+')"><i class="icon-clipboard3" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Ver Equipos"></i></a>';
                        }}], 
                      
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
                    { 
                        "data":"IdEquipoOrden"
                        
                    }

                        //{ "data": "<a></<a>"}

                    ]

            });


    }
    function EditarEquipo()
    {
        var table =$("#tblEquiposOrden").DataTable();
        var data = table.row( $(this).parents('tr') ).data();
        alert(data);
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
                
                $("#Modal_IdOrden").val(EquipoOrden['IdOrden']);
                $("#Modal_FechaFinServicio").val(EquipoOrden['FechaFinCalLab']);
                $("#Modal_FechaRetornoLab").val(EquipoOrden['FechaRetLab']);
                $("#Modal_EstatusEquipo").val(EquipoOrden['DescripcionEstatusPaquete']);
                if(EquipoOrden['IdEstatusPaquete']>3 && EquipoOrden['FechaFinCalLab']==null )
                {
                    $("#Modal_FechaFinServicio").prop("disabled",false);
                       
                }
                else if(EquipoOrden['IdEstatusPaquete']>4 && EquipoOrden['FechaRetLab']==null)
                {

                    $("#Modal_FechaRetornoLab").prop("disabled",false);

                }
                
                $("#ModalActualizarEquipoOrden").modal('show');
    
            }
        });
    }            
       
    
</script>
