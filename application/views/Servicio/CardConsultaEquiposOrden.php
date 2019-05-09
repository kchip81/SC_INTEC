<style>
    td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_open.png');?>) no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_close.png');?>) no-repeat center center;
    }
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
                                </thead>
                                <tbody >

                                </tbody>
                            </table>                                                                                    
                    </div>

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
                        { "data": "Factura"}
                        //{ "data": "<a></<a>"}

                    ]

            });   
       
//        $.ajax({
//            url:"<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposPorOrden",
//            method:"POST",
//            data: {IdOrden:IdOrden},
//            success: function(r)
//              {
//                  alert(r);
//                var Paquetes = JSON.parse(r);
//
//                
//                  t.clear();
//                  t.draw();
//                 for(i=0;i<Paquetes.length;i++)
//                 { 
//                     
//                     t.row.add([
//                         '<td class="details-control"></td>',
//                         Paquetes[i]['IdOrden'],
//                         Paquetes[i]['NombreCompania'],
//                         Paquetes[i]['IdEquipoOrden'],
//                         Paquetes[i]['Descripcion'],
//                         Paquetes[i]['Marca'],
//                         Paquetes[i]['Modelo'],
//                         Paquetes[i]['NumService'],
//                         Paquetes[i]['ClaveId'],
//                         Paquetes[i]['IdPaqueteEnvio'],
//                         Paquetes[i]['Descripcion_lab'],
//                         Paquetes[i]['DescripcionEstatusPaquete'],
//                         '<a></a>'
//                        
//                     ]).draw(false);
//                 }
//              }
//        });
    }
</script>
