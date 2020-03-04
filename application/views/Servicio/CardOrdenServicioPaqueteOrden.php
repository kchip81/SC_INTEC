<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consulta Ordenes</h4>
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
                            <h4>No. Orden #<?php echo $IdOrden;?></h4>


                                <table class="table table-responsive table-bordered table-striped" id="tablaSubPaqueteOr">
                                    <thead>
                                        <th>No. Orden</th>
                                        <th>Cliente</th>
                                        <th>No. Paquete</th>
                                        <th>Descripción</th>
                                        <th>Laboratorio</th>
                                        <th>Total de Equipo</th>
                                        <th>Fecha Envío Laboratorio</th>
                                        <th>Fecha Recibido Laboratorio</th>
                                        <th>Fecha Final Calibrado</th>
                                        <th>Fecha Rest Laboratorio</th>
                                        <th>Fecha Recepción Intec Laboratorio</th>
                                    </thead>
                                    <tbody id="tablaPaqOrd">

                                    </tbody>
                                </table>
                        </div>





                    </div>
                </div>
            </div>
        </div>
</div>




<div class="modal fade" tabindex="-1" role="dialog" id="confirmacion" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Fecha</h5>
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

<script type="text/javascript">
    var idPaquete = 0;
    /*
     * CAMBIO: Se regresa la variable enviada por el controller
     */
    var idOrden =  <?php echo $IdOrden;?>;

    $(document).ready(function()
    {
        CargarDatos();
        //closeForm();
    });

    $(function()
    {
        $("#tablaSubPaqueteOr").on( 'click', 'tr td:eq(5)' ,TotalEquipos);
    });

    function TotalEquipos()
    {
        var valor = $(this).parents("tr").find("td").eq(0).text();
        var direccion= "<?php echo site_url();?>/Servicio/ConsultarPaquetes/"+valor;

        location.href=direccion;
    }

    $(function()
    {
        $(document).on( 'click', '#btnConfirmar' ,ConfirmarFechas);
        $(document).on( 'click', '#ConfirmarFecha' ,ConFecha);
    });

    function ConFecha()
    {
        var fecha = $("#FechasCon").val();

        datos={"fecha":fecha,"IdPaqueteEnvio":idPaquete};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ModificarPaqueteOrden',
            data:datos,
            success:function(resp)
            {
                //closeForm();
                CargarDatos();
            }
        });
    }

    function ConfirmarFechas()
    {
        var valor = $(this).parents("tr").find("td").eq(0).text();
        //alert(valor);
        idPaquete = valor;
        openForm();
    }

    function openForm()
    {
        document.getElementById("confirmacion").style.display = "block";
    }

    function closeForm()
    {
        document.getElementById("confirmacion").style.display = "none";
    }

    function CargarDatos()
    {
        datos= {"idEnvio":idPaquete,"idOrden":idOrden};


        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarPaqueteOrdenes',
            data:datos,
            success:function(resp)
            {
                var OrdenesAbiertas = JSON.parse(resp);

                var t = $("#tablaSubPaqueteOr").DataTable({
                    "destroy": true
                });

                t.clear();
                t.draw();

                var tamaño = OrdenesAbiertas.length;
                for (i=0; i< tamaño ;i++)
                {
                    t.row.add([
                        OrdenesAbiertas[i]['IdOrden'],
                        OrdenesAbiertas[i]['NombreCompania'],
                        OrdenesAbiertas[i]['IdPaqueteEnvio'],
                        OrdenesAbiertas[i]['Descripcion'],
                        OrdenesAbiertas[i]['Descripcion_lab'],
                        OrdenesAbiertas[i]['TotalEquipo'],
                        OrdenesAbiertas[i]['FechaEnv'],
                        OrdenesAbiertas[i]['FechaRecLab'],
                        OrdenesAbiertas[i]['FechaFinalCalLab'],
                        OrdenesAbiertas[i]['FechaRetLab'],
                        OrdenesAbiertas[i]['FechaRecpIntecLab']
                        ]).draw(false);
                }
            }
        });
    }


</script>
