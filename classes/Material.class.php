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

class Material  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "ID"=>"",
        "CL_ECON"=>"",
        "CL_UNIV"=>"",
        "GENERICO"=>"",
        "DESCRIPCION"=>"",
       
        
     );    

    //lista de categorias por orden alfabetico

    public static function listaMaterial() {

        $conn=parent::connect();
        $sql=SQL_LISTA_MATERIAL;
        
   
        try {
            $st=$conn->prepare($sql);
           
            
            $st->execute();
             $lmaterial=array();
               foreach ($st->fetchAll() as $row) {
                   $lmaterial[]=new Material($row);
               }

               parent::disconnect($conn);
               return array($lmaterial);
            } catch (PDOException $e) {
                parent::disconnect($conn);
                die("Query failed: " . $e->getMessage());
            }



    }

}
?>
