<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author carlos
 */
include_once 'DataObject.class.php';

class Salidas  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "COD"=>"",
        "USUARIO"=>"",
        "CENTRO"=>"",
        "QUIEN"=>"",
        "FECHA"=>"",
        "MATERIAL"=>"",
        "CANTIDAD"=>"",
        "RESIDENCIA"=>"",
        "OBSERVACINES"=>"",
        "NOMBRE_MATERIAL"=>"",
        
     );    

    //lista de categorias por orden alfabetico

    public static function NuevaSalida() {

        $conn=parent::connect();
        $sql=SQL_NUEVA_SALIDA;
        
             
        try {
            $st=$conn->prepare($sql);
          
            $st->bindValue(":USUARIO",$this->data["USUARIO"], PDO::PARAM_STR);
            $st->bindValue(":CENTRO",$this->data["CENTRO"], PDO::PARAM_STR);
            $st->bindValue(":QUIEN",$this->data["QUIEN"], PDO::PARAM_INT);
            $st->bindValue(":SEXO",$this->data["SEXO"], PDO::PARAM_STR);
            $st->bindValue(":FECHA",$this->data["FECHA"], PDO::PARAM_STR);
            $st->bindValue(":MATERIAL",$this->data["MATERIAL"], PDO::PARAM_INT);
            $st->bindValue(":CANTIDAD",$this->data["CANTIDAD"], PDO::PARAM_INT); 
            $st->bindValue(":RESIDENCIA",$this->data["RESIDENCIA"], PDO::PARAM_INT); 
            $st->bindValue(":OBSERVACIONES",$this->data["OBSERVACIONES"], PDO::PARAM_STR);
            $st->bindValue(":NOMBRE_MATERIAL",$this->data["NOMBRE_MATERIAL"], PDO::PARAM_STR);
            
            $st->execute();
            parent::disconnect($conn);

      
          $conn=null;


        } catch (PDOException $e) {
            parent::disconnect($conn);
            die ("Query failed: " . $e->getMessage());

        }

        
        

    }
    
    
    
    public static function EliminaSalida($cod) {

      $conn=parent::connect();
      $sql=SQL_ELIMINA_SALIDA;
      
      try {
               $st=$conn->prepare($sql);
               $st->bindValue(":cod",$cod,PDO::PARAM_INT);
               $st->execute();
             
               parent::disconnect($conn);
             
        } catch (PDOException $e) {

            parent::disconnect($conn);
            die("Query failed: " . $e->getMessage());
        }

     }        

     
     
     
     
     
     
     
}
?>
