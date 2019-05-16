<div class="app-content content container-fluid">
      <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
              <h4 class="content-header-title"><?php echo $title;?></h4>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
              <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                  <li class="breadcrumb-item active"><?php echo $title;?></li>
                </ol>
              </div>
            </div>
         </div>
        <div class="content-body">
<?php
        if (isset($errorMessage)) {
            echo "<div class='alert alert-danger mb-2' role='alert'>";
            echo $errorMessage;
            echo "</div>";
        }
        if (isset($infoMessage)) {
            echo "<div class='alert alert-info mb-2' role='alert'>";
            echo $infoMessage;
            echo "</div>";
        }
        log_message('debug','*->Header->SESSION->USERDATA:'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_NombreUsuario')); 
        if (!$this->session->has_userdata('intec_logged_in'))
            {
                log_message('debug','*->NO SESSION->USERDATA:'.$this->session->userdata('intec_logged_in').'|'.$this->session->userdata('intec_IdUsuario').'|'.$this->session->userdata('intec_NombreUsuario')); 
                //redirect(base_url());
            }
            
    ?>
