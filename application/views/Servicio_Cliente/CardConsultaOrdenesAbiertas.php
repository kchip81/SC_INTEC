<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consultar Ordenes</h4>
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
                                <div class="col-md-1">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnOrdenesAbiertas" onclick="CargarOrdenes(0)">
                                          <i class="icon-gear"></i>Abiertas
                                      </button>
                                  </div>
                                </div>
                                <div class="col-md-1">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnOrdenesCerradas" onclick="CargarOrdenes(1)">
                                          <i class="icon-check-square-o"></i>Cerradas
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


    /*
     * NOMBRE: CargarDatos
     * DESCRIPCION:Función para obtener los datos de las ordenes abiertas
     * AUTOR: Diego
     * FECHA CREACIÓN:
     * FECHA MODIFICACIÓN: 26/04/2019
     * MODIFICADO POR: Constanzo Manuel Basurto Chipolini
     * CAMBIOS: Agregar acciones para la consulta de los paquetes de la orden.
     */
    function CargarDatos()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarDatosOrdenes',
            success:function(resp)
            {
                var OrdenesAbiertas = JSON.parse(resp);

                var t = $("#tablaOrdenAbierta").DataTable({
                    "destroy": true,
                    "language": {
                              "lengthMenu": "Mostrando _MENU_ registros por pag.",
                              "zeroRecords": "Sin Datos - disculpa",
                              "info": "Motrando pag. _PAGE_ de _PAGES_",
                              "infoEmpty": "Sin registros disponibles",
                              "infoFiltered": "(filtrado de _MAX_ total)"
                        }
                });

                t.clear();
                t.draw();

                var tamaño = OrdenesAbiertas.length;

                for (i=0; i< tamaño ;i++)
                {
                    t.row.add([
                        OrdenesAbiertas[i]['IdOrden'],
                        OrdenesAbiertas[i]['NombreCompania'],
                        OrdenesAbiertas[i]['TotalEquipo'],
                        OrdenesAbiertas[i]['TotalOrdenes'],
                        OrdenesAbiertas[i]['Fecha'],
                        OrdenesAbiertas[i]['FechaEnvio'],
                        OrdenesAbiertas[i]['FechaRecibo'],
                        OrdenesAbiertas[i]['Observaciones'],
                        '<a classs = "btn" onclick="ConsultarEquiposOrden('+OrdenesAbiertas[i]['IdOrden']+')"><i class="icon-clipboard3" data-toggle="tooltip" data-placement="top" title="Ver Equipos"> Equipos</i></a>'+ '<br> <a classs = "btn" onclick="EliminarOrden('+OrdenesAbiertas[i]['IdOrden']+','+OrdenesAbiertas[i]['TotalOrdenes']+')"><i class="icon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar Equipos"> Eliminar</i></a><br><a classs = "btn" href="<?php echo site_url(); ?>/Servicio/NuevaOrdenPDF/'+OrdenesAbiertas[i]['IdOrden']+'"><i class="icon-file-pdf" data-toggle="tooltip" data-placement="top" id="VerOrden" title="Ver Orden"> Orden</i></a>'
                    ]).draw(false);
                }
            }
        });
    }

    function CargarOrdenes(cerradas)
    {
      var t = $('#tablaOrdenAbierta').DataTable({
        "drawCallback": function( settings ) {
          $('[data-toggle="tooltip"]').tooltip();
        },
       "ajax":{
           url:"<?php echo site_url();?>/Servicio_Controller/ConsultarDatosOrdenesAbiertasCliente",
           method:"POST",
           dataSrc: "",
           data:{
             Cerradas:cerradas,
             clienteId:<?php echo $Perfil = $this->session->userdata('intec_IdUsuarioCliente');?>
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

    function EliminarOrden(IdOrden,TotalOrdenes)
    {
        datos= {
            IdOrden: IdOrden
        };

        if(TotalOrdenes == 0)
        {
            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/EliminarEquipoOrdenPorId',
                dataType: 'json',
                data:datos,
                complete:function(resp)
                {
                    swal({
                        title: "Orden Eliminada",
                        icon: "success",
                    });
                        //alert('Orden Eliminada');
                    CargarDatos();

                }
            });
        }else{
            swal({
                title: "La orden no se puede eliminar",
                icon: "error",
            });
        }
        //alert("La orden no se puede eliminar");
    }
</script>
