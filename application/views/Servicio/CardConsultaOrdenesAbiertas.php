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
                                        <th>Total Equipos</th>
                                        <th>Total Paquetes</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Fin Estimada</th>
                                        <th>Fecha Fin Real</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody id="tablaOrdenes">
                                        
                                    </tbody>
                                </table>
                            
                            <?php echo form_open('Servicio_Controller/CrearNuevoPaquete');?>
                            <div class="modal fade" id="modalNuevoPaquete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Crear Nuevo Paquete - Orden #<label id="lblIdOrden"></label>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdOrden" name="IdOrden">
                                            </h4>
                                          </div>
                             
                                    <div class="modal-body">
                                         
                                        <div class="row">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contacto">Contacto:</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="contacto" class="form-control" placeholder="Cliente" name="NombreCliente" readonly>
                                                        <div class="form-control-position">
                                                        <i class="icon-head"></i>
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
                                                    <label for="DescripcionServicio">Descripcion Paquete:</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="DescripcionServicio" class="form-control" placeholder="Descripción" name="DescripcionServicio">
                                                        <div class="form-control-position">
                                                            <i class="icon-speech-bubble"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h5>Equipos Sin Paquete</h5>
                                        <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrden">
                                            <thead>
                                                <th>No. Equipo</th>
                                                <th>Clave</th>
                                                <th>Descripcion</th>
                                                <th>Seleccionar</th>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                </table>  
                                    </div>
                                      <!-- FORM ACTIONS-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                            <i class="icon-cross2"></i>Cerrar
                                        </button>
                                        
                                        <button type="submit" class="btn btn-success mr-1" name="action" value="CrearPaquete" >
                                            <i class="icon-edit"></i>Crear Paquete
                                        </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </form>

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

    
    /*
     * NOMBRE: CargarDatos
     * DESCRIPCION:Función para obtener los datos de las ordenes abiertas
     * AUTOR: Diego
     * FECHA CREACIÓN:
     * FECHA MODIFICACIÓN: 26/04/2019
     * MODIFICADO POR: Constanzo Manuel Basurto Chipolini
     * CAMBIOS: Agregar acciones para la consulta de los paquetes de la orden.
     */
    function CargarDatos()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarDatosOrdenes',    
            success:function(resp)
            {
                var OrdenesAbiertas = JSON.parse(resp);

                var t = $("#tablaOrdenAbierta").DataTable({
                    "destroy": true,
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
                        OrdenesAbiertas[i]['Observaciones'],
                        '<a classs = "btn" onclick="ConsultarPaquetesOrden('+OrdenesAbiertas[i]['IdOrden']+')"><i class="icon-clipboard3" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>'+ ' ' +
                        '<a classs = "btn" onclick="CrearNuevoPaquete('+OrdenesAbiertas[i]['IdOrden']+')"><i class="icon-plus" data-toggle="tooltip" data-placement="top" title="Nuevo Paquete"></i></a>'
                    ]).draw(false);  
                }
            }
        });
    }
    
    function CrearNuevoPaquete(IdOrden)
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarOrden',
            data:{
                IdOrden:IdOrden
            },
            method: "POST",
            success:function(resp)
            {
                var Orden = JSON.parse(resp);
                
                $('#compania').val(Orden['NombreCompania']);
                $('#contacto').val(Orden['NombreContacto']);
                $('#IdOrden').val(IdOrden);
                $('#lblIdOrden').html(IdOrden);
                CargarLaboratorio();
                CargarEquiposOrden(IdOrden);
                $("#modalNuevoPaquete").modal('show');     
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
    
    function CargarEquiposOrden(IdOrden)
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposSinPaquete_ajax',
            data:{
                IdOrden:IdOrden
            },
            method: "POST",
            success:function(resp)
            {
                
                var Equipos = JSON.parse(resp);
                $('#tblEquiposOrden tbody tr').remove();
                for (i=0;i<Equipos.length;i++)
                {
                    
                    $('#tblEquiposOrden').append(
                        '<tr id=rowEquipoOrden'+i+'>'+
                        '<td id="IdEquipoOrden">'+Equipos[i]['IdEquipoOrden']+'</td>'+
                        '<td >'+Equipos[i]['ClaveId']+'</td>'+
                        '<td>'+Equipos[i]['Descripcion']+'</td>'+
                        
                        '<td><input type="checkbox" name="chkEquipoPaquete[]" id="Seleccionar" value ="'+Equipos[i]['IdEquipoOrden']+'" checked></td>'+
                        '</tr>'
                        );   
                }                
            }
        });
        
    }
</script>