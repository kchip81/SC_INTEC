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
                    <h4 class="card-title" id="basic-layout-form">Consulta Paquetes Orden</h4>
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


                                <table class="table table-responsive table-bordered table-striped" id="tblPaquetesAbiertos" style="width: 100%">
                                    <thead>
                                        <th></th>
                                        <th>No. Paquete</th>
                                        <th>Laboratorio</th>
                                        <th>Descripción</th>
                                        <th>Estatus</th>
                                        <th>Equipos</th>
                                        <th>Fecha Envío</th>
                                        <th>Fecha Recepción Lab</th>
                                        <th></th>
                                        <th></th>
                                        <th>Acciones</th>


                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog" id="modalConfirmacion" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Fecha</h5>
                                <input type="hidden" id="IdPaqueteEnvio" name="IdPaqueteEnvio">
                                <input type="hidden" id="IdEstatusActual" name="IdEstatusActual">
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="position-relative has-icon-left">
                                                <input type="date" id="FechasCon" class="form-control" name="FechasConfirmacion"/>
                                                <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="InformacionPaquete">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="NumeroGuia">Numero Guía:</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="NumeroGuia" class="form-control" placeholder="Numero de guía" name="NumeroGuia">
                                                <div class="form-control-position">
                                                    <i class="icon-hashtag"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="CostoEnvio">Costo Envío:</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" id="CostoEnvio" name="CostoEnvio" class="form-control" placeholder="Costo Envio"/>
                                             </div>
                                            </div>

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
</div>

<script type="text/javascript">
    $(document).ready(function(){
        ConsultarPaquetesOrden();

        // Add event listener for opening and closing details
        $('#tblPaquetesAbiertos tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var t = $("#tblPaquetesAbiertos").DataTable();
            var row = t.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( LoadRowDetail(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    });

    function LoadRowDetail ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Numero Guía:</td>'+
            '<td colspan="2">'+d.NumeroGuia+'</td>'+

        '</tr>'+
        '<tr>'+
            '<td>Costo Envio:</td>'+
            '<td>$'+d.CostoEnvio+'</td>'+


        '</tr>'+

    '</table>';
}

    function ConsultarPaquetesOrden()
    {

       var t = $('#tblPaquetesAbiertos').DataTable({
         "drawCallback": function( settings ) {
           $('[data-toggle="tooltip"]').tooltip();
         },
        "ajax":{
            url:"<?php echo site_url();?>/Paquetes_Controller/ConsultarPaquetesAbiertos_ajax",
            method:"POST",
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
          "autoWidth":true,


          "columnDefs":[
           {
               "targets":10, "data":"IdPaqueteEnvio", "render": function(data,type,row,meta)
               {
                   return '<a href="<?php echo site_url('Paquete/ConsultarDetalle/'); ?>'+data+'"><i class="icon-eye4"></i>Detalle</a>';
               }
           },
           {
             "targets":8, "data":"dias", "render":function(data,type,row,meta)
             {
               var dif = row['diasServicios'] - data;
               if (dif <1)
               {
                 return '<i class="fas fa-lightbulb red" data-toggle="tooltip" data-placement="top" id="DiasDemora" title="'+dif+' días"></i>';
               }
               else {
                 if (dif==1)
                 {
                   return '<i class="fas fa-lightbulb yellow"></i>'
                 }
                 else {
                   return '<i class="fas fa-lightbulb green"></i>'
                 }

               }
               return dif;
             }
           },
           {
             "targets":[9], "visible":false
           }
         ],

          "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },


                { "data": "IdPaqueteEnvio" },
                { "data": "Descripcion_lab" },
                { "data": "Descripcion" },
                { "data": "DescripcionEstatusPaquete" },
                { "data": "TotalEquiposPaquete" },
                { "data": "FechaEnv" },
                { "data": "FechaRecLab" },
                { "data": "dias" },
                { "data": "diasServicios" }
                ]

        });


    }

    function ConfirmarPaquete(IdPaqueteEnvio, IdEstatusActual)
    {
        $('#IdPaqueteEnvio').val(IdPaqueteEnvio);
        $('#IdEstatusActual').val(IdEstatusActual);
        var fecha = new Date();
        var mes = fecha.getMonth()+1;
        var dia = fecha.getDate();
        var ano = fecha.getFullYear();
        if(dia<10)
            dia='0'+dia;
        if(mes<10)
            mes='0'+mes;

        var hoy = ano+"-"+mes+"-"+dia;
        $('#FechasCon').val(hoy);

        if (IdEstatusActual>=2)
        {

            document.getElementById('InformacionPaquete').style.display = 'none';

        }
        else
        {

            document.getElementById('InformacionPaquete').style.display = '';
            var x= document.getElementById('InformacionPaquete');
                    x.style.visibility = 'visible';
            $("#NumeroGuia").val();
            $("#CostoEnvio").val();

        }

        $("#modalConfirmacion").modal('show');
    }

    $(function()
    {
        $(document).on( 'click', '#ConfirmarFecha' ,ConFecha);
    });

    function ConFecha()
    {
        var fecha = $("#FechasCon").val();
        var IdPaqueteEnvio = $('#IdPaqueteEnvio').val();
        var IdEstatusActual =  $('#IdEstatusActual').val();
        var NumeroGuia = $("#NumeroGuia").val();
        var CostoEnvio =$("#CostoEnvio").val();

        datos={"fecha":fecha,"IdPaqueteEnvio":IdPaqueteEnvio,"IdEstatusActual":IdEstatusActual, "NumeroGuia": NumeroGuia, "CostoEnvio":CostoEnvio};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Paquetes_Controller/ModificarPaquetesPorOrden',
            data:datos,
            success:function(resp)
            {
                $("#modalNuevoPaquete").modal('hide');
                var IdOrden = $('#NoOrden').val();
                ConsultarPaquetesOrden(IdOrden);
            }
        });
    }
</script>
