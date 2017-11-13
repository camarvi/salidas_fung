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
    <script src="js/jquery-1.7.1.min.js"></script>
   
    
   <script type="text/javascript">        
      $('document').ready(function(){
       
         $("#buscar").click(function(){
             alert("DENTRO DE JQUERY");
             var nuhsa=$('#nuhsa').val();
             var ape1=$('#ape1').val();
             var ape2=$('#ape2').val();
            
             $.post("jbusca_usuario_1.php",{
                 nusha:nuhsa,
                 ape1:ape1,
                 ape2:ape2},
                function(data,estado){
                   if (estado="suces") { 
                       alert ('estado');
                   }   
                 
                });
       });
       
    });   
        
    </script>    
    
    
        
        
    <script type="text/javascript">        
      $('document').ready(function(){
       
         $("#modificar").click(function(){
               alert("DENTRO DE JQUERY");
             //  $('table tr:not(:first-child)').remove();
            // $("#tabla tbody tr").remove();
            //  var trs=$("#tabla tr").length;
            //    if(trs>1)
            //      {
            //    // Eliminamos la ultima columna
            //     $("#tabla tr:last").remove();
            //    } 
             var nuhsa=$('#nuhsa').val();
             var ape1=$('#ape1').val();
             var ape2=$('#ape2').val();
            
             $.post("jbusca_usuario_1.php",{
                 nusha:nuhsa,
                 ape1:ape1,
                 ape2:ape2},
                function(htmlexterno){
                //   alert (htmlexterno);
                
                //   $("#resultado").html('<tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr>'); // html(htmlexterno);
                 //  $("#tabla tr:last").after(htmlexterno);
                 $("#tabla tr:first").after(htmlexterno);
                });
       });
       
    });   
        
    </script>
  
    
    </head>    
    
    <body>  


    <div class="container" style="margin-top: 3%;">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Datos Usuario</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form class="form-horizontal" role="form" action="" method="POST">
            
            <!-- Username Field -->
                
                <div class="form-group col-xs-12">
                    <label for="nuhsa" class="col-xs-1"><span style="margin-right:5px;">Nuhsa:</span></label>
                     <div class="col-xs-3">
                    <input class="form-control" id="nuhsa" type="text" name="nuhsa" placeholder="nuhsa"/>
                    </div> 
                    
                    <label for="nombre" class="col-xs-1"><span style="margin-right:5px;">Apellido1:</span></label>
                    <div class="col-xs-3">
                    <input class="form-control" id="ape1" type="text" name="ape1" placeholder=""/>
                    </div>   
                    
                    <label for="apellido" class="col-xs-1"><span style="margin-right:5px;">Apellido2:</span></label>
                    <div class="col-xs-3">
                    <input class="form-control" id="ape2" type="text" name="ape2"/>
                    </div>
                       
                </div>
               
              
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-12">
                      <button id="buscar" name="buscar" value="buscar" class="btn btn-primary col-xs-offset-5 col-xs-1">
                          BUSCAR
                      </button>   
                      <button type="button" id="modificar" name="modificar" value="modificar" class="botoncentrado">
                    Modificar
                 </button>  
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
                 
        </div>
    </div>
        
      <div class="panel panel-primary">
            <div class="panel-heading">Resultados</div>
            <div class="panel-body">
                <span id="res2"></span>  
             <div class="table-responsive">
               <table class="table table-hover table-bordered" id="tabla">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>2º Apellido</th>
                    <th>Móvil</th>
                    <th>Email</th>
                    <th>Dirección</th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                   <td>Rocky</td>
                   <td>Balboa</td>
                   <td>López</td>
                   <td>666 666 666</td>
                   <td>Rocky@balboa.es</td>
                   <td>Calle la paz</td>
                </tr>
               
                <tr>
                   <td>Indiana</td>
                   <td>Jones</td>
                   <td>Perez</td>
                   <td>666 777 777</td>
                   <td>indiana@jones.es</td>
                   <td>Calle abastos</td>
                </tr>
            
               </tbody>
              
              </table>
                 
            </div>
        
       </div>   
            
              
    </body>   
</htm>
