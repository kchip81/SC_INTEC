<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Calibracion VS Mantenimiento</h4>
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
                                
                                <div class="col-md-2">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnMantenimiento" onclick="CargarOrdenes(0)">
                                          Mantenimiento
                                      </button>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnCalibracion" onclick="CargarOrdenes(1)">
                                          Calibración
                                      </button>
                                  </div>
                                </div>

                            </div>




                            <table class="table table-responsive table-bordered table-striped" id="tablaOrdenAbierta" style="width:100%">
                                    <thead>
                                        <th>No. Orden</th>
                                        <th>Cliente</th>

                                        <th>Fecha Creación</th>

                                        <th>Observaciones</th>
                                        <th>Estatus</th>
                                        <th>Detalle</th>
                                    </thead>
                                    <tbody id="tablaOrdenes">

                                    </tbody>
                                </table>

                            
                            
                        </div>





                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    $(document).ready(function()
    {
        CargarOrdenes(0);
    });

    function CargarOrdenes(tipo)
    {
      var t = $('#tablaOrdenAbierta').DataTable({
        "drawCallback": function( settings ) {
          $('[data-toggle="tooltip"]').tooltip();
        },
       "ajax":{
           url:"<?php echo site_url();?>/Servicio_Controller/ConsultarDatosMantCalib",
           method:"POST",
           dataSrc: "",
           data:{
            tipo:tipo
           }
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
           {"targets":5, "data":"IdOrden", "render":function(data,type,row,meta)
             {
               return '<a href="<?php echo site_url('Servicio/ConsultarDetalleServicio/'); ?>'+data+'"><i class="icon-eye4"></i>Detalle</a>';
             }

           }
         ],

         "columns": [
           {"data":"IdOrden"},
           {"data":"NombreCompania"},
           {"data":"Fecha"},
           {"data":"Observaciones"},
           {"data":"DescripcionEstatusOrden"}
         ]

       });

    }
</script>
