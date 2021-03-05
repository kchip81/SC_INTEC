<?php
$Perfil = $this->session->userdata('intec_IdPerfil');
if($Perfil == 1 || $Perfil == 2){
    echo '<div class="col-xl-6 col-lg-6 col-xs-12">
    <a>
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                        <h3 class="red"><label id="TotaCalibración"></label> - <label id="TotaMantenimiento"></label></h3>
                        <span>Equipos en Calibración y Mantenimiento</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fas fa-tools red font-large-2 float-xs-right"></i>
                        </div><br> 
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>';
}
?>

<script type="text/javascript">
$(document).ready(function(){
    
    $.ajax({
        url:"<?php echo site_url();?>/Dashboard_Controller/ConsultarTotalCalibra",

        method:"POST",
        success: function(data)
        {
            var Total = JSON.parse(data);

            $('#TotaCalibración').html('Calibración ' + Total.total);
        }
    });


    $.ajax({
        url:"<?php echo site_url();?>/Dashboard_Controller/ConsultarTotalMant",

        method:"POST",
        success: function(data)
        {
            var TotalMant = JSON.parse(data);
        
            $('#TotaMantenimiento').html('Mantenimiento ' + TotalMant.total);
        }
    });


});

</script>