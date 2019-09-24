<style>
    td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_open.png');?>) no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url(<?php echo base_url('/app-assets/images/datatables/resources/details_close.png');?>) no-repeat center center;
    }
    th { font-size: 14px; }
    td { font-size: 13px; }
</style>
<div class="row match-height">
  <div class="col-md-12">
      <div class="card">
        <!--CARD HEADER-->
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Equipos</h4>
            <input type="hidden" id="NoOrden" name="NoOrden">
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
                  <table class="table table-responsive table-bordered table-striped" id="tblEquiposOrden"  style="width: 100%">
                            <thead>
                                <th>No. Orden</th>
                                <th>No. Paquete</th>
                                <th>Cliente</th>
                                <th>No. Equipo</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Num. Serie</th>
                                <th>Clave</th>
                                <th>Estatus</th>
                                <th>Etiqueta</th>
                                <th>Factura</th>
                                <th>Certificado</th>
                                <th>EquipoOrden</th>
                                <th>IdCliente</th>
                                <th></th>
                                <th></th>
                                <th>Acciones</th>
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


<!--MODALS-->
<div class="modal fade" tabindex="-1" role="dialog" id="ModalEquipo" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                                  <button onclick="cerrar()" type="button" class="close" id="CancelarModalEquipo">&times;</button>
                                  <h5 class="modal-title" id="actualizarModalLabel">Actualizar Equipo</h5>
                              </div>
                              <div class="modal-body">

                              <div class="row">
                                  <div class="col-md-6">
                                      <h4 id="ClienteSelect"></h4>
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="ClaveModalProducto">Clavé de Identificación:</label>
                                          <input type="text" id="ClaveModalProducto" class="form-control" placeholder="Clavé de Identificación" name="ClaveModalProducto" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="DescripcionModalProducto">Numero de serie:</label>
                                          <div class="position-relative">
                                              <input type="text" id="NumSerieModalProducto" class="form-control" placeholder="Numero de serie" name="NumSerieModalProducto" required>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="LoteModalProducto">Modelo:</label>
                                          <input type="text" id="ModeloModalProducto" class="form-control" placeholder="Modelo" name="ModeloModalProducto" required>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="CodigoModalProducto">Marca:</label>
                                          <input type="text" id="MarcaModalProducto" class="form-control" placeholder="Marca" name="MarcaModalProducto" required>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="DescripcionModalProducto">Descripción del Equipo:</label>
                                          <input type="text" id="DescripcionModalProducto" class="form-control" placeholder="Descripción" name="DescripcionModalProducto" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="LoteModalProducto">Alcance de Medicion:</label>
                                          <input type="text" id="AlcanceModalProducto" class="form-control" placeholder="Alcance de Medicion" name="AlcanceModalProducto" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="CantidadModalProducto">División Minima:</label>
                                          <input type="text" id="DivisionModalProducto" class="form-control" placeholder="División Minima" name="DivisionModalProducto" required>
                                      </div>
                                  </div>
                              </div>




                              </div>
                              <div class="modal-footer">
                                  <button id="ModificarModalEquipo" type="button" class="btn btn-primary">Confirmar</button>
                                  <button id="CancelarModalEquipo" onclick="cerrar()" type="button" class="btn btn-primary">Cancelar</button>
                              </div>
                              </div>
                          </div>
