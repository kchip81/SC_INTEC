<?php
$Perfil = $this->session->userdata('intec_IdPerfil');
if($Perfil == 1 || $Perfil == 2){
    echo '<div onclick="location.href='.site_url('Servicio/ConsultarEquipoDemora').'" class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="red"><label id="TotaEquipoDemora"></label></h3>
                            <span>Total de Equipos con demora en laboratorio</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-calendar red font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
?>

<script type="text/javascript">
$(document).ready(function(){
    
    $.ajax({
        url:"<?php echo site_url();?>/Dashboard_Controller/ConsultarTotalEquipoDemora",

        method:"POST",
        success: function(data)
        {
            var Total = JSON.parse(data);
            
            $('#TotaEquipoDemora').html(Total.retardo);
        }
      });


    });

</script>