<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Equipos Factura</h4>
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
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="txtIdFactura"># Factura</label>
                                <input type="text" class="form-control" name= "txtIdFactura" id="txtIdFactura" value="" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="txtFechaFactura">Fecha Factura</label>
                                <input type="text" class="form-control" name="txtFechaFactura" id="txtFechaFactura" value="" readonly>
                              </div>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="txtNombreCliente">Cliente</label>
                                <input type="text" class="form-control" name= "txtNombreCliente" id="txtNombreCliente" readonly value ="">
                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <table class="table table-responsive table-bordered table-striped" id="tblEquiposFactura" style="width:100%">
                                    <thead>
                                      <th>No. Orden</th>
                                      <th>No. Paquete</th>
                                      <th>Cliente</th>
                                      <th>No. Equipo</th>
                                      <th>Descripcion</th>
                                      <th>Marca</th>
                                      <th>Modelo</th>
                                      <th>Num. Serie</th>
                                      <th>Clave</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                          </div>





                        </div>





                    </div>
                </div>
            </div>
        </div>
</div>

<script type="text/javascript">

$(document).ready(function() {

CargarEquiposFactura();
$("#txtIdFactura").val(<?=$Factura->NumFactura?>);
$("#txtFechaFactura").val("<?=$Factura->FechaFactura?>");
$("#txtNombreCliente").val("<?=$Factura->NombreCompania?>");




});


function CargarEquiposFactura() {

  var IdFactura = <?=$Factura->IdFactura?>;

  var t = $('#tblEquiposFactura').DataTable({
           "drawCallback": function( settings ) {
                   $('[data-toggle="tooltip"]').tooltip();
                 },
             "ajax":{
               url:"<?php echo site_url();?>/Factura_Controller/ConsultarEquiposDetalleFactura_ajax",
               data:{"IdFactura":IdFactura},
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

                   {"targets":0, "data":"IdOrden", "render":function(data,type, meta, row)
                     {
                       return "<a href='<?=site_url()?>/Servicio/ConsultarDetalleServicio/"+data+"''>"+data+"</a>";
                     }
                   },
                   {"targets":1, "data":"IdPaqueteEnvio", "render":function(data,type, meta, row)
                     {
                       return "<a href='<?=site_url()?>/Paquete/ConsultarDetalle/"+data+"''>"+data+"</a>";
                     }
                   }



               ],
               "columns": [

                 { "data": "IdOrden" },
                 {"data":"IdPaqueteEnvio"},
                 { "data": "NombreCompania" },
                 { "data": "IdEquipo" },
                 { "data": "Descripcion" },
                 { "data": "Marca" },
                 { "data": "Modelo" },
                 { "data": "NumService" },
                 { "data": "ClaveId" }

                     ]

             });


}

</script>
