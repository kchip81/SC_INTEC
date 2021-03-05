<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <!--CARD HEADER-->
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Nueva actividad</h4>
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

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="Equipos">Equipos</label>
                            <select name="equipos" id="Equiposselect" class="form-control" onchange="">
                                <option value="">Equipos...</option>

                            </select>
                            
                        </div>
                      </div>
                    </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="FechaInicio">Fecha de Inicio:</label>
                            <div class="position-relative has-icon-left">
                                <input type="date" id="FechaInicio" class="form-control" name="FechaInicio"/>
                                <div class="form-control-position">
                                        <i class="icon-calendar5"></i>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="HoraInicio">Hora de Inicio:</label>
                            <div class="position-relative has-icon-left">
                                <input type="time" id="HoraInicio" class="HoraInicio form-control" name="HoraInicio"/>
                                <div class="form-control-position">
                                        <i class="icon-clock"></i>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="FechaFinal">Fecha Final:</label>
                            <div class="position-relative has-icon-left">
                                <input type="date" id="FechaFin" class="form-control" name="FechaFin"/>
                                <div class="form-control-position">
                                        <i class="icon-calendar5"></i>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="Horafina">Hora Final:</label>
                            <div class="position-relative has-icon-left">
                                <input type="time" id="Horafinal" class="form-control" name="Horafinal"/>
                                <div class="form-control-position">
                                        <i class="icon-clock"></i>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="Observaciones">Observaciones:</label>
                            <textarea class="form-control" id="Observaciones" rows="3"></textarea>
                          </div>

                        </div>
                      </div> 
                      <br>  
                      <hr>
                      <div class="conteudo">

                        <center>
                          <div class="cronometro">
                          <div id="screen">00 : 00 : 00 : 00</div>
                          </div>
                          <br>
                          <button class="tiempo" id="botao-iniciar"  onclick="start()" type="submit">Iniciar</button>
                          <button class="tiempo" id="botao-parar" onclick="stop()" type="submit">Detener</button>
                          <!--<button class="tiempo" id="registro" onclick="resume()"  type="submit">Continuar</button>
                          -->
                          <button class="tiempo" id="botao-apagar" onclick="reset()" type="submit">Finalizar</button>
                        </center>

                      </div>

                      <hr>
                      <br>
                      <table class="table table-responsive table-bordered table-striped">
                        <thead>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Tiempo</th>
                        </thead>
                        <tbody id="tabla">

                        </tbody>
                      </table>  

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="insumos">Refacciones e insumos utilizados:</label>
                            <textarea class="form-control" id="insumos" rows="3"></textarea>
                          </div>

                        </div>
                      </div>

                      <hr><br>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-warning " id="CancelarEntrada" name="action" value="cancelar">
                            <i class="icon-cross2"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary " id="GuardarEntrada" name="action" value='GuardarEntrada'>
                            <i class="icon-check2"></i>Guardar
                        </button>
                      </div>

                                                                                                
                  </div> 
              </div>
          </div>


        </div>
    </div>
</div>



<style>

/* google fonts */
@import url('https://fonts.googleapis.com/css?family=Muli');


/* desktop */
body{
  width: 100%; 
  height: 100%; 
  margin: 0;
  background: #FFF; 
  font-family: 'Muli', sans-serif;
}


h1{
  font-size: 36px; 
  color: #B0E7C6;
  text-transform: uppercase;
  text-align: center;
  line-height: 60px; 
  letter-spacing: 7px;  
  font-weight: bold;
}


.tiempo{
  width: 150px; 
  height: 55px; 
  background: #FFF; 
  color: #B0E7C6;
  text-transform: uppercase;
  border: 2px solid #B0E7C6;
  cursor: pointer;
  font-size: 16px; 
  letter-spacing: 3px;
  margin-right: 7px; 
  margin-left: 7px; 
  font-weight: bold;
  margin-bottom: 30px; 
}


