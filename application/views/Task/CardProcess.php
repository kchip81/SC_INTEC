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
                    <h4 class="card-title" id="basic-layout-form">Cronometro</h4>
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
                        
                          <div class="conteudo">

                            <center>
                              <div class="cronometro">
                                <span id="horas">00</span> :
                                <span id="minutos">00</span> :
                                <span id="segundos">00</span> :
                                <span id="milissegundos">00</span>
                              </div>
                              <br>
                              <button id="botao-iniciar" type="submit">Iniciar</button>
                              <button id="botao-parar" type="submit">Detener</button>
                              <button id="registro"  type="submit">Registrar</button>
                              <button id="botao-apagar" type="submit">Finalizar</button>
                            </center>

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
                    <h4 class="card-title" id="basic-layout-form">Registro</h4>
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


button{
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


button:hover{
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

 // após a página ser carregada 
 window.onload = function() {
  FechaActual();
  digiClock();
  digiClockFinal();
  //setInterval('digiClock()', 1000);
  setInterval('digiClockFinal()', 1000);  

  var inicio = false;

  // declarar variável horas e atribuir ligação ao tempo definido em html 
  var horas = 00; 

  // declarar variável minutos e atribuir ligação ao tempo definido em html       
  var minutos = 00;

  // declarar variável segundos e atribuir ligação ao tempo definido em html
  var segundos = 00; 

  // declarar variável milissegundos e atribuir ligação ao tempo defindo em html
  var milissegundos = 00;   


  // declarar variável para anexar horas e atribuir ligação ao elemento id definido em html 
  var anexarHoras = document.getElementById("horas");

  // declarar variável para anexar minutos e atribuir ligação ao elemento id definido em html 
  var anexarMinutos = document.getElementById("minutos");

  // declarar variável para anexar segundos e atribuir ligação ao elemento id definido em html 
  var anexarSegundos = document.getElementById("segundos");

  // declarar variável para anexar milissegundos e atribuir ligação ao elemento id defindo em html 
  var anexarMilissegundos = document.getElementById("milissegundos");


  // declarar variável para iniciar contagem e atrbuir ligação ao elemento id definido em html
  var botaoIniciar = document.getElementById('botao-iniciar'); 

  // declarar variável para parar contagem e atribuir ligação ao elemento id definido em html 
  var botaoParar = document.getElementById('botao-parar');

  // declarar variável para apagar contagem e atribuir ligação ao elemento id definido em html 
  var botaoApagar = document.getElementById('botao-apagar');

  // declarar variável para determinar a duração da contagem 
  var intervalo;


  var btnregistro = document.getElementById('registro');


  var inicioConteoFecha = "";
  var inicioConteoHora = "";
  // após se clicar no botão iniciar
  botaoIniciar.onclick = function() {         

    inicio = true;

    // atribuir ligação entre a duração da contagem e o intervalo em milissegundos. 1 segundo é igual a 1000 milissegundos 
    intervalo = setInterval(duracaoContagem, 10);
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

  // limpar o intervalo definido em setInterval  
    clearInterval(intervalo);


  btnregistro.onclick = function() {

    if(inicio){
      inicio = false
      let tiempo = document.getElementById("horas").innerHTML + ':' + document.getElementById("minutos").innerHTML + ':' +  document.getElementById("segundos").innerHTML + ':' + document.getElementById("milissegundos").innerHTML;
  
  
      $("#tabla").append(
        '<tr>'+
        '<td>'+inicioConteoFecha+'</td>'+
        '<td>'+inicioConteoHora+'</td>'+
        '<td>'+tiempo+'</td>'+
        '</tr>'
      );
      clearInterval(intervalo);

      // atribuir ligação entre horas e o tempo definido em html 
      horas = "00"; 

      // atribuir ligação entre minutos e o tempo definido em html  
      minutos = "00";

      // atribuir ligação entre segundos e o tempo definido em html
      segundos = "00";

      // atribuir ligação entre milissegundos e o tempo definido em html  
      milissegundos = "00";


      // aparecer no ecrã horas, minutos, segundos e milissegundos a zero   
      anexarHoras.innerHTML = horas; 
      anexarMinutos.innerHTML = minutos; 
      anexarSegundos.innerHTML = segundos; 
      anexarMilissegundos.innerHTML = milissegundos;
    }

  }

  function registro(){
    if(inicio){
      inicio = false;
      if(inicioConteoHora != ""){
        let tiempo = document.getElementById("horas").innerHTML + ':' + document.getElementById("minutos").innerHTML + ':' +  document.getElementById("segundos").innerHTML + ':' + document.getElementById("milissegundos").innerHTML;
    
    
        $("#tabla").append(
          '<tr>'+
          '<td>'+inicioConteoFecha+'</td>'+
          '<td>'+inicioConteoHora+'</td>'+
          '<td>'+tiempo+'</td>'+
          '</tr>'
        );
      }
    }
  }



  // após se clicar no botão parar 
  botaoParar.onclick = function() {
    registro();
    // limpar intervalo 
    clearInterval(intervalo);
  }



  // após se clicar no botão apagar   
  botaoApagar.onclick = function() {
    registro();
    // limpar intervalo 
    clearInterval(intervalo);

    // atribuir ligação entre horas e o tempo definido em html 
    horas = "00"; 

    // atribuir ligação entre minutos e o tempo definido em html  
    minutos = "00";

    // atribuir ligação entre segundos e o tempo definido em html
    segundos = "00";

    // atribuir ligação entre milissegundos e o tempo definido em html  
    milissegundos = "00";
  

    // aparecer no ecrã horas, minutos, segundos e milissegundos a zero   
    anexarHoras.innerHTML = horas; 
    anexarMinutos.innerHTML = minutos; 
    anexarSegundos.innerHTML = segundos; 
    anexarMilissegundos.innerHTML = milissegundos;
  }



  // definir como vai ser a contagem   
  function duracaoContagem() {
  
  // começar contagem dos milissegundos
  milissegundos++; 

    // se for menor que 9 colocar um 0
    if(milissegundos < 9){
      anexarMilissegundos.innerHTML = "0" + milissegundos;
    }
  
    if (milissegundos > 9){
      anexarMilissegundos.innerHTML = milissegundos;      
    } 
  

    // começar contagem dos segundos 
    // se os milissegundos forem superiores a 99  
    if (milissegundos > 99) {

      // aparece no ecrã os segundos 
        console.log("segundos");
        
        segundos++;           
        anexarSegundos.innerHTML = "0" + segundos;
        milissegundos = 0;
        anexarMilissegundos.innerHTML = "0" + 0;
      }

  
    if (segundos > 9){
      anexarSegundos.innerHTML = segundos;
    }

    // começar contagem dos minutos 
    // se os segundos forem superiores a 59
    if (segundos > 59){
      
      // aparece no ecrã os minutos
      console.log("minutos"); 
      minutos++; 
      anexarMinutos.innerHTML = "0" + minutos; 
      segundos = 0; 
      anexarSegundos.innerHTML = "0" + 0; 
    }


    if (minutos > 9){
      anexarMinutos.innerHTML = minutos;
    }

    // começar contagem das horas 
    // se os minutos forem superiores a 59
    if (minutos > 59){

      // aparece no ecrã as horas 
      console.log("horas"); 
      horas++; 
      anexarHoras.innerHTML = "0" + horas; 
      minutos = 0; 
      anexarMinutos.innerHTML = "0" + 0; 
    }


    if (horas > 9){
      anexarHoras.innerHTML = horas;
    }


  }


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

</script>
