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

class Quien  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "COD"=>"",
        "PERSONA"=>"",
     );    

    //lista de categorias por orden alfabetico

    public static function listaQuien() {

        $conn=parent::connect();
        $sql=SQL_LISTA_QUIEN;
   
   
        try {
            $st=$conn->prepare($sql);
           
            
            $st->execute();
             $lquien=array();
               foreach ($st->fetchAll() as $row) {
                   $lquien[]=new Quien($row);
               }

               parent::disconnect($conn);
               return array($lquien);
            } catch (PDOException $e) {
                parent::disconnect($conn);
                die("Query failed: " . $e->getMessage());
            }



    }

}
?>
