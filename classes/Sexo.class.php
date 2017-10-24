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

class Sexo  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "ID"=>"",
        "SEXO"=>"",
     );    

    //lista de categorias por orden alfabetico

    public static function listaSexo() {

        $conn=parent::connect();
        $sql=SQL_LISTA_SEXO;
   
   
        try {
            $st=$conn->prepare($sql);
           
            
            $st->execute();
             $lsexo=array();
               foreach ($st->fetchAll() as $row) {
                   $lsexo[]=new Sexo($row);
               }

               parent::disconnect($conn);
               return array($lsexo);
            } catch (PDOException $e) {
                parent::disconnect($conn);
                die("Query failed: " . $e->getMessage());
            }



    }

}
?>
