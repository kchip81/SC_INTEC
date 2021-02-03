
<style>
body{
  background: rgba(0,0,0,0.9);
}
form{
  position: absolute;
  top: 50%;
  left: 5%;
  margin-top: -100px;
  width: 90%;
  height: 210px;
  border: 4px dashed #96989A;
}
form p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: black;
  font-family: Arial;
}
form input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
form button{
  margin: 0;
  color: #fff;
  background: #16a085;
  border: none;
  width: 100%;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
}
form button:hover{
  background: #149174;
	color: #0C5645;
}
form button:active{
  border:0;
}

.dragdrop{
  height: 250px;
}


.alert{
    text-align: center;
}
.modal-alert .alert #loading {
  
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid rgba(255,255,255,.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}


</style>

<script>
$(document).ready(function(){
  $('form input').change(function () {
    if(this.files.length != 0)
        $('form p').text(this.files[0].name);
    else
        $('form p').text('Arrastre el archivo aquí o haga clic en esta área.');
    });

    $("#formuploadajax").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url();?>/Automatizacio_Controller/CargarDatosExcel',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){

                $('.modal').removeClass("modal").addClass("modal-alert");
                /*swal({
                    allowOutsideClick: false,
                    imageUrl: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ibg.com.pe%2Fcomunicacion%2Fgaleria&psig=AOvVaw0Q_GO8_3C4iaqAS-UtyDbQ&ust=1609134293254000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLi-7sq67e0CFQAAAAAdAAAAABAI'
                    text:'Espere por favor...'
                });*/

            },
            success: function(response){ //console.log(response);
                //alert(response);

                $('.modal-alert').removeClass("modal-alert").addClass("modal");

            }
        });
    });
});
</script>


<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <!--CARD HEADER-->
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Cargar datos</h4>
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
                    <!--FORM BODY-->
                    <div class="form-body">  

                    <div class="modal">
                        <div class="alert alert-success" role="alert">
                            <p style="text-align: center;">Espere por favor...</p>
                            <div id="loading"></div>
                        </div>
                        <br><br><br><br><br><br>
                    </div>
                        


                        <div class="dragdrop">

                            <form action="" enctype="multipart/form-data" id="formuploadajax">
                                <input id="file" name="file" type="file" accept=".xl*" required>
                                <p>Arrastre el archivo aquí o haga clic aqui.</p>
                                <button type="submit">Cargar orden</button>
                            </form>                        
                        </div>

                                                                                                   
                    </div> 
                </div>
            </div>


        </div>
    </div>