</div>
<!--MODAL:Avanzar Estatus-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAvanzarEstatus" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Avazar Estatus</h5>
        <input type="hidden" id="IdEquipoOrden" name="IdEquipoOrden">
        <input type="hidden" id="IdEstatusActual" name="IdEstatusActual">

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label id="EstatusActual"></label> <i class="fas fa-arrow-alt-circle-right fa-lg"></i> <label id="EstatusSiguiente"></label>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <div class="position-relative has-icon-left">
                        <input type="date" id="FechaEstatus" class="form-control" name="FechaEstatus"/>
                        <div class="form-control-position">
                            <i class="icon-calendar5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
          <button id="AvanzarEstatus" onclick="AvanzarEstatus()" type="button" class="btn btn-success" data-dismiss="modal">Confirmar</button>
          <button id="CancelarEstatus" type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!--MODAL:Recibir Etiqueta-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalRecibirEtiqueta" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Fecha Recepción Etiqueta</h5>
        <input type="hidden" id="RE_IdEquipoOrden">


      </div>
      <div class="modal-body">

        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <div class="position-relative has-icon-left">
                        <input type="date" id="FechaEtiqueta" class="form-control"/>
                        <div class="form-control-position">
                            <i class="icon-calendar5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="modal-footer">
          <button id="RecibirEtiqueta" onclick="RecibirEtiqueta()" type="button" class="btn btn-success" data-dismiss="modal">Confirmar</button>
          <button id="CancelarRecibirEtiqueta" type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!--MODAL:Subir Certificado-->
<form id="form-modal-SubirCertificado" method="post">
  <div class="modal fade" tabindex="-1" role="dialog" id="modalSubirCertificado" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Subir Certificado</h5>
          <input type="hidden" name="CERT_IdEquipoOrden" id="CERT_IdEquipoOrden">
          <input type="hidden" name="CERT_IdEquipo" id="CERT_IdEquipo">
          <input type="hidden" name="CERT_IdCliente" id="CERT_IdCliente">


        </div>
        <div class="modal-body">

          <div class="row">
              <div class="col-md-7">
                  <div class="form-group">
                      <div class="position-relative has-icon-left">
                          <input type="date" id="FechaEtiqueta" class="form-control"/>
                          <div class="form-control-position">
                              <i class="icon-calendar5"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-2">
                  <input type="file" name="Certificado_file" size="20"/>
              </div>
          </div>

        </div>

        <div class="modal-footer">
            <button id="SubirCertificado" type="submit" class="btn btn-success" value="Subir">Guardar</button>
            <button id="CancelarSubirCertificado" type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</form>


