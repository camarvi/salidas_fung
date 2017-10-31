<?php

//require_once ("plantilla.php");
//require_once ("common.inc.php");
    
$nuhsa=$_POST['nuhsa'];
$ape1=$_POST['ape1'];
$ape2=$_POST['ape2'];

$resultado= "NOMBRE PACIENTE " . $ape1 . " " . $ape2;

$resultado2=" <tr>
                   <td>Indiana</td>
                   <td>Jones</td>
                   <td>Perez</td>
                   <td>666 777 777</td>
                   <td>indiana@jones.es</td>
                   <td>Calle abastos</td>
                </tr>";

echo $resultado2;



?>