</div>










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
                                        <label for="NombreProveedor">Contacto:</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="NombreProveedor" class="form-control" placeholder="Usuario" name="NombreProveedor" readonly>
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

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Servicio">Servicio</label>
                                        <select name="servicio" id="servicioMC" class="form-control" onchange="">
                                            <option value="0">Mantenimiento</option>
                                            <option value="1">Calibración</option>
                                        </select>
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

                            <h4 class="form-section"><i class="icon-drawer"></i> Equipos</h4>
                            
                            
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
                                        <th>Mes de Inicio</th>
                                        <th>Periodo</th>
                                        <th>Eliminar</th>
                                        <th>Editar</th>
                                    </thead>
                                    <tbody id="tabla">

                                    </tbody>
                                </table>


                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-warning mr-1" id="CancelarEntrada" name="action" value="cancelar">
                                <i class="icon-cross2"></i> Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary mr-1" id="GuardarEntrada" name="action" value='GuardarEntrada'>
                                <i class="icon-check2"></i> Guardar Entrada
                            </button>
                        </div>



                        <div class="modal fade" tabindex="-1" role="dialog" id="ModalEquipo" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" id="CancelarModalEquipo">&times;</button>
                                <h5 class="modal-title">Agregar Equipo</h5>
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
                                        <label for="ClaveModalProducto">Clave de Identificación:</label>
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
                                        <label for="LoteModalProducto">Alcance de Medición:</label>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Periodo">Periodo:</label>
                                        <select name="PeriodoModal" id="PeriodoModal" class="form-control" onchange="">
                                            <option value="">Periodos...</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="MesInicio">Mes de Inicio</label>
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

                            </div>




                            </div>
                            <div class="modal-footer">
                                <button id="AgregarModalEquipo" type="button" class="btn btn-primary">Confirmar</button>
                                <button id="ActualizarModalAgregar" type="button" class="btn btn-primary" style="display:none">Actualizar</button>
                                <button id="CancelarModalEquipo" onclick="cerrar()" type="button" class="btn btn-primary">Cancelar</button>
                            </div>
                            </div>
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
        CargarDatosPeriodos();
    });

    function CargarDatosPeriodos()
    {
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/CargarDatosPeriodos',
            success:function(resp)
            {
                $("#PeriodoModal").html(resp);
                $("#PeriodoSubProducto").html(resp);
            }
        });
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

    $("#btnBuscarSubProducto").click(function()
    {
        var numSerie = $("#NumSerieSubProducto").val();
        var clave = $("#ClaveSubProducto").val();
        var modelo = $("#ModeloSubProducto").val();
        var peticion = "";

        if(numSerie != "")
            peticion = ".NumService = '"+numSerie+"'";
        else if(clave != "")
            peticion = ".ClaveId = '"+ clave+ "'";
        else if(modelo != "")
            peticion = ".Modelo = '"+modelo+"'";

        datos= {
            "peticion":peticion,
            IdCliente: $('#cliente').val()

        };

        if($('#cliente').val() != "")
        {

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
                        $('#MesInicioSubProducto').val(resp[0].MesInicio);
                        $('#PeriodoSubProducto').val(resp[0].IdPeriodo);
                        $('#ActualizarEquipo').show();
                    }else
                    {
                        //$('#ModalEquipo').modal('show');
                        swal({
                            title: "Equipo no encontrado",
                            icon: "error",
                        });
                        //alert("Equipo no encontrado");
                    }
                }
            });
        }else{
            swal({
                title: "Seleccione un cliente",
                icon: "info",
            });
        }
            //alert("Seleccione un cliente");
    });

    $('#btnAgregarEquipo').click(function(){
        var opcion = $('#cliente option:selected').text();
        var c = "Cliente: " + opcion;
        $('#ClienteSelect').html(c);
        $('#ModalEquipo').modal('show');
    });

    $("#AgregarModalEquipo").click(function()
    {

        $(this).show();
        $('#ActualizarModalAgregar').hide();


        datos= {
            IdCliente: $('#cliente').val(),
            ClaveId: $('#ClaveModalProducto').val(),
            NumService: $("#NumSerieModalProducto").val(),
            Modelo: $("#ModeloModalProducto").val(),
            Descripcion: $('#DescripcionModalProducto').val(),
            Marca: $("#MarcaModalProducto").val(),
            AlcanceMedicion: $("#AlcanceModalProducto").val(),
            DivisionMedicion: $('#DivisionModalProducto').val(),
            Periodo: $('#PeriodoModal').val(),
            MesInicio: $('#MesInicioModal').val()
        };

        if( $('#ClaveModalProducto').val() != "" || $("#NumSerieModalProducto").val() != "" || $("#ModeloModalProducto").val() != "")
        {
            if($('#DescripcionModalProducto').val() != "" && $("#MarcaModalProducto").val() != "" &&
            $("#AlcanceModalProducto").val() != "" && $('#DivisionModalProducto').val() != "")
            {
                cerrar();
                $.ajax
                ({
                    type:'post',
                    url:'<?php echo site_url();?>/Servicio_Controller/InsertarEquipo',
                    dataType: 'json',
                    data:datos,
                    success:function(resp)
                    {
                        $('#IdSubProducto').val(resp[0].IdEquipo);
                        $("#NumSerieSubProducto").val(resp[0].NumService);
                        $('#ClaveSubProducto').val(resp[0].ClaveId);
                        $("#ModeloSubProducto").val(resp[0].Modelo);
                        $('#DescripcionSubProducto').val(resp[0].Descripcion);
                        $("#MarcaSubProducto").val(resp[0].Marca);
                        $("#AlcanceSubProducto").val(resp[0].AlcanceMedicion);
                        $('#DivisionSubProducto').val(resp[0].DivisionMedicion);
                    }
                });
                LimpiarModal();
            }  else{
                
                swal({
                    title: "Complete todo los campos",
                    icon: "info",
                });
                //alert("Complete todo los campos");
            }
        }else{
            swal({
                title: "Complete todo los campos",
                icon: "info",
            });
            //alert("Complete todo los campos");
        }
    });

    $("#CancelarModalEquipo").click(function()
    {
        cerrar();
    });

    function cerrar()
    {
        $('#ModalEquipo').modal('hide');
        LimpiarModal();
    }

    $("#cliente").change(function()
    {
        if($('#cliente option:selected').text() != "Seleccione un cliente")
            $("#btnAgregarEquipo").attr("disabled", false);
        else
            $("#btnAgregarEquipo").attr("disabled", true);
        CargarDatosClientes($(this).val());
    });

    $("#btnAgregarSubProducto").click(function()
    {
        CargarTabla();
    });

    $('#ActualizarEquipo').click(function()
    {
        Actualizar();
    });

    $('#GuardarEntrada').click(function()
    {
        valorOrden();
    });

    $('#CancelarEntrada').click(function()
    {
        Limpiar();
        Limpiar2();
    });

    function valorOrden()
    {
        var select = document.getElementById("cliente");
        var cliente = select.value;
        var fecha =$("#FechaReciboIntec").val();
        var FechaEnvio =$("#FechaEnvioLaboratorio").val();
        var FechaRecibo =$("#FechaReciboLaboratorio").val();
        var Observaciones =$("#ObservacionesServicio").val();
        var TotalEquipos = $("#tabla tr").length;
        var service = document.getElementById("servicioMC");
        var servicioMC = service.value;

        datos = {"cliente":cliente,"fecha":fecha,"FechaEnvio":FechaEnvio,"FechaRecibo":FechaRecibo,"Observaciones":Observaciones,"servicioMC":servicioMC};

        if(cliente != "")
        {

          if (TotalEquipos>0)
          {

            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/InsertarOrdenServicio_ajax',
                data:datos,
                success:function(resp)
                {
                    var id = resp;
                    valorFila(id);
                }
            });

          }
          else {
            swal({
                title: "No ha seleccionado un equipo",
                icon: "info",
            });
            //alert("No ha seleccionado un equipo");
          }


        }else{
            swal({
                title: "Selecione un cliente",
                icon: "info",
            });
            //alert("Selecione un cliente");
        }
    }

    function valorFila(idOrden)
    {
        $('#tabla tr').each(function() {
            var id = $(this).find(".id").text();

            datos = {"idequipo":id,"idOrden":idOrden};
            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Servicio_Controller/InsertarOrdenEquipo_ajax',
                data:datos,
                success:function(resp)
                {

                }
            });
        });
        removerTabla();

        PDF(idOrden);
        Limpiar();
        Limpiar2();
    }

    $(function()
    {
        $(document).on( 'click', '#btnEliminarSubProducto' ,remover);

        $(document).on( 'click', '#btnEditarSubProducto' ,removerEditar);
    });

    function removerTabla()
    {
        $("#tabla tr").remove();
    }

    function PDF(idOrden)
    {
        swal({
            title: "La orden de servicio ha sido creada",
            icon: "success",
        });
        //alert("La orden de servicio ha sido creada");
        window.open("<?php echo site_url();?>/Servicio/NuevaOrdenPDF/"+idOrden);
    }

    function remover()
    {
        $(this).parents("tr").remove();
    }
    function removerEditar()
    {
        var id = $(this).parents("tr").find("td:eq(0)").html();
        editar(id);
        $(this).parents("tr").remove();
        $('#ActualizarEquipo').show();
    }

    function CargarTabla()
    {

        $('#ActualizarEquipo').hide();
        var id =$('#IdSubProducto').val();
        var clave = $('#ClaveSubProducto').val();
        var numser = $("#NumSerieSubProducto").val();
        var modelo = $("#ModeloSubProducto").val();
        var descripcion = $('#DescripcionSubProducto').val();
        var marca = $("#MarcaSubProducto").val();
        var alcance = $("#AlcanceSubProducto").val();
        var division = $('#DivisionSubProducto').val();
        var Mes = $("#MesInicioSubProducto").val();
        var Periodo = $('#PeriodoSubProducto').val();

        if(id != "")
        {
            $("#tabla").append(
                '<tr>'+
                '<td class="id">'+id+'</td>'+
                '<td class="descripcion">'+descripcion+'</td>'+
                '<td class="marca">'+marca+'</td>'+
                '<td class="modelo">'+modelo+'</td>'+
                '<td class="numser">'+numser+'</td>'+
                '<td class="clave">'+clave+'</td>'+
                '<td class="alcance">'+alcance+'</td>'+
                '<td class="division">'+division+'</td>'+
                '<td class="mes">'+Mes+'</td>'+
                '<td class="periodo">'+Periodo+'</td>'+
                '<td><button type="button" class="btn btn-primary" id="btnEliminarSubProducto">Eliminar</button><!--<br><button type="button" onclick="editar('+id+')" class="btn btn-primary" id="btnEditaSubProducto">Editar</td>-->'+
                '<td><button type="button" class="btn btn-primary" id="btnEditarSubProducto">Editar</button><td>'+
                '</tr>'
            );
        }else{
            swal({
                title: "No se encontro el equipo",
                icon: "error",
            });
            //alert("No se encontro el equipo");
        }

        Limpiar();


    }

    function editar(idEquipo)
    {
        datos = {"idEquipo":idEquipo};
        $.ajax
        ({
            type:'post',
            url:'<?php echo site_url();?>/Servicio_Controller/ConsultarIdEquipos',
            dataType: 'json',
            data:datos,
            success:function(resp)
            {
                $('#IdSubProducto').val(resp[0].IdEquipo);
                $("#NumSerieSubProducto").val(resp[0].NumService);
                $('#ClaveSubProducto').val(resp[0].ClaveId);
                $("#ModeloSubProducto").val(resp[0].Modelo);
                $('#DescripcionSubProducto').val(resp[0].Descripcion);
                $("#MarcaSubProducto").val(resp[0].Marca);
                $("#AlcanceSubProducto").val(resp[0].AlcanceMedicion);
                $('#DivisionSubProducto').val(resp[0].DivisionMedicion);
            }
        });
    }

    function Actualizar()
    {
        datos= {
            IdEquipo:$('#IdSubProducto').val(),
            ClaveId: $('#ClaveSubProducto').val(),
            NumService: $("#NumSerieSubProducto").val(),
            Modelo: $("#ModeloSubProducto").val(),
            Descripcion: $('#DescripcionSubProducto').val(),
            Marca: $("#MarcaSubProducto").val(),
            AlcanceMedicion: $("#AlcanceSubProducto").val(),
            DivisionMedicion: $('#DivisionSubProducto').val(),
            Periodo: $('#PeriodoSubProducto').val(),
            MesInicio: $('#MesInicioSubProducto').val()
        };

        if( $('#ClaveSubProducto').val() != "" || $("#NumSerieSubProducto").val() != "" || $("#ModeloSubProducto").val() != "")
        {
            if($('#DescripcionSubProducto').val() != "" && $("#MarcaSubProducto").val() != "" &&
            $("#AlcanceSubProducto").val() != "" && $('#DivisionSubProducto').val() != "")
            {

                $.ajax
                ({
                    type:'post',
                    url:'<?php echo site_url();?>/Servicio_Controller/ActualizarEquipoPorId',
                    dataType: 'json',
                    data:datos,
                    success:function(resp)
                    {
                        swal({
                            title: "Equipo Actualizado",
                            icon: "success",
                        });
                        //alert("Equipo Actualizado");
                    }
                });
                LimpiarModal();
            }  else{
                swal({
                    title: "Complete todo los campos",
                    icon: "info",
                });
                //alert("Complete todo los campos");
            }
        }else{
            swal({
                title: "Complete todo los campos",
                icon: "info",
            });
            //alert("Complete todo los campos");
        }
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

    function Limpiar2()
    {
        $('#NombreProveedor').val("");
        $("#DireccionCliente").val("");
        $("#compania").val("");
        $("#emailProveedor").val("");
        $("#FechaEnvioLaboratorio").val("");
        $("#FechaReciboLaboratorio").val("");
        $("#ObservacionesServicio").val("");
        removerTabla();
    }

    function LimpiarModal()
    {
        $('#ClaveModalProducto').val("");
        $("#NumSerieModalProducto").val("");
        $("#ModeloModalProducto").val("");
        $('#DescripcionModalProducto').val("");
        $("#MarcaModalProducto").val("");
        $("#AlcanceModalProducto").val("");
        $('#DivisionModalProducto').val("");

        $('#AgregarModalEquipo').show();
        $('#ActualizarModalAgregar').hide();
    }

</script>
