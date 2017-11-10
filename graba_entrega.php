<?php

//require_once ("plantilla.php");
require_once ("common.inc.php");
        
$nuhsa=$_POST['nuhsa'];
//$fecha=$_POST['fecha'];
$centro=$_POST['centro'];
$entrega=$_POST['entrega'];
$cantidad=$_POST['cantidad'];
$material=$_POST['material'];
$texto_material=$_POST['texto_material'];
$residencia=$_POST['residencia'];
$obs=$_POST['obs']; 


  $separar =explode('/',$_POST["fecha"]);    
         
                $dia=trim($separar1[0]);
                 
                $mes=trim($separar1[1]);
               
                $anio=trim($separar1[2]);
        
                $fecha=$anio . "-" . $mes . "-" . $dia;
               
                if (strlen($fecha)<4) {
                    $fecha="";
                }


/*
 * 
 * "USUARIO"=>"",
        "CENTRO"=>"",
        "QUIEN"=>"",
        "FECHA"=>"",
        "MATERIAL"=>"",
        "CANTIDAD"=>"",
        "RESIDENCIA"=>"",
        "OBSERVACINES"=>"",
        "NOMBRE_MATERIAL"=>"",
 * 
 */



$nueva_entrega=new Salidas(array("USUARIO"=>($nuhsa),
          "FECHA"=>($fecha),
          "CENTRO"=>($centro),
          "ENTREGA"=>($entrega),
          "CANTIDAD"=>($cantidad),
          "MATERIAL"=>($material),
          "TEXTO_MATERIAL"=>($texto_material),
          "RESIDENCIA"=>($residencia),
          "OBS"=>($obs), 
          ));
        
$nueva_entrega->NuevaSalida();

// Una vez grabada la salida, busco todas las salidas del usuario

list($salidas_usuario)=  Salidas::getUltSalida_Usuario($nuhsa);




$resultado="";
   
 /*<td>
 //                        <a href="buscar_historia.php?cod=<?php echo $registro->getValueEncoded("COD") ?>">
 //                            <img src="imagenes/icono_eliminar.gif"  border="none" alt="borrar">
 //                         </a>
 //                   </td> 
*/

   foreach ($salidas_usuario as $salida) {
      
       $direccion="<a href='nueva_entrega.php?an=" . $paciente->getValue("NUHSA") . "'>" 
               . "<img src='imagenes/icono_mas.gif'  border='none' alt='Selec'></a>";
       
      $resultado=$resultado . "<tr><td>" . trim($paciente->getValue("NUHSA")) . "</td><td>" . trim($paciente->getValue("NOMBRE")) . "</td><td>" . $paciente->getValue("APE1") . "</td><td>" . trim($paciente->getValue("APE2")) . "</td>";
     // $resultado=$resultado ."<td><a href='nueva_entrega.php?an=AN001236525'><img src='imagenes/icono_mas.gif'  border='none' alt='borrar'></a></td></tr>";
    
     $resultado=$resultado ."<td>" . $direccion .  "</td></tr>";
    
      
   }
       
//$resultado2="<tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr><tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr>";

//echo $resultado2;

   echo $resultado;


?>