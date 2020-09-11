<div class="row match-height">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-form">Perfil</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>

                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Nombre">Nombre:</label>
                            <div class="position-relative">
                                <input type="text" id="Nombre" class="form-control" placeholder="Nombre" name="Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ApellidosUsuario">Apellidos:</label>
                            <div class="position-relative">
                                <input type="text" id="ApellidosUsuario" class="form-control" placeholder="Apellidos" name="ApellidosUsuario">
                            </div>
                        </div>
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" id="contrasena" class="form-control" placeholder="Contraseña" name="Contraseña">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="card-footer">
                <button type="button" onclick="actualizar()" class="btn btn-primary">Guardar</button>
            </div>          
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card border-white text-white bg-dark">
                    <div class="card-header">
                        
                    </div>  
                    <div class="card-body">
                    <?php 
                                              
                        if(is_dir('./FotoUsuario/'.$this->session->userdata('intec_IdUsuario').'/'))
                            $fotoPerfil=base_url().'FotoUsuario/'.$this->session->userdata('intec_IdUsuario').'/'.$this->session->userdata('intec_IdUsuario').'.png';
                        else 
                            $fotoPerfil= base_url().'FotoUsuario/default-avatar.png';
        
                    ?>
                        <img src="<?php echo $fotoPerfil?>"
                        class="mx-auto d-block img-raised rounded-circle img-fluid" id="img"  height="140" width="140" style="margin:10px" alt="Circle Image">
                        <hr>
                        <div class="button-wrapper">
                            <span class="label">
                                Agregar Foto
                            </span>
                            
                            <input type="file" name="upload" id="upload" accept="image/*"
                             class="upload-box" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0]); $('#guardarFoto').show();"  placeholder="Upload File">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" id="guardarFoto" onclick="upload()"class="btn btn-primary guardarFoto">Guardar Foto</button>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>

<style>

.button-wrapper {
  position: relative;
  width: 150px;
  text-align: center;
  margin: 10px auto;
}

.button-wrapper span.label {
  position: relative;
  z-index: 0;
  display: inline-block;
  width: 100%;
  background: #00bfff;
  cursor: pointer;
  color: #fff;
  padding: 10px 0;
  text-transform:uppercase;
  font-size:12px;
}

#upload {
    display: inline-block;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}

</style>

<script>

    $(document).ready(function()
    {
        $('#guardarFoto').hide();
        cargarUsuario();
    });

    function upload(){
        var formData = new FormData();
        var files = $('#upload')[0].files[0];
        formData.append('file',files);
        formData.append('idUsuario',<?php echo $Perfil = $this->session->userdata('intec_IdUsuario');?>);
        $.ajax({
            url: '<?=site_url()?>/Login_Controller/do_upload',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    swal({
                        title: response,
                        icon: "success",
                    });
                } else {
                    swal({
                        title: 'Error al subir la imagen',
                        icon: "error",
                    });
                }
            }
        });

    }

    function cargarUsuario(){
        datos = {"IdUsuario":<?php echo $Perfil = $this->session->userdata('intec_IdUsuario');?>};

        $.ajax
        ({            
            type:'post',
            url:'<?php echo site_url();?>/Registrar_Controller/ConsultarUsuarioId',
            dataType: 'json',
            data:datos, 
            success:function(resp)
            {
                $("#Nombre").val(resp.NombreUsuario);
                $("#ApellidosUsuario").val(resp.ApellidosUsuario);
            }
        });
    }

    function actualizar(){

        if($("#contrasena").val()==""){
            swal( {
                title: "Contraseña vacia",
                icon: "info",
            });
        }else{

            datos= {
                Nombre :$("#Nombre").val(),
                ApellidosUsuario :$("#ApellidosUsuario").val(),
                contrasena : $("#contrasena").val(),
                IdUsuario:<?php echo $Perfil = $this->session->userdata('intec_IdUsuario');?>
            }; 
            
            $.ajax
            ({            
                type:'post',
                url:'<?php echo site_url();?>/Registrar_Controller/ActualizarUsuarioPerfil',
                data:datos, 
                success:function(resp)
                {
                    swal( {
                        title: "Se modifico el usuario correctamente",
                        icon: "success",
                    });
                    
                    $("#contrasena").val("");
                    
                }
            });
        }
    }
</script> 


  