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
                
                let urls = '<?php echo site_url();?>'+'/index.php/Servicio/ConsultarDetalleServicio/'+ fechas[i].IdOrden;
                let id = 0+fechas[i].IdOrden;
                let name = "<a href='"+urls+"'>N. " + fechas[i].IdOrden+ " </a>"; 
                let description = fechas[i].ObservacionesOrden;
                let date = fechas[i].FechaOrden;
                let color = "#99CCCC";
                asignarFecha(id,name,date,color,description);
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
                
                let urls = '<?php echo site_url();?>'+'/index.php/Paquete/ConsultarDetalle/'+ fechas[i].IdPaqueteEnvio;

                let id = '00'+fechas[i].IdPaqueteEnvio;
                let name = "<a href='"+urls+"'> N. " + fechas[i].IdPaqueteEnvio+" </a>"
                let description = fechas[i].Descripcion;
                let date = fechas[i].FechaEnv;
                let color = "#3F51B5";
                asignarFecha(id,name,date,color,description);

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



function asignarFecha(idC,nameC,dateC,colorC,descriptionC){
    $("#calendar").evoCalendar('addCalendarEvent', [
    {
      id: idC,
      name: nameC,
      description: descriptionC,
      date: dateC,
      color: colorC,
      type: "event",
    }]);
}
</script>