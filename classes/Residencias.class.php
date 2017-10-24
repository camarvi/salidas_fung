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

class Residencias  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "COD"=>"",
        "NOMBRE"=>"",
        "DIRECCION"=>"",
        "UGC"=>"",
        "LOCALIDAD"=>"",
     );    

    //lista de categorias por orden alfabetico

    public static function listaResidencias() {

        $conn=parent::connect();
        $sql=SQL_LISTA_RESIDENCIAS;
   
   
        try {
            $st=$conn->prepare($sql);
           
            
            $st->execute();
             $lresidencias=array();
               foreach ($st->fetchAll() as $row) {
                   $lresidencias[]=new Residencias($row);
               }

               parent::disconnect($conn);
               return array($lresidencias);
            } catch (PDOException $e) {
                parent::disconnect($conn);
                die("Query failed: " . $e->getMessage());
            }



    }

}
?>
