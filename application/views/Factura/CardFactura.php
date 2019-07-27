    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Registrar Factura</h4>
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
                    <div class="form-body"> 

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <center><label for="NombreProveedor">No.Factura</label></center>
                                    <center><input type="text" id="NombreProveedor" class="form-control" placeholder="Proveedor" name="NombreProveedor"></center>
                                </div>
                            </div> 
                        </div> 

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <center><label for="Clientes">Cliente</label></center>
                                    <center><select name="cliente" id="cliente" class="form-control">
                                        <option value="">Clientes...</option>                                    
                                    </select></center>
                                </div>
                            </div>        
                        </div>

                        <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrden"  style="width: 100%">
                            <thead>
                                <th>#</th>
                                <th>No. Equipo</th>
                                <th>Descripcion</th>
                                <th>Etiqueta</th>
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
        CargarClientes();
    });

    function CargarClientes()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Factura_Controller/ConsultarClientes_ajax',    
            success:function(resp)
            {
                $("#cliente").html(resp) 
            }
        });
    }

</script>