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
                             
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="laboratorio">Laboratorio</label>
                                        <select name="laboratorio" id="laboratorio" class="form-control">
                                            <option value="">Laboratorio...</option>
                                        </select>
                                    </div>
                                </div>                            
                            </div>
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tablaSubOrdenes">
                                    <thead>
                                        <th>Orden</th>
                                        <th>Verificar</th>
                                    </thead>
                                    <tbody id="tabla">
                                        
                                    </tbody>
                                </table>                                                                                    
                        </div>
                                
                            
                        <div class="col-md-3" align="right">
                            <div class="form-group" style="margin-top:7px;">
                                <button type="button" class="btn btn-primary" id="btnCrearSubOrden">Crear</button>
                            </div>
                        </div>
                          


                        <table class="table table-responsive table-bordered table-striped" id="tablaSubPaquete">
                            <thead>
                                <th>No. Orden</th>
                                <th>Laboratorio</th>
                                <th>No. Equipos</th>
                                <th>Descripción del Equipo</th>
                            </thead>
                            <tbody id="tablaOrden">
                                        
                            </tbody>
                        </table>


                            
                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    $(document).ready(function()
    {
        CargarLaboratorio();
        CargarOrden();
    });

    function CargarLaboratorio()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarLaboratorio_ajax',    
            success:function(resp)
            {
                $("#laboratorio").html(resp);
            }
        });
    }

    function CargarOrden()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarOrdenDatosPaqute_ajax',    
            success:function(resp)
            {
                $("#tabla").append(resp);
            }
        });
    }


    function checked()
    {
        $("input[type=checkbox]:checked").each(function(){
            alert($(this).val());
        });
    }


</script>