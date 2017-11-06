<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>


<?php
//require_once ("plantilla.php");
require_once ("common.inc.php");
   

//compruebaUsuario();


$muestradatos=0;




// CARGO INFORMACION COMBOX

list($listacentros)= Centros::listaCentros();
list($listaquienes)=  Quien::listaQuien();
list($listaresidencias)=  Residencias::listaResidencias();
list($listamaterial)=  Material::listaMaterial();


?>




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
             //  $('table tr:not(:first-child)').remove();
             $("#tabla tbody tr").remove();
            //  var trs=$("#tabla tr").length;
            //    if(trs>1)
            //      {
            //    // Eliminamos la ultima columna
            //     $("#tabla tr:last").remove();
            //    } 
             var nuhsa=$('#nuhsa').val();
             var ape1=$('#ape1').val();
             var ape2=$('#ape2').val();
            
             $.post("jbusca_usuario.php",{
                 nuhsa:nuhsa,
                 ape1:ape1,
                 ape2:ape2},
                function(htmlexterno){
                //   alert (htmlexterno);
                
                //   $("#resultado").html('<tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr>'); // html(htmlexterno);
                   $("#tabla tr:last").after(htmlexterno);
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
                    <label for="nuhsa" class="col-xs-1"><span style="margin-right:5px;">Nombre:</span></label>
                     <div class="col-xs-3">
                    <input class="form-control" id="nombre" type="text" name="nombre" placeholder=""/>
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
               
             <div class="form-group col-xs-12">
                    <label for="nuhsa" class="col-xs-1"><span style="margin-right:5px;">Nuhsa:</span></label>
                     <div class="col-xs-2">
                    <input class="form-control" id="nuhsa" type="text" name="nuhsa" placeholder=""/>
                    </div> 
                    
                    <label for="nombre" class="col-xs-2"><span style="margin-right:5px;">Fecha Nacimiento:</span></label>
                    <div class="col-xs-2">
                    <input class="form-control" id="fnacimiento" type="text" name="fnacimiento" placeholder=""/>
                    </div>   
                    
                    <label for="apellido" class="col-xs-1"><span style="margin-right:5px;">Direccion:</span></label>
                    <div class="col-xs-4">
                    <input class="form-control" id="direccion" type="text" name="ape2"/>
                    </div>
                       
               </div>
              
                
            </form>
            <!-- End of Login Form -->
                 
        </div>
    </div>
     
    <!-- REGISTRO DE NUEVA ENTRADA  -->

  <div class="panel panel-primary">
            <div class="panel-heading">Nueva Entrega</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form class="form-horizontal" role="form" action="" method="POST">
            
            <!-- Username Field -->
                
                <div class="form-group col-xs-12">
                    <label for="fecha" class="col-xs-1"><span style="margin-right:5px;">Fecha:</span></label>
                     <div class="col-xs-2">
                    <input class="form-control" id="fecha" type="text" name="nombre" value="<?php echo date('d/m/Y'); ?>"/>
                    </div> 
                    
                    <label for="centro" class="col-xs-1"><span style="margin-right:5px;">Centro:</span></label>
                    <div class="col-xs-3">
                       <select name="entrega" id="entrega" class="form-control"> 
                        <?php
                          foreach ($listacentros as $lcentro) {
                        ?>
                          <option value="<?php echo $lcentro->getValueEncoded('COD_CEN')?>">
                           <?php echo ($lcentro->getValue('CENTRO'))?></option>
                        <?php    
                           }
                        ?>    
                     </select> 
                    </div>
                    
                    <label for="entrega" class="col-xs-1"><span style="margin-right:5px;">Entregado:</span></label>
                    <div class="col-xs-2">
                     <select name="entrega" id="entrega" class="form-control"> 
                        <?php
                          foreach ($listaquienes as $lquien) {
                        ?>
                          <option value="<?php echo $lquien->getValueEncoded('COD')?>">
                           <?php echo ($lquien->getValue('PERSONA'))?></option>
                        <?php    
                           }
                        ?>    
                     </select>
                    </div>   
                    
                    <label for="cantidad" class="col-xs-1"><span style="margin-right:5px;">Cantidad:</span></label>
                    <div class="col-xs-1">
                    <input class="form-control" id="cantidad" type="text" name="cantidad" placeholder=""/>
                    </div>   
                        
                </div>
               
              <div class="form-group col-xs-12">
                    <label for="material" class="col-xs-1"><span style="margin-right:5px;">Material:</span></label>
                     <div class="col-xs-7">
                    <input class="form-control" id="material" type="text" name="material" placeholder=""/>
                    </div> 
                    
                    <label for="residencia" class="col-xs-1"><span style="margin-right:5px;">Residencia:</span></label>
                    <div class="col-xs-3">
                      <select name="residencia" id="residencia" class="form-control"> 
                        <?php
                          foreach ($listaresidencias as $lresidencia) {
                        ?>
                          <option value="<?php echo $lresidencia->getValueEncoded('COD')?>">
                           <?php echo ($lresidencia->getValue('NOMBRE'))?></option>
                        <?php
                           }
                        ?>    
                       </select>
                    </div>
                       
               </div>
            
                <div class="form-group col-xs-12">
                    <label for="obs" class="col-xs-1"><span style="margin-right:5px;">Obs :</span></label>
                     <div class="col-xs-8">
                       <input class="form-control" id="obs" type="text" name="obs" placeholder=""/>
                     </div> 
                    <div class="col-xs-3">
                      <button id="buscar" name="buscar" value="buscar" class="btn btn-primary ">
                          Grabar
                      </button>   
                      <button id="inicio" name="inicio" value="inicio" class="btn btn-primary col-lg-offset-2">
                          Inicio
                      </button>   
                        
                    </div>
                </div>
            
            </form>
            <!-- End of Login Form -->
                 
        </div>
    </div>
    
    

    <!-- FIN REGISTRO ENTRADA NUEVA -->    
        
        
        
      <div class="panel panel-primary">
            <div class="panel-heading">Salidas Realizadas</div>
            <div class="panel-body">
                <span id="res2"></span>  
             <div class="table-responsive">
               <table class="table table-hover table-bordered" id="tabla">
                <thead>
                  <tr>
                    <th class="col-xs-1">Fecha</th>
                    <th class="col-xs-5">Material</th>
                    <th class="col-xs-1">Cantidad</th>
                    <th class="col-xs-2">Entregado</th>
                    <th class="col-xs-2">Obs</th>
                    <th class="col-xs-1"></th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                  
                </tr>
               
                
            
               </tbody>
              
              </table>
                 
            </div>
        
       </div>   
            
              
    </body>   
    
    
    
</htm>
