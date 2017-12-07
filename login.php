<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<?php
   
/*
 * Ventana de inicio del portal
 */               
         


require_once ("common.inc.php");
//require_once ('Usuario.class.php');
session_start();

if (isset ($_POST["enviapass"])) {

    
    
      $username= preg_replace("/[^ \-\_a-zA-Z0-9]/","", $_POST["usuario"]);
      $passusaurio= preg_replace("/[^ \-\_a-zA-Z0-9]/","", $_POST["password"]);

         
      $loginusuario=Usuario::autentificar($username,$passusaurio);
      
   try {
     if (isset($loginusuario))    {
       
          $_SESSION['usuario']=$loginusuario;
           echo '<script>document.location = "buscar_usuario.php"</script>';

     }   else {
         $_SESSION['usuario']="";
        echo '<script>document.location = "login.php"</script>';

     }
   } catch (Exception $e) {
        $_SESSION['usuario']="";
         echo '<script>document.location = "login.php"</script>';

   }

}

 // asignaEncabezado();

    ?>






<htm>
    
    <head>
      
    <meta charset="utf-8">
    <title>Control de Material Fungible</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    

    <script src="js/bootstrap.min.js"></script>
    </head>    
    
    <body>  


     <div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form role="form" name="login" action="login.php" method="POST">
            
            <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="usuario"><span class="text-danger" style="margin-right:5px;">*</span>Usuario:</label>
                        <div class="input-group">
                            <input class="form-control" id="usuario" type="text" name="usuario" placeholder="usuario" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Content Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Contrase&ntilde;a:</label>
                        <div class="input-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="contrase&ntilde;a" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                         <input class="btn btn-primary" type="submit" name="enviapass" value="Enviar" />
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
            
        </div>
    </div>
</div>   
        
        
    </body>   
</htm>
