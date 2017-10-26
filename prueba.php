<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<htm>
    
    <head>
      
    <meta charset="utf-8">
    <title>Registro Salida</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    

    <script src="js/bootstrap.min.js"></script>
    </head>    
    
    <body>  


     <div class="container" style="margin-top: 5%;">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Datos Usuario</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form class="form-horizontal" role="form">
            
            <!-- Username Field -->
                
                <div class="form-group col-xs-12">
                    <label for="nuhsa" class="col-xs-1"><span style="margin-right:5px;">Nuhsa:</span></label>
                     <div class="col-xs-3">
                    <input class="form-control" id="usuario" type="text" name="nuhsa" placeholder="nuhsa"/>
                    </div> 
                    
                    <label for="nombre" class="col-xs-1"><span style="margin-right:5px;">Apellido1:</span></label>
                    <div class="col-xs-3">
                    <input class="form-control" id="nombre" type="text" name="nombre" placeholder=""/>
                    </div>   
                    
                    <label for="apellido" class="col-xs-1"><span style="margin-right:5px;">Apellido2:</span></label>
                    <div class="col-xs-3">
                    <input class="form-control" id="apellido" type="text" name="apellido"/>
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
                        <button class="btn btn-primary" type="submit">Aceptar</button>
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
            
        </div>
    </div>
</div>   
        
        
    </body>   
</htm>
