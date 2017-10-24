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
    <title>Bootstrap, from Twitter</title>
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
            <form role="form">
            
            <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Usuario:</label>
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
