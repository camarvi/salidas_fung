<?php

//require_once ("plantilla.php");
require_once ("common.inc.php");
        
$nuhsa=$_POST['nuhsa'];
$ape1=$_POST['ape1'];
$ape2=$_POST['ape2'];

if ((is_null($nuhsa) or empty($nuhsa)==true)) {
       if (empty($ape2)==false){
            list($pacientes)=  Bdu::getUsuarios_2Ap($ape1, $ape2);
           
         } else {
            list($pacientes)=  Bdu::getUsuarios_1Ap($ape1);  
              }  
   } else {
    //SE BUSCA POR AN
        list($pacientes)=  Bdu::BuscaNusha($nuhsa);
        }


$resultado="";
   
 /*<td>
 //                        <a href="buscar_historia.php?cod=<?php echo $registro->getValueEncoded("COD") ?>">
 //                            <img src="imagenes/icono_eliminar.gif"  border="none" alt="borrar">
 //                         </a>
 //                   </td> 
*/

   foreach ($pacientes as $paciente) {
      
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