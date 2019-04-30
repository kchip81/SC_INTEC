<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consulta Paquetes Orden</h4>
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
                                
                            
                            
                          
                            
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    function ConsultarPaquetesOrden(IdOrden)
    {
    alert(IdOrden);
        $.ajax({
            url:"<?php echo site_url();?>/Paquetes_Controller/ConsultarPaquetesPorOrden",
            method:"POST",
            data: {IdOrden:IdOrden},
            success: function(r)
              {
                   alert(r);

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
                         
                         //'<a classs = "btn" onclick="ConsultarFamiliarModal('+Familiares[i]['IdFamiliarResponsable']+')"><i class="icon-edit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Editar"></i></a>'

                     ]).draw(false);




                 }
              }
        });
    }
    function ConfirmarPaquete(IdPaqueteEnvio, IdEstatusActual)
    {
        alert(IdPaqueteEnvio);
    }
</script>
