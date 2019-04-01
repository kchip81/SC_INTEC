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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Productos">Producto:</label>
                                        <select name="Productos" id="Productos" class="form-control" onchange="$('#CodigoSubProducto').focus()">
                                            <option value="">Productos</option>
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="CodigoSubProducto">Codigo:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="CodigoSubProducto" class="form-control" placeholder="Código de Barras" name="CodigoSubProducto" onchange="CargarSubProducto()">
                                            <div class="form-control-position">
                                            <i class="icon-barcode"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="DescripcionSubProducto">Descripción:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="DescripcionSubProducto" class="form-control" placeholder="Descripción" name="DescripcionSubProducto">
                                            <div class="form-control-position">
                                            <i class="icon-box"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="LoteSubProducto">No. Lote:</label>
                                        <input type="text" id="LoteSubProducto" class="form-control" placeholder="No. Lote" name="LoteSubProducto">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="CaducidadSubProducto">Fecha Caducidad:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="CaducidadSubProducto" class="form-control" name="CaducidadSubProducto"/>
                                            <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="CantidadSubProducto">Cantidad:</label>
                                            <input type="text" id="CantidadSubProducto" class="form-control" placeholder="Cantidad" name="CantidadSubProducto"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="CostoSubProducto">Costo:</label>
                                            <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="CostoSubProducto" class="form-control square" placeholder="Costo" aria-label="Costo" name="CostoSubProducto">
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group" align="right">
                                            <button type="button" class="btn btn-primary" id="btnAgregarSubProducto"><i class="icon-android-add"></i>Agregar</button>
                                        </div>

                                    </div>
                                    
                            </div>
                            
                                 
                                <table class="table table-responsive table-bordered table-striped" id="tablaSubProductos">
                                    <thead>
                                        <th>#</th>
                                        <th>Producto</th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>No. Lote</th>
                                        <th>Fec. Caducidad</th>
                                        <th>Cantidad</th>
                                        <th>Costo</th>
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
        CargarProducto();
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
        valorFila();
        removerTabla();

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


    function valorFila()
    {
        $('#tabla tr').each(function() {
            var id = $(this).find(".id").text();
            var producto = $(this).find(".producto").text();
            var codigo = $(this).find(".codigo").text();
            var nombre = $(this).find(".nombre").text();
            var nLote = $(this).find(".nLote").text();
            var fCaducidad =  $(this).find(".fCaducidad").text();
            var cantidad = $(this).find(".cantidad").text();
            var costo = $(this).find(".codigo").text();            
            var cliente = $('#cliente').val();

            datos = {"id":id,"producto":producto,"codigo":codigo,"nombre":nombre,"nLote":nLote,
                "fCaducidad":fCaducidad,"cantidad":cantidad,"costo":costo ,"cliente":cliente           
            };
               
            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/Insertar_ajax',
                data:datos, 
                success:function(resp)
                {
                     
                }
            });
        });

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

    /*$("#Productos").change(function(){
        //alert($(this).val());
        valorFila();
    });*/

    function CargarProducto()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarProducto',    
            success:function(resp)
            {
                $("#Productos").html(resp) 
            }
        });
    }

    function CargarTabla()
    {   

        var id = $("#Productos").val();
        var num = document.getElementById("Productos");
        var producto =  num.options[num.selectedIndex].text;
        var codigo = document.getElementById("CodigoSubProducto").value;
        var nombre = document.getElementById("DescripcionSubProducto").value;
        var nLote = document.getElementById("LoteSubProducto").value;
        var fCaducidad = document.getElementById("CaducidadSubProducto").value;
        var cantidad = document.getElementById("CantidadSubProducto").value;
        var costo = document.getElementById("CostoSubProducto").value;
 
        datos = {"id":id,"producto":producto,"codigo":codigo,"nombre":nombre,"nLote":nLote,"fCaducidad":fCaducidad,"cantidad":cantidad,"costo":costo};
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
        document.getElementById("CodigoSubProducto").value = "";
        document.getElementById("DescripcionSubProducto").value = "";
        document.getElementById("LoteSubProducto").value = "";
        document.getElementById("CaducidadSubProducto").value = "";
        document.getElementById("CantidadSubProducto").value = "";
        document.getElementById("CostoSubProducto").value = "";
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
        document.getElementById('FechaEnvioLaboratorio').value=ano+"-"+mes+"-"+dia;
        document.getElementById('FechaReciboLaboratorio').value=ano+"-"+mes+"-"+dia;
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