.tiempo:hover{
  color: #FFF;
  background: #B0E7C6; 
}


.conteudo{
  padding-top: 50px;  
  padding-bottom: 30px;  
}


.cronometro{
  margin-top: 50px; 
  color: #262626;  
  font-size: 30px;  
  margin-bottom: 40px;  
  letter-spacing: 2px; 
}


::selection{
  color: #FFF; 
  background: #B0E7C6; 
}



/* mobile */
@media screen and (max-width: 700px){
  .conteudo{padding-top: 40px; margin-left: 40px; margin-right: 40px;}
}


</style>

<script>

 window.onload = function() {
  FechaActual();
  digiClock();
  digiClockFinal();
  dataServicio();
  pantalla = document.getElementById("screen");
  setInterval('digiClockFinal()', 1000);  
 }
  var inicioConteoFecha = "";
  var inicioConteoHora = "";
  var isMarch = false; 
  var acumularTime = 0; 
  function start () {
    if (isMarch == false) { 
      timeInicial = new Date();
      control = setInterval(cronometro,10);
      isMarch = true;
      var f = new Date();
      var mes = f.getMonth()+1;
      var dia = f.getDate();
      var ano = f.getFullYear();
      h = f.getHours(),
      m = f.getMinutes();
      s = f.getSeconds();
      if(h < 10) h = '0' + h; 
      if(m < 10) m = '0' + m; 

      if(dia<10)
          dia='0'+dia;
      if(mes<10)
          mes='0'+mes

      inicioConteoFecha = ano+"-"+mes+"-"+dia;
      inicioConteoHora = h + ':' + m + ':' + s;
    }
  }
  function cronometro () { 
    timeActual = new Date();
    acumularTime = timeActual - timeInicial;
    acumularTime2 = new Date();
    acumularTime2.setTime(acumularTime); 
    cc = Math.round(acumularTime2.getMilliseconds()/10);
    ss = acumularTime2.getSeconds();
    mm = acumularTime2.getMinutes();
    hh = acumularTime2.getHours()-18;
    if (cc < 10) {cc = "0"+cc;}
    if (ss < 10) {ss = "0"+ss;} 
    if (mm < 10) {mm = "0"+mm;}
    if (hh < 10) {hh = "0"+hh;}
    pantalla.innerHTML = hh+" : "+mm+" : "+ss+" : "+cc;
  }

  function stop () { 
    if (isMarch == true) {
      clearInterval(control);
      isMarch = false;
      let tiempo = document.getElementById("screen").innerHTML;
  
  
      $("#tabla").append(
        '<tr>'+
        '<td class="inicioConteoFecha">'+inicioConteoFecha+'</td>'+
        '<td class="inicioConteoHora">'+inicioConteoHora+'</td>'+
        '<td class="tiempo">'+tiempo+'</td>'+
        '</tr>'
      );
      
    }     
  }      

  function resume () {
    if (isMarch == false) {
      timeActu2 = new Date();
      timeActu2 = timeActu2.getTime();
      acumularResume = timeActu2-acumularTime;
      
      timeInicial.setTime(acumularResume);
      control = setInterval(cronometro,10);
      isMarch = true;
      let tiempo = document.getElementById("screen").innerHTML;
    }     
  }

  function reset () {
    if (isMarch == true) {
      clearInterval(control);
      isMarch = false;
      let tiempo = document.getElementById("screen").innerHTML;
      $("#tabla").append(
        '<tr>'+
        '<td class="inicioConteoFecha">'+inicioConteoFecha+'</td>'+
        '<td class="inicioConteoHora">'+inicioConteoHora+'</td>'+
        '<td class="tiempo">'+tiempo+'</td>'+
        '</tr>'
      );
    }
    $('#botao-iniciar').attr("disabled", true);
    $('#botao-parar').attr("disabled", true);
    acumularTime = 0;
    pantalla.innerHTML = "00 : 00 : 00 : 00";
  }

