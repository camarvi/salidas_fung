<?php

//require_once ("plantilla.php");
require_once ("common.inc.php");
        
$cod_salida=$_POST['cod_salida'];


$elimina_salida=new Salidas(array("COD"=>($cod_salida),
          ));
        
$elimina_salida->EliminaSalida($cod);

$resultado="Salida Elimina";
   

   echo $resultado;


?>