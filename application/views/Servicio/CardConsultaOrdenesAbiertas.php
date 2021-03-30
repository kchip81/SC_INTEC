<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Consultar Ordenes</h4>
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
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary" id="btnAgregar" onclick="CrearNuevoPaquete()">
                                            <i class="icon-android-add"></i>Crear Paquete
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnOrdenesAbiertas" onclick="CargarOrdenes(0)">
                                          <i class="icon-gear"></i>Abiertas
                                      </button>
                                  </div>
                                </div>
                                <div class="col-md-1">
                                  <div class="form-group">
                                      <button type="button" class="btn btn-secondary" id="btnOrdenesCerradas" onclick="CargarOrdenes(1)">
                                          <i class="icon-check-square-o"></i>Cerradas
                                      </button>
                                  </div>
                                </div>

                            </div>




                            <table class="table table-responsive table-bordered table-striped" id="tablaOrdenAbierta" style="width:100%">
                                    <thead>
                                        <th>No. Orden</th>
                                        <th>Cliente</th>

                                        <th>Fecha Creación</th>

                                        <th>Observaciones</th>
                                        <th>Estatus</th>
                                        <th>Detalle</th>
                                    </thead>
                                    <tbody id="tablaOrdenes">

                                    </tbody>
                                </table>

                            <!--<?php echo form_open('Servicio_Controller/CrearNuevoPaquete');?>-->
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
                                                    <label for="DescripcionServicio">Descripción Paquete:</label>
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
                                                <th><input name="select_all" value="1" id="example-select-all" type="checkbox"></th>
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

                                        <button type="submit" class="btn btn-success mr-1" id="modalPaqueteAceptar" name="action" value="CrearPaquete" >
                                            <i class="icon-edit"></i>Crear Paquete
                                        </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        <!--</form>-->

                        </div>





                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">

    $(document).ready(function()
    {
        CargarOrdenes(0);
        $('#modalPaqueteAceptar').click(function() {
            let table = $('#tblEquiposOrdenPaquete').DataTable();
            
            let arr= [];
            let checkedvalues = table.$('input:checked').each(function () {
                arr.push($(this).val())
            });
            
            var DescripcionServicio = $("#DescripcionServicio").val();
            var laboratorio = $("#laboratorio").val();

            if(arr.length == 0){
                swal({
                    title: "Seleccione algun equipo",
                    icon: "info",
                });
            }
            else if(DescripcionServicio == ''){
                swal({
                    title: "Complete todos los campos",
                    icon: "info",
                });
            }
            else if(laboratorio == 0 || laboratorio == ''){
                swal({
                    title: "Seleccione un laboratorio",
                    icon: "info",
                });
            }else if(laboratorio != 0 && arr.length != 0 && DescripcionServicio != ''){

                datos={"DescripcionServicio":DescripcionServicio,"laboratorio":laboratorio,"idEquipos":JSON.stringify(arr)};
                
                $.ajax
                ({
                    type:'post',
                    url:'<?php echo site_url();?>/Servicio_Controller/CrearNuevoPaquete',
                    data:datos,
                    success:function(resp)
                    {
                        if(resp != 'mal'){
                            swal({
                                title: "El paquete ha sido creado",
                                icon: "success",
                            });
                            $('#modalNuevoPaquete').modal('hide');
                        }else{
                            swal({
                                title: "El paquete no se ha podido crear",
                                icon: "error",
                            });
                        }
                    }
                });
            }              
        });
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

    function CargarOrdenes(cerradas)
    {
      var t = $('#tablaOrdenAbierta').DataTable({
        "drawCallback": function( settings ) {
          $('[data-toggle="tooltip"]').tooltip();
        },
       "ajax":{
           url:"<?php echo site_url();?>/Servicio_Controller/ConsultarDatosOrdenesAbiertas",
           method:"POST",
           dataSrc: "",
           data:{
             Cerradas:cerradas
           }
       },

        "destroy":true,
        "language": {
             "lengthMenu": "Mostrando _MENU_ registros por pag.",
             "zeroRecords": "Sin Datos - disculpa",
             "info": "Motrando pag. _PAGE_ de _PAGES_",
             "infoEmpty": "Sin registros disponibles",
             "infoFiltered": "(filtrado de _MAX_ total)"
         },
         "autoWidth":true,


         "columnDefs":[
           {"targets":5, "data":"IdOrden", "render":function(data,type,row,meta)
             {
               return '<a href="<?php echo site_url('Servicio/ConsultarDetalleServicio/'); ?>'+data+'"><i class="icon-eye4"></i>Detalle</a>';
             }

           }
         ],

         "columns": [
           {"data":"IdOrden"},
           {"data":"NombreCompania"},
           {"data":"Fecha"},
           {"data":"Observaciones"},
           {"data":"DescripcionEstatusOrden"}
         ]

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
                    swal({
                        title: "Orden Eliminada",
                        icon: "success",
                    });
                        //alert('Orden Eliminada');
                    CargarDatos();

                }
            });
        }else{
            swal({
                title: "La orden no se puede eliminar",
                icon: "error",
            });
        }
    }

    function CargarEquiposOrden()
    {
        var t = $('#tblEquiposOrdenPaquete').DataTable({

        "ajax":{
            url:"<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposSinPaquete_ajax",
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
        "pageLength": 10,
        "columnDefs":[
                {
                    'targets': 7,
                    'searchable': false,
                    'orderable': false,
                    "data":"IdEquipoOrden",
                    'className': 'dt-body-center',
                    'render': function (data, type, full, meta){
                        return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                    }



                }],
        'order': [[1, 'asc']],
        'select': {
            'style': 'multi'
        },
        "columns": [
                {"data":"IdOrden"},
                {"data":"NombreCompania"},
                {"data":"IdEquipoOrden"},
                {"data":"Descripcion"},
                {"data":"Modelo"},
                {"data":"ClaveId"},
                {"data":"NumService"}
            ]
        });

        $('#example-select-all').on('click', function(){
            var rows = t.rows({ 'search': 'applied' }).nodes();
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });

        $('#tblEquiposOrdenPaquete tbody').on('change', 'input[type="checkbox"]', function(){
            if(!this.checked){
                var el = $('#example-select-all').get(0);
                if(el && el.checked && ('indeterminate' in el)){
                    el.indeterminate = true;
                }
            }
        });
    }
</script>