window.onbeforeunload = function (e) {
    var e = e || window.event;
    if (e) {
      return 'Estás por cerrar la página';
    }
}

function getFecha(){
  var f = new Date();
  var mes = f.getMonth()+1;
  var dia = f.getDate();
  var ano = f.getFullYear();
  h = f.getHours(),
  m = f.getMinutes();
  s = f.getSeconds();
  if(h < 10) h = '0' + h; 
  if(m < 10) m = '0' + m; 

  if(dia<10)
      dia='0'+dia;
  if(mes<10)
      mes='0'+mes

  let fecha = ano+"-"+mes+"-"+dia;
  let hora = h + ':' + m + ':' + s;
  //alert(hora);
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
        mes='0'+mes;

    document.getElementById('FechaInicio').value=ano+"-"+mes+"-"+dia;
    document.getElementById('FechaFin').value=ano+"-"+mes+"-"+dia;
}

function digiClock(){ 
  var d = new Date(),        
      h = d.getHours(),
      m = d.getMinutes();
  if(h < 10) h = '0' + h; 
  if(m < 10) m = '0' + m; 
  $('#HoraInicio').each(function(){ 
    $(this).attr({'value': h + ':' + m});
  });
}

function digiClockFinal(){ 
  var d = new Date(),        
      h = d.getHours(),
      m = d.getMinutes();
  if(h < 10) h = '0' + h; 
  if(m < 10) m = '0' + m; 
  $('#Horafinal').each(function(){ 
    $(this).attr({'value': h + ':' + m});
  });
}


function dataServicio(){


  datos = {"Id":<?php echo $this->uri->segment(3);?>};
    $.ajax
    ({
        type:'post',
        url:'<?php echo site_url();?>/Automatizacio_Controller/ConsultarDatosEquiposByServicio',
        data:datos,
        success:function(resp)
        {
            $("#Equiposselect").html(resp);
        },
        error:function(resp)
        {
            $("#Equiposselect").html(resp.responseText);
        }
    });
}

$('#CancelarEntrada').click(function()
{
    //Limpiar();
});

$('#GuardarEntrada').click(function()
{
    Guardar();
});

function Guardar(){

  let idEquipo = $("#Equiposselect option:selected").val();;
  let fecIni = $("#FechaInicio").val();
  let horaIni = $("#HoraInicio").val();
  let fecOut = $("#FechaFin").val();
  let horaOut = $("#Horafinal").val();
  let Observaciones = $("#Observaciones").val();
  let insumo = $("#insumos").val();

  data = {"idEquipo":idEquipo,"horaOut":horaOut,"fecIni":fecIni,"horaIni":horaIni,"fecOut":fecOut,
    "Observaciones":Observaciones,"insumo":insumo,"IdServicio":<?php echo $this->uri->segment(3);?>};
    if(idEquipo > 0){

      $.ajax
      ({
        type:'post',
        url:'<?php echo site_url();?>/Automatizacio_Controller/InsertarInformacion',
        data:data,
        success:function(resp)
        {
          $('#tabla tr').each(function() {
            var inicioConteoFecha = $(this).find(".inicioConteoFecha").text();
            var inicioConteoHora = $(this).find(".inicioConteoHora").text();
            var tiempo = $(this).find(".tiempo").text();
  
            //alert(tiempo);
            
            /*datos = {"inicioConteoFecha":inicioConteoFecha,"inicioConteoHora":inicioConteoHora,'tiposervicio':tiposervicio};
            $.ajax
            ({
                type:'post',
                url:'<?php echo site_url();?>/Automatizacio_Controller/InsertarInformacion',
                data:datos,
                success:function(resp)
                {
  
                }
            });*/
          });
        }
      });

    }else{
      swal({
          title: "No ha seleccionado un equipo",
          icon: "info",
      });
    }
}

</script>
