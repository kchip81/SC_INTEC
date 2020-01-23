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
                <?=form_open('Factura_Controller/CrearFactura')?>
                <div class="card-body collapse in">
                <div class="card-block">
                    <div class="form-body">

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="Clientes">Cliente</label>
                                  <input type="text" class="form-control" name="NombreCliente" value="<?=$Cliente[0]['NombreCompania']?>" readonly>
                                  <input type="hidden" class="form-control" name="IdCliente" id="IdCliente" onchange="CargarEquiposCliente()">
                              </div>
                          </div>
                      </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txtNumeroFactura">No.Factura</label>
                                    <input type="text" id="txtNumeroFactura" class="form-control" placeholder="No. Factura" name="txtNumeroFactura" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="FechaFactura">Fecha Fact.</label>
                                <div class="position-relative has-icon-left">
                                    <input type="date" id="FechaFactura" class="form-control" name="FechaFactura" required/>
                                    <div class="form-control-position">
                                        <i class="icon-calendar5"></i>
                                    </div>
                                </div>

                              </div>

                            </div>
                        </div>
                        <h4 class="form-section"><i class="icon-clipboard4"></i>Equipos para facturar</h4>
                        <div class="row">
                          <div class="col-md-12">
                            <table class="table table-responsive table-bordered table-striped" id="tblEquiposCliente"  style="width: 100%">
                                <thead>
                                    <th>No. Orden</th>
                                    <th>No. Paquete</th>
                                    <th>Descripcion</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Num. Serie</th>
                                    <th>Estatus Serv.</th>
                                    <th><input type="checkbox" class="" id="checkAllEquipos" /></th>
                                </thead>
                                <tbody >

                                </tbody>
                            </table>
                          </div>

                        </div>






                    </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-warning"name="action" value="cerrar"><i class="icon-cross2"></i>Cerrar</button>
                  <button type="submit" class="btn btn-success"name="action" value="generar"><i class="icon-check2"></i>Generar</button>

                </div>
            </div>
          </form>

            </div>
        </div>
    </div>





<script>

    $(document).ready(function()
    {
        CargarEquiposCliente();
    });

    function CargarEquiposCliente() {

      var t = $('#tblEquiposCliente').DataTable({
          "drawCallback": function( settings ) {
            $('[data-toggle="tooltip"]').tooltip();
          },
          "ajax":{
              url:"<?php echo site_url();?>/Factura_Controller/ConsultarEquiposFactura_ajax",
              method:"POST",
              data: {IdCliente:<?=$Cliente[0]['IdCliente']?>},
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
              {"targets":[8], "visible":false},
              {"targets":7, "data":"IdCliente", "render":function(data,type,row,meta){
                return '<input type="checkbox" class="chkEquipo" name="chkEquipoFactura[]" id="checkall" value="' +
													data + '"/>';
              }},
              {"targets":0, "data":"IdOrden", "render":function(data,type, meta, row)
                {
                  return "<a href='<?=site_url()?>/Servicio/ConsultarDetalleServicio/"+data+"''>"+data+"</a>";
                }
              },
              {"targets":1, "data":"IdPaqueteEnvio", "render":function(data,type, meta, row)
                {
                  return "<a href='<?=site_url()?>/Paquete/ConsultarDetalle/"+data+"''>"+data+"</a>";
                }
              },

              ],

            "columns": [

                  { "data": "IdOrden" },
                  {"data":"IdPaqueteEnvio"},

                  { "data": "Descripcion" },
                  { "data": "Marca" },
                  { "data": "Modelo" },
                  { "data": "NumService" },

                  { "data": "DescripcionEstatusPaquete" },

                  {"data":"IdEquipoOrden"},
                  {"data":"IdCliente"},


              ]

          });

          $("#checkAllEquipos").on("click",function() {
            $("input:checkbox.chkEquipo").prop("checked", this.checked);
          });
          $("checkbox.chkEquipo").on("click", function() {
              if ($("checkbox.chkEquipo").length == $("checkbox.chkEquipo:checked").length) {
                $("#checkAllEquipos").prop("checked", true);
              } else {
                $("#checkAllEquipos").prop("checked", false);
              }
          });
    }


</script>
