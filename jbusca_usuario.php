<?php

//require_once ("plantilla.php");
require_once ("common.inc.php");
    
$nuhsa=$_POST['nuhsa'];
$ape1=$_POST['ape1'];
$ape2=$_POST['ape2'];

if (is_null($nuhsa)) {
       if (is_null($ape2)==false){
          list($pacientes)=  Bdu::getUsuarios_2Ap($ape1, $ape2);
         } else {
              list($pacientes)=  Bdu::getUsuarios_1Ap($ape1);
              }  
   } else {
    //SE BUSCA POR AN
        list($pacientes)=  Bdu::BuscaNusha($nusha);
        }


$resultado="";
        
   foreach ($pacientes as $paciente) {
      
       $resultado=$resultado . "<tr><td>" . $paciente->getValue("NUHSA") . "</td><td>" . $paciente->getValue("NOMBRE") . "</td><td>" . $paciente->getValue("APE1") . "</td><td>" . $paciente->getValue("APE2") . "</td><td></td></tr>";
       
   }
   
//$resultado2="<tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr><tr><td>Indiana</td><td>Jones</td><td>Perez</td><td>666 777 777</td><td>indiana@jones.es</td><td>Calle abastos</td></tr>";

//echo $resultado2;

   echo $resultado;


?>