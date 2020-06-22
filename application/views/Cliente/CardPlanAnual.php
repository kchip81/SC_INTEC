<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Plan Anual Equipo</h4>
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
                                    <label for="Clientes">Cliente</label>
                                    <select name="cliente" id="cliente" class="form-control">
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="MesInicio">Mes</label>
                                    <select name="Mes de inicio" id="MesInicioModal" class="form-control" onchange="">
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2  ">
                              <div class="form-group">
                                <label for="">Opción</label>
                                <div class="form-check">
                                  <input type="radio" class="form-check-input with-gap" id="Plan" value ="0" name="OpcionMes">
                                  <label class="form-check-label" for="Plan">Plan</label>
                                </div>

                                <div class="form-check">
                                  <input type="radio" class="form-check-input with-gap" id="Real" name="OpcionMes" value="1" checked>
                                  <label class="form-check-label" for="Real">Real</label>
                                </div>

                              </div>
                            </div>
                            <div class="col-md-3">
                            <br>
                                <div class="form-group" style="margin-top:7px;">
                                    <button type="button" class="btn btn-primary" id="btnConsultarPlan" onclick="CargarDatosEquipo()"><i class="icon-android-search"></i> Consultar</button>
                                </div>

                            </div>

                        </div>

                        <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrden"  style="width: 100%">
                            <thead>
                                <th>Mes Plan</th>
                                <th>No. Orden</th>
                                <th>Mes Ult. Servicio</th>
                                <th>No. Equipo</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Num. Serie</th>
                                <th>Clave</th>
                                <th>Acciónes</th>
                            </thead>
                            <tbody >

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>


                        <div class="modal fade" id="modalCertificados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="ModalLabel">Certificados del Equipo
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <input type="hidden" id="IdOrden" name="IdOrden">
                                            </h4>
                                          </div>

                                    <div class="modal-body">

                                        <h5>Equipos</h5>
                                        <table class="table table-responsive table-bordered table-striped" id="tblEquipos" style="width:100%">
                                            <thead>
                                                <th>No. Orden</th>
                                                <th>Certificado</th>
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
                                    </div>
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
    });

    function CargarClientes()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Cliente_Controller/ConsultarClientes_ajax',
            success:function(resp)
            {
                $("#cliente").html(resp)
            }
        });
    }

    $("#cliente").change(function()
    {
        CargarDatosClientes($(this).val());

    });

    function CargarDatosClientes(id)
    {
        datos = {"id":id};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Cliente_Controller/ConsultarDataClientes_ajax',
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

    function CargarDatosEquipo()
    {
      var mes = $("#MesInicioModal").val();
      var OpcionMes = $('input:radio[name=OpcionMes]:checked').val();
      var IdCliente = $("#cliente").val();

        datos = {
                  "idCliente":IdCliente,
                  "MesConsulta":mes,
                  "Opcion":OpcionMes
                };



        var t = $('#tblEquiposOrden').DataTable({

            "ajax":{
                url:"<?php echo site_url();?>/Cliente_Controller/ConsultarEquipoPorCliente",
                method:"POST",
                data: datos,
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

                "columnDefs":[
                {
                    "targets":9, "data":"IdEquipo", "render": function(data,type,row,meta)
                    {
                        return '<a classs = "btn" onclick="OpenModal_VerCertificado('+data+')"><i class="icon-clipboard3" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Ver Equipo"> Equipo</i></a>';
                    }
                }],

              "columns": [
                    { "data": "MesInicio" },
                    { "data": "TipoPeriodo" },
                    { "data": "MesUltimoServicio" },
                    { "data": "IdEquipo" },
                    { "data": "Descripcion" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "NumService" },
                    { "data": "ClaveId" }
                ]
            });
    }

    function OpenModal_VerCertificado(IdEquipo){
        var c = "Certificados del Equipo: " + IdEquipo ;
        $('#ModalLabel').html(c);
        $('#modalCertificados').modal('show');

        var t = $('#tblEquipos').DataTable({

            "ajax":{
                url:"<?php echo site_url();?>/Cliente_Controller/ConsultarCertificadoEquipo",
                method:"POST",
                data: {idEquipo:IdEquipo},
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

                "columnDefs":[
                {
                    "targets":1, "data":"Certificado", "render": function(data,type,row,meta)
                    {
                        var certificado = data;
                        if (certificado !== "")
                        {
                            var url = '<?php echo base_url();?>Certificados/'+row['IdCliente']+'/'+row['IdEquipo']+'/'+data;
                            return '<a href="'+url+'" target="_blank"><i class="icon-file-pdf"></i></a>';
                        }
                        else
                        {
                            return data;
                        }
                    }
                }],

              "columns": [
                    { "data": "IdOrden" },
                    { "data": "Certificado" }
                ]
            });
    }
//tabla equipo y equipo orden join fecha creacion de la orden
</script>
