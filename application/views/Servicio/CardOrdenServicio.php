<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Orden de Servicio</h4>
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
                                        <label for="Clientes">Cliente</label>
                                        <select name="cliente" id="cliente" class="form-control" onchange="">
                                            <option value="">Clientes...</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="NombreProveedor">Contacto:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="NombreProveedor" class="form-control" placeholder="Proveedor" name="NombreProveedor" readonly>
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
                                        <label for="DireccionCliente">Dirección:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="DireccionCliente" class="form-control" placeholder="Dirección" name="DireccionCliente" readonly>
                                            <div class="form-control-position">
                                                <i class="icon-globe2"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailProveedor">Correo Contacto:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="emailProveedor" class="form-control" placeholder="email" name="emailProveedor" readonly>
                                            <div class="form-control-position">
                                            <i class="icon-mail2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <h4 class="form-section"><i class="icon-paper"></i> Especificaciones de Servicio</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="FechaReciboIntec">Fecha Recibo Intec:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="FechaReciboIntec" class="form-control" name="FechaReciboIntec"/>
                                            <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="FechaEnvioLaboratorio">Fecha Envío a Laboratorio:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="FechaEnvioLaboratorio" class="form-control" name="FechaEnvioLaboratorio"/>
                                            <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="FechaReciboLaboratorio">Fecha Recibo Laboratorio:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="FechaReciboLaboratorio" class="form-control" name="FechaReciboLaboratorio"/>
                                            <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="ObservacionesServicio">Observaciones:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="ObservacionesServicio" class="form-control" placeholder="Observaciones" name="ObservacionesServicio">
                                            <div class="form-control-position">
                                                <i class="icon-speech-bubble"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <h4 class="form-section"><i class="icon-drawer"></i> Productos</h4>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="ClaveSubProducto">Clavé de Identificación:</label>
                                        <div class="position-relative">
                                            <input type="text" id="ClaveSubProducto" class="form-control" placeholder="Clavé de Identificación" name="ClaveSubProducto" onchange="ClaveSubProducto()">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="DescripcionSubProducto">Numero de serie:</label>
                                        <div class="position-relative">
                                            <input type="text" id="NumSerieSubProducto" class="form-control" placeholder="Numero de serie" name="NumSerieSubProducto">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="LoteSubProducto">Modelo:</label>
                                        <input type="text" id="ModeloSubProducto" class="form-control" placeholder="Modelo" name="ModeloSubProducto">
                                        
                                    </div>
                                </div>

                                <div class="col-md-3" align="right">
                                <br>
                                    <div class="form-group" style="margin-top:7px;">
                                        <button type="button" class="btn btn-primary" id="btnBuscarSubProducto"><i class="icon-android-search"></i> Buscar</button>
                                    </div>

                                </div>
                                </div>


                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="CodigoSubProducto">Marca:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="MarcaSubProducto" class="form-control" placeholder="Marca" name="MarcaSubProducto" onchange="CargarSubProducto()">
                                            <div class="form-control-position">
                                            <i class="icon-barcode"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="DescripcionSubProducto">Descripción del Equipo:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="DescripcionSubProducto" class="form-control" placeholder="Descripción" name="DescripcionSubProducto">
                                            <div class="form-control-position">
                                            <i class="icon-box"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="LoteSubProducto">Alcance de Medicion:</label>
                                        <input type="text" id="AlcanceSubProducto" class="form-control" placeholder="Alcance de Medicion" name="AlcanceSubProducto">
                                        
                                    </div>
                                </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="CantidadSubProducto">División Minima:</label>
                                            <input type="text" id="DivisionSubProducto" class="form-control" placeholder="División Minima" name="DivisionSubProducto"/>
                                        </div>
                                    </div>
                                   <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="CostoSubProducto">ID del Producto</label>
                                            <input type="text" id="IdSubProducto" class="form-control square" placeholder="ID Producto" readonly aria-label="ID Producto" name="IDSubProducto">           
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group" align="right">
                                            <button type="button" class="btn btn-primary" id="btnAgregarSubProducto"><i class="icon-android-add"></i>Agregar</button>
                                        </div>

                                    </div>
                                    
                            </div>
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tablaSubProductos">
                                    <thead>
                                        <th>ID Producto</th>
                                        <th>Descripcion del Equipo</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>No. Serie</th>
                                        <th>Clavé de Identificación</th>
                                        <th>Alcance de Medicion</th>
                                        <th>División Minima</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody id="tabla">
                                        
                                    </tbody>
                                </table>
                                
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-warning mr-1" name="action" value="cancelar">
                                <i class="icon-cross2"></i> Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary mr-1" id="GuardarEntrada" name="action" value='GuardarEntrada'>
                                <i class="icon-check2"></i>Guardar Entrada
                            </button>
                            
                                
                                
                        </div>
                                
                            
                            
                          
                            
                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    $(document).ready(function()
    {
        CargarClientes();
        FechaActual();
    });

    $("#btnBuscarSubProducto").click(function()
    {
        var numSerie = $("#NumSerieSubProducto").val();
        var clave = $("#ClaveSubProducto").val();
        var modelo = $("#ModeloSubProducto").val();
        var peticion = "";
            
        if(numSerie != "")
            peticion = ".NumService = '"+numSerie+"'";
        if(clave != "")
            peticion = ".ClaveId = '"+ clave+ "'";
        if(modelo != "")
            peticion = ".Modelo = '"+modelo+"'";

        datos= {"peticion":peticion};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/Buscar',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                if(resp != '')
                {
                    $('#IdSubProducto').val(resp[0].IdEquipo);
                    $('#ClaveSubProducto').val(resp[0].ClaveId);
                    $("#NumSerieSubProducto").val(resp[0].NumService); 
                    $("#ModeloSubProducto").val(resp[0].Modelo);
                    $('#DescripcionSubProducto').val(resp[0].Descripcion);
                    $("#MarcaSubProducto").val(resp[0].Marca); 
                    $("#AlcanceSubProducto").val(resp[0].AlcanceMedicion);
                    $('#DivisionSubProducto').val(resp[0].DivisionMedicion);
                }else
                    alert("Equipo no encontrado");
            }
        });
    });

    $("#btnAgregarSubProducto").click(function()
    {
        CargarTabla();
    });

    $("#cliente").change(function()
    {
        CargarDatosClientes($(this).val());
    });

    $('#GuardarEntrada').click(function()
    {
        valorOrden();

        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/CrearOrdenPDF',    
            success:function(resp)
            {
                
            }
        });
    });

    $(function()
    {
        $(document).on( 'click', '#btnEliminarSubProducto' ,remover);
    });
    
    function removerTabla()
    {
        $("#tabla tr").remove();
    }


    function valorFila(idOrden)
    {
        $('#tabla tr').each(function() {
            var id = $(this).find(".id").text();

            datos = {"idequipo":id,"idOrden":idOrden};
            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/InsertarOrdenEquipo',
                data:datos, 
                success:function(resp)
                {
                    removerTabla();
                    PDF(idOrden);
                }
            });
        });
    }

    function valorOrden()
    {        
        var select = document.getElementById("cliente");
        var cliente = select.value; 
        var fecha =$("#FechaReciboIntec").val();
        var FechaEnvio =$("#FechaEnvioLaboratorio").val();
        var FechaRecibo =$("#FechaReciboLaboratorio").val();
        var Observaciones =$("#ObservacionesServicio").val();

        datos = {"cliente":cliente,"fecha":fecha,"FechaEnvio":FechaEnvio,"FechaRecibo":FechaRecibo,"Observaciones":Observaciones};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/InsertarOrdenServicio',
            data:datos, 
            success:function(resp)
            {
                var id = resp;
                valorFila(id);
            }
        });
    }

    function PDF(idOrden)
    {
        datos={"idOrden":idOrden};

        location.href ="<?php echo site_url();?>/Servicio_Controller/CrearOrdenPDF";
        /*$.ajax
        ({
            //type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/CrearOrdenPDF', 
           // data:datos,    
            success:function(resp)
            {
            }
        });*/
    }

    function remover()
    {
        $(this).parents("tr").remove();
    }

    function CargarClientes()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarClientes_ajax',    
            success:function(resp)
            {
                $("#cliente").html(resp) 
            }
        });
    }

    function CargarTabla()
    { 
        var id =$('#IdSubProducto').val();
        var clave = $('#ClaveSubProducto').val();
        var numser = $("#NumSerieSubProducto").val(); 
        var modelo = $("#ModeloSubProducto").val();
        var descripcion = $('#DescripcionSubProducto').val();
        var marca = $("#MarcaSubProducto").val(); 
        var alcance = $("#AlcanceSubProducto").val();
        var division = $('#DivisionSubProducto').val();
        
        datos = {"id":id,"clave":clave,"numser":numser,"modelo":modelo,"descripcion":descripcion,"marca":marca,"alcance":alcance,"division":division};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/LlenarTabla',    
            data:datos,
            success:function(resp)
            {
                if(resp != '')
                {
                    $("#tabla").append(resp);
                    Limpiar();
                }else
                    alert("Comprete la informacion");
            }
        });
    }

    function Limpiar()
    {
        $('#ClaveSubProducto').val("");
        $("#NumSerieSubProducto").val(""); 
        $("#ModeloSubProducto").val("");
        $('#DescripcionSubProducto').val("");
        $("#MarcaSubProducto").val(""); 
        $("#AlcanceSubProducto").val("");
        $('#DivisionSubProducto').val(""); 
        $('#IdSubProducto').val("");       
    }

    function FechaActual()
    {
        var fecha = new Date(); 
        var mes = fecha.getMonth()+1; 
        var dia = fecha.getDate(); 
        var ano = fecha.getFullYear();
        if(dia<10)
            dia='0'+dia;
        if(mes<10)
            mes='0'+mes 
        document.getElementById('FechaReciboIntec').value=ano+"-"+mes+"-"+dia;
    }

    function CargarDatosClientes(id)
    {
        datos = {"id":id};
        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarDataClientes_ajax',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                $('#NombreProveedor').val(resp[0].NombreContacto);
                $("#DireccionCliente").val(resp[0].Domicilio); 
                $("#compania").val(resp[0].NombreCompania);
                $("#emailProveedor").val(resp[0].Correo);
            }
        });
    }
</script>