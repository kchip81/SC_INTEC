<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consulta Ordenes Abiertas</h4>
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
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tablaOrdenAbierta">
                                    <thead>
                                        <th>No. Orden</th>
                                        <th>Cliente</th>
                                        <th>Total Equipo</th>
                                        <th>Total Paquete</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Fin Estimada</th>
                                        <th>Fecha Fin Real</th>
                                        <th>Observaciones</th>
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
        CargarDatos();
    });

    $(function()
    {
        $("#tablaOrdenes").on( 'click', 'tr td:eq(3)' ,TotalEquipos);
    });

    function TotalEquipos()
    {       
        //alert("valor");

        var valor = $(this).parents("tr").find("td").eq(0).text();
        alert(valor);
    }

    
    function CargarDatos()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarDatosOrdenes',    
            success:function(resp)
            {
                var OrdenesAbiertas = JSON.parse(resp);

                var t = $("#tablaOrdenAbierta").DataTable({
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
                        OrdenesAbiertas[i]['TotalEquipo'],
                        OrdenesAbiertas[i]['TotalOrdenes'],
                        OrdenesAbiertas[i]['Fecha'],    
                        OrdenesAbiertas[i]['FechaEnvio'],   
                        OrdenesAbiertas[i]['FechaRecibo'],   
                        OrdenesAbiertas[i]['Observaciones']   
                        ]).draw(false);  
                }
            }
        });
    }

</script>