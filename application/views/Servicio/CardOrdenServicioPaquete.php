<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">No. Orden </h4>
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
                                        <label for="NombreCliente">Cliente:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="NombreCliente" class="form-control" placeholder="Cliente" name="NombreCliente" readonly>
                                            <div class="form-control-position">
                                            <i class="icon-head"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="compania">Compañía:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="compania" class="form-control" placeholder="Compañía" name="compania" readonly>
                                            <div class="form-control-position">
                                            <i class="icon-office"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                             
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

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="DescripcionServicio">Descripcion:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="DescripcionServicio" class="form-control" placeholder="Descripción" name="DescripcionServicio">
                                            <div class="form-control-position">
                                                <i class="icon-speech-bubble"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tablaSubOrdenes">
                                    <thead>
                                        <th>No. Equipo</th>
                                        <th>Equipo</th>
                                        <th>Verificar</th>
                                    </thead>
                                    <tbody id="tabla">
                                        
                                    </tbody>
                                </table>                                                                                    
                        </div>
                                
                            
                        <div class="col-md-3">
                            <div class="form-group" style="margin-top:7px;">
                                <button type="button" class="btn btn-primary" id="btnCrearSubOrden">Crear</button>
                            </div>
                        </div>
                          


                        <!--<table class="table table-responsive table-bordered table-striped" id="tablaSubPaquete">
                            <thead>
                                <th>No. Orden Paquete</th>
                                <th>Laboratorio</th>
                                <th>No. Equipos</th>
                            </thead>
                            <tbody id="tablaOrden">
                                        
                            </tbody>
                        </table>-->


                            
                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    var idEnvio = 0;
    var Orden = <?php echo $IdOrden;?>;

    $(document).ready(function()
    {
        CargarLaboratorio();
        CargarOrden(Orden);
        CargarCliente(Orden);
        CargarPaqueteOrden(Orden);
        document.getElementById("basic-layout-form").innerHTML = "No. Orden "+ Orden;
    });

    $("#btnCrearSubOrden").click(function()
    {
        var select = document.getElementById("laboratorio");
        var laboratorio = select.value; 
        var Observacion = $('#DescripcionServicio').val();
        
        if(laboratorio != "")
        {
            var contador = 0;
            $("#tabla tr").each(function(){
                var checked = $(this).find("#verificar").is(":checked");

                if(checked)
                    contador++;
            });
            if(contador != 0)
            {
                InsertarPaquete(laboratorio,Observacion);
            }
        }else
            alert("Selecione un laboratorio");
    });

    $('input[type=checkbox]:checked').each(function(){
        $(this).parents("tr").remove();
    });

    function InsertarPaquete(IdLaboratorio,Observacion)
    {
        datos = {"IdLaboratorio":IdLaboratorio,"Observacion":Observacion};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/InsertarPaquete',
            data:datos, 
            success:function(resp)
            {
                idEnvio = resp;
                ActualizarPaquete(resp);

            }
        });
    }

    function ActualizarPaquete(idEnvios)
    {     

        $("#tabla tr").each(function(){
            var id = $(this).find(".idEquipo").text();
            var checked = $(this).find("#verificar").is(":checked");

            //alert(id);
                        
            if(checked)
            {
                $(this).find("#verificar").parents("tr").remove();
                
                datos = {"IdEquipoOrden":id,"idEnvio":idEnvios};

                $.ajax
                ({
                    type:'post',
                    url:'<?php echo site_url();?>/Servicio_Controller/UpdatePaquete',
                    data:datos, 
                    success:function(resp)
                    {

                    }
                });

            }
        });
    }

    function CargarPaqueteOrden(idOrden)
    {
        datos = {"idOrden":idOrden};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarPaqueteOrden',    
            data:datos,
            success:function(resp)
            {
                $("#tablaOrden tr").remove();
                $("#tablaOrden").append(resp);
            }
        });
    }

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

    function CargarCliente(cliente)
    {
        datos = {"id":cliente};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarDatosClientes',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                $('#NombreCliente').val(resp[0].NombreContacto);
                $("#compania").val(resp[0].NombreCompania);
            }
        });
    }

    function CargarOrden(idOrden)
    {
        datos = {"idOrden":idOrden};

        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarOrdenDatosPaqute_ajax',    
            data:datos,
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