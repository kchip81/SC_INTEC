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
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tblPaquetesOrden" style="width: 100%">
                                    <thead>
                                        <th>No. Paquete</th>
                                        <th>Laboratorio</th>
                                        <th>Descripcion</th>
                                        <th>Estatus</th>
                                        <th>Equipos</th>
                                        <th>Fecha Envio</th>
                                        <th>Fecha Recepción Lab</th>
                                        <th>Fecha Fin Servicio</th>
                                        <th>Fecha Retorno</th>
                                        <th>Fecha Recepcion Intec</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody id="tablaOrdenes">
                                        
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
    function ConsultarPaquetesOrden(IdOrden)
    {
        $('#NoOrden').val(IdOrden);
        $.ajax({
            url:"<?php echo site_url();?>/Paquetes_Controller/ConsultarPaquetesPorOrden",
            method:"POST",
            data: {IdOrden:IdOrden},
            success: function(r)
              {
                var Paquetes = JSON.parse(r);

                var t = $('#tblPaquetesOrden').DataTable({
                         "destroy":true,
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
                 for(i=0;i<Paquetes.length;i++)
                 { 
                     t.row.add([
                         Paquetes[i]['IdPaqueteEnvio'],
                         Paquetes[i]['Descripcion_lab'],
                         Paquetes[i]['Descripcion'],
                         Paquetes[i]['DescripcionEstatusPaquete'],
                         Paquetes[i]['TotalEquiposPaquete'],
                         Paquetes[i]['FechaEnv'],
                         Paquetes[i]['FechaRecLab'],
                         Paquetes[i]['FechaFinalCalLab'],
                         Paquetes[i]['FechaRetLab'],
                         Paquetes[i]['FechaRecpIntecLab'],
                         '<a></a>'
                        
                     ]).draw(false);
                 }
              }
        });
    }

    function ConfirmarPaquete(IdPaqueteEnvio, IdEstatusActual)
    {        
        $('#IdPaqueteEnvio').val(IdPaqueteEnvio);
        $('#IdEstatusActual').val(IdEstatusActual);
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
       
        datos={"fecha":fecha,"IdPaqueteEnvio":IdPaqueteEnvio,"IdEstatusActual":IdEstatusActual};

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
