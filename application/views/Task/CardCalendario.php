<link rel="stylesheet" href="<?php echo base_url();?>app-assets/Calendario/evo-calendar/css/evo-calendar.css">
<link rel="stylesheet" href="<?php echo base_url();?>app-assets/Calendario/evo-calendar/css/evo-calendar.midnight-blue.css">

<div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <!--CARD HEADER-->
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Actividades a realizar</h4>
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
                        <ul class="list-inline text-xs-center">
                            <li class="mr-1">
                                <h6><i class="icon-circle" style="color: #99CCCC !important;"></i> <span>Orden creada</span></h6>
                            </li>
                            <li class="mr-1">
                                <h6><i class="icon-circle indigo"></i> <span>Paquete</span></h6>
                            </li>
                            <li class="mr-1">
                                <h6><i class="icon-circle indo"></i> <span>Equipo</span></h6>
                            </li>
                        </ul>

                        <div id="calendar"></div>

                            
                                                                                                            
                        </div> 
                    </div>
                </div>


            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url();?>app-assets/Calendario/evo-calendar/js/evo-calendar.js"></script>

<style>
a{
    /*font-size: 12px*/;
}
</style>

<script>
$(document).ready(function()
{

    var Events = [];
    $.ajax
    ({
        type:'post',
        url:'<?php echo site_url();?>/Calendario_Controller/ConsutarFechasOrdenes',
        success:function(resp)
        {
            let fechas = JSON.parse(resp);
            for(let i = 0; i < fechas.length; i++){
                
                let urls = '<?php echo site_url();?>/Servicio/ConsultarDetalleServicio/'+ fechas[i].IdOrden;
                let id = 0+fechas[i].IdOrden;
                let name = "N. Orden: " + fechas[i].IdOrden; 
                let description = fechas[i].ObservacionesOrden;
                let date = fechas[i].FechaOrden;
                let color = "#99CCCC";
                asignarFecha(id,name,date,color,description,urls);
            }
        }
    });


    $.ajax
    ({
        type:'post',
        url:'<?php echo site_url();?>/Calendario_Controller/ConsultarFechaPaquetes',
        success:function(resp)
        {

            let fechas = JSON.parse(resp);
            for(let i = 0; i < fechas.length; i++){
                
                let urls = '<?php echo site_url();?>/Paquete/ConsultarDetalle/'+ fechas[i].IdPaqueteEnvio;

                let id = '00'+fechas[i].IdPaqueteEnvio;
                let name = "N. Paquete: " + fechas[i].IdPaqueteEnvio;
                let description = fechas[i].Descripcion;
                let date = fechas[i].FechaEnv;
                let color = "#3F51B5";
                asignarFecha(id,name,date,color,description,urls);

            }
        }
    });
    

    $('#calendar').evoCalendar({
        language:'es',
        format:'yyyy/mm/dd',
        eventHeaderFormat:'d MM, yyyy',
        todayHighlight:true,
        sidebarDisplayDefault: false,
        theme: 'Midnight Blue'
    }) ;    
});



function asignarFecha(idC,nameC,dateC,colorC,descriptionC,urlC){
    $("#calendar").evoCalendar('addCalendarEvent', [
    {
      id: idC,
      name: nameC,
      description: '<a href="'+urlC+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">'
  +'<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>'
+'</svg></a><a href="'+urlC+'">  '+descriptionC+'</a>',
      date: dateC,
      color: colorC,
      type: "event",
    }]);
}
</script>