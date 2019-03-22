<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/all.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Login</title>
</head>
<body>
    <!-- Header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SiguéMED</a>
    </div>
       <?php 
                $FuncionesPerfil = $this->session->userdata('FuncionesPerfil');
                
                echo "<ul class='nav navbar-nav'>";
                if ($FuncionesPerfil)
                {
                    foreach ($FuncionesPerfil as $funcion)
                    {
                        
                        if ($funcion['IdMenuPadre']==NULL)
                        {
                            echo "<li class='dropdown' ><a class='dropdown-toggle' data-toggle='dropdown' href='#'>". $funcion['DescripcionMenu'].'</a>';
                            $ulFlag = false;
                            foreach($FuncionesPerfil as $SubFuncion)
                            {
                                if ($SubFuncion['IdMenuPadre']==$funcion['IdMenu'])
                                {
                                    if ($ulFlag == False)
                                    {
                                       echo "<ul class='dropdown-menu'>";
                                        $ulFlag=true;
                                    }

                                       
                                        echo "<li><a href='".site_url().'/'.$SubFuncion['UrlMenu']."'>". $SubFuncion['DescripcionMenu'].'</a></li>';


                                }
                                
                            }
                            if ($ulFlag==true)
                                {
                                     echo "</ul>";
                                     $ulFlag = false;
                                }
                            echo '</li>';
                        }
                    }
                    
                }
                else
                {
                    echo '<a class="navbar-brand" href="#">Tu perfil no tiene ningún permiso asignado.</a>';
                }
                
                echo "</ul>";
            ?>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('NombreUsuario'); ?></a></li>
    </ul>
  </div>
</nav>
</body>
</html> 