<script type="text/javascript">

    var idEquipoa = 0;

    $(document).ready(function(){

      $("#form-modal-SubirCertificado").submit(function (event){


	    event.preventDefault();
      var formData = new FormData($("#form-modal-SubirCertificado")[0]);



       $.ajax({
         url: '<?=site_url()?>/Servicio_Controller/SubirCertificado_ajax',
         type: 'POST',
         data: formData,
         processData: false,
        contentType: false,
       })
       .done(function() {
         alert('Archivo Guardado');
       })
       .fail(function() {
         alert("error");
         console.log("error");
       });



      });
        // Add event listener for opening and closing details
        $('#tblEquiposOrden tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var t = $("#tblEquiposOrden").DataTable();
            var row = t.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    });


    function ConsultarEquiposPaquete(IdPaqueteEnvio)
    {
        var t = $('#tblEquiposOrden').DataTable({
            "drawCallback": function( settings ) {
              $('[data-toggle="tooltip"]').tooltip();
            },
            "ajax":{
                url:"<?php echo site_url();?>/Paquetes_Controller/ConsultarEquiposPaquetes",
                method:"POST",
                data: {IdPaqueteEnvio:IdPaqueteEnvio},
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
                {"targets":0, "data":"ID", "render":function(data,type, meta, row)
                  {
                    return "<a href='<?=site_url()?>/Servicio/ConsultarDetalleServicio/"+data+"''>"+data+"</a>";
                  }
                },
                {"targets":1, "data":"IdPaqueteEnvio", "render":function(data,type, meta, row)
                  {
                    return "<a href='<?=site_url()?>/Paquete/ConsultarDetalle/"+data+"''>"+data+"</a>";
                  }
                },
                {"targets":17, "data":"ID", "render": function(data,type,row,meta)
                        {
                          var btnAvanzar ="";
                            if (row['IdEstatusPaquete']<7 && row['IdEstatusPaquete']>2)
                            {
                              btnAvanzar=' <button type="button" style="border-radius: 200px" class="btn btn-primary btn-sm" onclick="Modal_AvanzarEstatus('+row['IdEquipoOrden']+',\''+row['DescripcionEstatusPaquete']+'\','+row['IdEstatusPaquete']+')"><i class="fas fa-angle-double-right fa-lg" data-toggle="tooltip" data-placement="top" id="AvanzarEquipo" title="Avanzar Estatus"></i></button>';

                            }
                            return '<button type="button" style="border-radius: 200px" class="btn btn-success btn-sm" onclick="OpenModal_ActualizarEquipo('+row['IdEquipo']+')"><i class="far fa-edit fa-lg" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Editar Equipo"></i></button>'+
                            btnAvanzar;
                        }
                },
                {"targets":10, "data":"Etiqueta", "render":function(data,type,row,meta)
                  {
                    if (row['IdEstatusPaquete']>2)
                    {
                      if (data=="1")
                       {
                         return '<i class="far fa-check-square fa-lg green"></i>';

                       }
                       else {
                         return "<button class='btn btn-primary btn-sm' onclick=RecibirEtiquetaEquipo("+row['IdEquipoOrden']+")>Recibir</button>";
                       }

                    }
                    else {
                      return "";
                    }

                  }

                },
                {"targets":11, "data":"Factura", "render":function(data,type,row,meta)
                  {
                    if (row['IdEstatusPaquete']>2)
                    {
                      if(data==null)
                      {
                        return "<a href='<?=site_url()?>/Factura' class='btn btn-primary btn-sm'>Generar</a>";
                      }
                      else {
                        return data;
                      }


                    }
                    else {
                      return "";
                    }
                  }

                },
                {
                  "targets":12, "data":"Certificado", "render":function(data,type,row,meta)
                  {
                    if (data =="" || data==null)
                    {
                      return "<button type ='button' class='btn btn-primary btn-sm' onclick=OpenModal_SubirCertificado("+row['IdCliente']+","+row['IdEquipo']+","+row['IdEquipoOrden']+")>Subir</button>";

                    }
                    else {
                      var url = '<?php echo base_url();?>Certificados/'+row['IdCliente']+'/'+row['IdEquipo']+'/'+data;
                      return '<a href="'+url+'" target="_blank"><i class="icon-file-pdf"></i></a>';
                    }
                    return data;
                  }
                },

                {"targets":[3,13,14,16], "visible":false
              },
              {
                "targets":15, "data":"dias", "render":function(data,type,row,meta)
                {
                  var dif = row['diasServicios'] - data;
                  if (dif <1)
                  {
                    return '<i class="fas fa-lightbulb red" data-toggle="tooltip" data-placement="top" id="DiasDemora" title="'+dif+' días"></i>';
                  }
                  else {
                    if (dif==1)
                    {
                      return '<i class="fas fa-lightbulb yellow"></i>'
                    }
                    else {
                      return '<i class="fas fa-lightbulb green"></i>'
                    }

                  }
                  return dif;
                }
              }
                ],

              "columns": [

                    { "data": "ID" },
                    {"data":"IdPaqueteEnvio"},
                    { "data": "NombreCompania" },
                    { "data": "IdEquipo" },
                    { "data": "Descripcion" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "NumService" },
                    { "data": "ClaveId" },
                    { "data": "DescripcionEstatusPaquete" },
                    { "data": "Etiqueta" },
                    { "data": "Factura" },
                    { "data": "Certificado" },
                    {"data":"IdEquipoOrden"},
                    {"data":"IdCliente"},
                    {"data":"dias"},
                    {"data":"diasServicios"}

                ]

            });

            var tbl = document.getElementById("tblEquiposOrden");
            tbl.scrollIntoView();
    }

    function ConsultarEquiposOrden(IdOrden)
    {
        var t = $('#tblEquiposOrden').DataTable({
            "drawCallback": function( settings ) {
              $('[data-toggle="tooltip"]').tooltip();
            },
            "ajax":{
                url:"<?php echo site_url();?>/Servicio_Controller/ConsultarEquiposOrden",
                method:"POST",
                data: {IdOrden:IdOrden},
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
                {"targets":0, "data":"ID", "render":function(data,type, meta, row)
                  {
                    return "<a href='<?=site_url()?>/Servicio/ConsultarDetalleServicio/"+data+"''>"+data+"</a>";
                  }
                },
                {"targets":1, "data":"IdPaqueteEnvio", "render":function(data,type, meta, row)
                  {
                    return "<a href='<?=site_url()?>/Paquete/ConsultarDetalle/"+data+"''>"+data+"</a>";
                  }
                },
                  {"targets":17, "data":"ID", "render": function(data,type,row,meta)
                        {
                          var btnAvanzar ="";
                            if (row['IdEstatusPaquete']<7 && row['IdEstatusPaquete']>2)
                            {
                              btnAvanzar=' <button type="button" style="border-radius: 200px" class="btn btn-primary btn-sm" onclick="Modal_AvanzarEstatus('+row['IdEquipoOrden']+',\''+row['DescripcionEstatusPaquete']+'\','+row['IdEstatusPaquete']+')"><i class="fas fa-angle-double-right fa-lg" data-toggle="tooltip" data-placement="top" id="AvanzarEquipo" title="Avanzar Estatus"></i></button>';

                            }
                            return '<button type="button" style="border-radius: 200px" class="btn btn-success btn-sm" onclick="OpenModal_ActualizarEquipo('+row['IdEquipo']+')"><i class="far fa-edit fa-lg" data-toggle="tooltip" data-placement="top" id="VerEquipo" title="Editar Equipo"></i></button>'+
                            btnAvanzar;
                        }
                },
                {"targets":10, "data":"Etiqueta", "render":function(data,type,row,meta)
                  {
                    if (row['IdEstatusPaquete']>2)
                    {
                      if (data=="1")
                       {
                         return '<i class="far fa-check-square fa-lg green"></i>';

                       }
                       else {
                         return "<button class='btn btn-primary btn-sm' onclick=RecibirEtiquetaEquipo("+row['IdEquipoOrden']+")>Recibir</button>";
                       }

                    }
                    else {
                      return "";
                    }

                  }

                },
                {"targets":11, "data":"Factura", "render":function(data,type,row,meta)
                  {
                    if (row['IdEstatusPaquete']>2)
                    {
                      if(data==null)
                      {
                        return "<a href='<?=site_url()?>/Factura' class='btn btn-primary btn-sm'>Generar</a>";
                      }
                      else {
                        return data;
                      }


                    }
                    else {
                      return "";
                    }
                  }

                },
                {
                  "targets":12, "data":"Certificado", "render":function(data,type,row,meta)
                  {
                    if (data =="" || data==null)
                    {
                      return "<button type ='button' class='btn btn-primary btn-sm' onclick=OpenModal_SubirCertificado("+row['IdCliente']+","+row['IdEquipo']+","+row['IdEquipoOrden']+")>Subir</button>";

                    }
                    else {
                      var url = '<?php echo base_url();?>Certificados/'+row['IdCliente']+'/'+row['IdEquipo']+'/'+data;
                      return '<a href="'+url+'" target="_blank"><i class="icon-file-pdf"></i></a>';
                    }
                    return data;
                  }
                },

                {"targets":[3,13,14,16], "visible":false
              },
              {
                "targets":15, "data":"dias", "render":function(data,type,row,meta)
                {
                  var dif = row['diasServicios'] - data;
                  if (dif <1)
                  {
                    return '<i class="fas fa-lightbulb red" data-toggle="tooltip" data-placement="top" id="DiasDemora" title="'+dif+' días"></i>';
                  }
                  else {
                    if (dif==1)
                    {
                      return '<i class="fas fa-lightbulb yellow"></i>'
                    }
                    else {
                      return '<i class="fas fa-lightbulb green"></i>'
                    }

                  }
                  return dif;
                }
              }
                ],

              "columns": [

                    { "data": "ID" },
                    {"data":"IdPaqueteEnvio"},
                    { "data": "NombreCompania" },
                    { "data": "IdEquipo" },
                    { "data": "Descripcion" },
                    { "data": "Marca" },
                    { "data": "Modelo" },
                    { "data": "NumService" },
                    { "data": "ClaveId" },
                    { "data": "DescripcionEstatusPaquete" },
                    { "data": "Etiqueta" },
                    { "data": "Factura" },
                    { "data": "Certificado" },
                    {"data":"IdEquipoOrden"},
                    {"data":"IdCliente"},
                    {"data":"dias"},
                    {"data":"diasServicios"}

                ]

            });

            var tbl = document.getElementById("tblEquiposOrden");
            tbl.scrollIntoView();
    }


    function EditarEquipo()
    {
        var table =$("#tblEquiposOrden").DataTable();
        var data = table.row( $(this).parents('tr') ).data();
        alert(data);
    }

    $("#ModificarModalEquipo").click(function()
    {
        datos= {
            IdEquipo: idEquipoa,
            ClaveId: $('#ClaveModalProducto').val(),
            NumService: $("#NumSerieModalProducto").val(),
            Modelo: $("#ModeloModalProducto").val(),
            Descripcion: $('#DescripcionModalProducto').val(),
            Marca: $("#MarcaModalProducto").val(),
            AlcanceMedicion: $("#AlcanceModalProducto").val(),
            DivisionMedicion: $('#DivisionModalProducto').val()
        };

        if($('#ClaveModalProducto').val() != "" || $("#NumSerieModalProducto").val() != "" || $("#ModeloModalProducto").val() != "")
        {
            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/ActualizarEquipoPorId',
                dataType: 'json',
                data:datos,
                success:function(resp)
                {
                    //alert("naskndaksd");
                }

            });
            cerrar();
        }
    });

    function OpenModal_ActualizarEquipo(IdEquipo)
    {
        var c = "Actualizar equipo: " + IdEquipo ;
        $('#actualizarModalLabel').html(c);

        idEquipoa = IdEquipo;
        $.ajax
        ({
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarEquipoPorId',
            data:{
                IdEquipo:IdEquipo
            },
            method: "POST",
            success:function(resp)
            {
                var Equipo = JSON.parse(resp);

                $('#ClaveModalProducto').val(Equipo['ClaveId']);
                $('#NumSerieModalProducto').val(Equipo['NumService']);
                $('#ModeloModalProducto').val(Equipo['Modelo']);
                $('#DescripcionModalProducto').val(Equipo['Descripcion']);
                $('#MarcaModalProducto').val(Equipo['Marca']);
                $('#AlcanceModalProducto').val(Equipo['AlcanceMedicion']);
                $('#DivisionModalProducto').val(Equipo['DivisionMedicion']);

                $('#ModalEquipo').modal('show');
            }
        });
    }

    function Limpiar()
    {
        $('#ClaveModalProducto').val("");
        $("#NumSerieModalProducto").val("");
        $("#ModeloModalProducto").val("");
        $('#DescripcionModalProducto').val("");
        $("#MarcaModalProducto").val("");
        $("#AlcanceModalProducto").val("");
        $('#DivisionModalProducto').val("");
    }

    function cerrar()
    {
        $('#ModalEquipo').modal('hide');
        Limpiar();
    }

    function Modal_AvanzarEstatus(IdEquipoOrden, DescripcionEstatus, IdEstatusActual)
    {
      var fecha = new Date();
      var mes = fecha.getMonth()+1;
      var dia = fecha.getDate();
      var ano = fecha.getFullYear();
      if(dia<10)
          dia='0'+dia;
      if(mes<10)
          mes='0'+mes;

      var hoy = ano+"-"+mes+"-"+dia;
      $("#FechaEstatus").val(hoy);

      $.ajax({
        url: '<?=site_url()?>/Paquetes_Controller/ObtenerNuevoEstatus_ajax',
        type: 'POST',
        data: {IdEstatus: IdEstatusActual}
      })
      .done(function(data) {
        var NuevoEstatus = JSON.parse(data);
        $("#IdEquipoOrden").val(IdEquipoOrden);
        $("#IdEstatusActual").val(IdEstatusActual);
        $("#EstatusSiguiente").html(NuevoEstatus['DescripcionEstatusPaquete']);
        $('#EstatusActual').html(DescripcionEstatus);
        $('#modalAvanzarEstatus').modal('show');

      })
      .fail(function() {
        console.log("error");
      })
      ;

    }

    function AvanzarEstatus() {
      var IdEquipoOrden = $("#IdEquipoOrden").val();
      var IdEstatus = $("#IdEstatusActual").val();

      $.ajax({
        url: '<?=site_url()?>/Paquetes_Controller/AvanzarEstatusEquipo_ajax',
        type: 'POST',
        data: {
          IdEquipoOrden: IdEquipoOrden,
          IdEstatusActual:IdEstatus,
          FechaEstatus: $("#FechaEstatus").val()
        }
      })
      .done(function() {
        location.reload();
      })
      .fail(function() {
        console.log("error");
      });


    }

    function RecibirEtiquetaEquipo(IdEquipoOrden) {

      $("#RE_IdEquipoOrden").val(IdEquipoOrden);
      var fecha = new Date();
      var mes = fecha.getMonth()+1;
      var dia = fecha.getDate();
      var ano = fecha.getFullYear();
      if(dia<10)
          dia='0'+dia;
      if(mes<10)
          mes='0'+mes;

      var hoy = ano+"-"+mes+"-"+dia;
      $("#FechaEtiqueta").val(hoy);
      $("#modalRecibirEtiqueta").modal('show');

    }

    function RecibirEtiqueta() {
      var IdEquipoOrden = $("#RE_IdEquipoOrden").val();
      var FechaEtiqueta = $("#FechaEtiqueta").val();

      $.ajax({
        url: '<?=site_url()?>/Paquetes_Controller/RecibirEtiquetaEquipo_ajax',
        type: 'POST',

        data: {
          IdEquipoOrden: IdEquipoOrden,
          FechaEtiqueta:FechaEtiqueta
        }
      })
      .done(function() {
        location.reload();
      })
      .fail(function() {
        console.log("error");
      });


    }

    function OpenModal_SubirCertificado(IdCliente,IdEquipo,IdEquipoOrden) {

      $("#CERT_IdEquipo").val(IdEquipo);
      $("#CERT_IdEquipoOrden").val(IdEquipoOrden);
      $("#CERT_IdCliente").val(IdCliente);
      $('#modalSubirCertificado').modal('show');

    }

    function SubirCertificado()
    {
      var certificado_file = $("#Certificado_file");

      var archivos = certificado_file[0].files;

      if (archivos.length >0)
      {
         var formData = new FormData($("#form-modal-SubirCertificado")[0]);

        formData.append('IdCliente', $("#CERT_IdCliente"));
        formData.append('IdEquipo', $("#CERT_IdEquipo"));
        formData.append('IdEquipoOrden',$("#CERT_IdEquipoOrden"));

        $.ajax({
          url: '<?=site_url()?>/Servicio_Controller/SubirCertificado_ajax',
          type: 'POST',
          data: formData
        })
        .done(function() {
          alert('Archivo Guardado');
        })
        .fail(function() {
          console.log("error");
        });

      }
    }

</script>
