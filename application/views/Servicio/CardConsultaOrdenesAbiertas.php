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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary" id="btnAgregar" onclick="CrearNuevoPaquete()">
                                            <i class="icon-android-add"></i>Crear Paquete
                                        </button>
                                    </div>
                                </div>
                                    
                            </div>
                            
                                 
                            <table class="table table-responsive table-bordered table-striped" id="tablaOrdenAbierta" style="width:100%">
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
                                            <h4 class="modal-title" id="exampleModalLabel">Crear Nuevo Paquete
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
                                                    <label for="laboratorio">Laboratorio</label>
                                                    <select name="laboratorio" id="laboratorio" class="form-control" required="required">
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
                                                        <input type="text" id="DescripcionServicio" class="form-control" placeholder="Descripción" name="DescripcionServicio" required="required">
                                                        <div class="form-control-position">
                                                            <i class="icon-speech-bubble"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h5>Equipos Sin Paquete</h5>
                                        <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrdenPaquete" style="width:100%">
                                            <thead>
                                                <th>No. Orden</th>
                                                <th>Cliente</th>
                                                <th>No. Equipo</th>
                                                <th>Equipo</th>
                                                <th>Modelo</th>
                                                <th>Clave</th>
                                                <th>Num. Serie</th>
                                                
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
                        '<a classs = "btn" onclick="ConsultarEquiposOrden('+OrdenesAbiertas[i]['IdOrden']+')"><i class="icon-clipboard3" data-toggle="tooltip" data-placement="top" title="Ver Equipos"> Equipos</i></a>'+ '<br> <a classs = "btn" onclick="EliminarOrden('+OrdenesAbiertas[i]['IdOrden']+','+OrdenesAbiertas[i]['TotalOrdenes']+')"><i class="icon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar Equipos"> Eliminar</i></a><br><a classs = "btn" href="<?php echo site_url(); ?>/Servicio/NuevaOrdenPDF/'+OrdenesAbiertas[i]['IdOrden']+'"><i class="icon-file-pdf" data-toggle="tooltip" data-placement="top" id="VerOrden" title="Ver Orden"> Orden</i></a>'
                    ]).draw(false);  
                }
            }
        });
    }
     
    function CrearNuevoPaquete()
    {
        CargarLaboratorio();
        CargarEquiposOrden();
        $("#modalNuevoPaquete").modal('show');  
        
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

    function EliminarOrden(IdOrden,TotalOrdenes)
    {
        datos= {
            IdOrden: IdOrden        
        };

        if(TotalOrdenes == 0)
        {
            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/EliminarEquipoOrdenPorId',
                dataType: 'json',
                data:datos, 
                complete:function(resp)
                {
                    CargarDatos();
                }
            });
        }else
        alert("La orden no se puede eliminar");
    }

    function CargarEquiposOrden()
    {
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposSinPaquete_ajax',
            
            method: "POST",
            success:function(resp)
            {
                
                var Equipos = JSON.parse(resp);
                $('#tblEquiposOrdenPaquete tbody tr').remove();
                for (i=0;i<Equipos.length;i++)
                {
                    
                    $('#tblEquiposOrdenPaquete').append(
                        '<tr id=rowEquipoOrden'+i+'>'+
                        '<td>'+Equipos[i]['IdOrden']+'</td>'+
                        '<td>'+Equipos[i]['NombreCompania']+'</td>'+
                        '<td id="IdEquipoOrden">'+Equipos[i]['IdEquipoOrden']+'</td>'+
                        '<td>'+Equipos[i]['Descripcion']+'</td>'+
                        '<td>'+Equipos[i]['Modelo']+'</td>'+
                        '<td >'+Equipos[i]['ClaveId']+'</td>'+
                        '<td >'+Equipos[i]['NumService']+'</td>'+
                        
                        
                        '<td><input type="checkbox" name="chkEquipoPaquete[]" id="Seleccionar" value ="'+Equipos[i]['IdEquipoOrden']+'" checked></td>'+
                        '</tr>'
                        );   
                }                
            }
        });
        
    }
</script>
