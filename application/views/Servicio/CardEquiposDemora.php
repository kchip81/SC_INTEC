    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Equipo con Demora</h4>
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

                <div class="card-body collapse in">
                    <div class="card-block">
                        <!--FORM BODY-->
                        <div class="form-body">  


                            <table class="table table-responsive table-bordered table-striped" id="tblEquipos"  style="width: 100%">
                                <thead>
                                    <th>Cliente</th>
                                    <th>No. Orden</th>
                                    <th>Clave</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Laboratorio</th>
                                    <th>Fecha de Recibido Laboratorio</th>
                                </thead>
                                <tbody >

                                </tbody>
                            </table>                                                                                    
                        </div> 
                    </div>
                </div>


            </div>
        </div>
    </div>



    <script>
    
        $(document).ready(function()
        {
            CargarEquipo();
        });

        function CargarEquipo()
        {
            var t = $('#tblEquipos').DataTable({

            "ajax":{
                url:"<?php echo site_url();?>/Servicio_Controller/ConsultarEquipoDemora",
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
                    { "data": "NombreCompania" },
                    { "data": "IdOrdenes" },
                    { "data": "ClaveId" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "Descripcion_lab" },
                    { "data": "FechaRecLab" }
                ]
            });
        }

    </script>