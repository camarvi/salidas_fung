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

class Bdu  extends DataObject {
    //put your code here
    protected  $data=array(
        
        "NUHSA"=>"",
        "CLAMED"=>"",
        "ESPECIALIDAD"=>"",
        "ANIO"=>"",
        "MES"=>"",
        "DIA"=>"",
        "SEXO"=>"",
        "APE1"=>"",
        "APE2"=>"",
        "NOMBRE"=>"",
        "TELEFONO"=>"",
        "MOVIL"=>"",
        "TIPO_VIA"=>"",
        "NOMBRE_VIA"=>"",
        "NUMERO_VIA"=>"",
        
        
     );    

    //lista de categorias por orden alfabetico
    
  public static function getUsuarioBdu ($nusha) {
      
        $conn=parent::connect();
        $sql=SQL_BUSCA_NUHSA;
    
        try{
            $st=$conn->prepare($sql);
            $busqueda= '%' . utf8_decode(trim($nusha)) . '%';
            $st->bindValue(":NUHSA",$nusha,PDO::PARAM_STR);
            $st->execute();
            $row=$st->fetch();
            parent::disconnect($conn);
            if ($row) return new Bdu($row);
        } catch (PDOException $e) {
               parent::disconnect($conn);
               die("Fallo Consulta SQL: " . $e->getMessage());
        }

    }
    
    
    
  public static function BuscaNusha($nusha) {

        $conn=parent::connect();
        $sql=SQL_BUSCA_NUHSA;
        
        try {
            $st=$conn->prepare($sql);
            $busqueda= '%' . utf8_decode(trim($nusha)) . '%';
            $st->bindValue(":NUHSA",$nusha,PDO::PARAM_STR);
            $st->execute();
            $listabdu=array();
               foreach ($st->fetchAll() as $row) {
                   $listabdu[]=new Bdu($row);
               }

               parent::disconnect($conn);
               return array($listabdu);
          


        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query Failed :" . $e->getMessage());
        }

    }
    
    
 public static function getUsuarios_1Ap($ape1) {

        $conn=parent::connect();
        $sql=SQL_BUSCA_APE1;
        
        try {
            $st=$conn->prepare($sql);
            $busqueda= '%' . utf8_decode(trim($ape1)) . '%';
            $st->bindValue(":APE1",$busqueda,PDO::PARAM_STR);
            $st->execute();
            $listabdu=array();
               foreach ($st->fetchAll() as $row) {
                   $listabdu[]=new Bdu($row);
               }

               parent::disconnect($conn);
               return array($listabdu);
          


        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query Failed :" . $e->getMessage());
        }

    }       
 
 public static function getUsuarios_2Ap($ape1,$ape2) {

        $conn=parent::connect();
        $sql=SQL_BUSCA_APE2;
        
        try {
            $st=$conn->prepare($sql);
            $busqueda1= '%' . utf8_decode(trim($ape1)) . '%';
            $busqueda2= '%' . utf8_decode(trim($ape2)) . '%';
            $st->bindValue(":APE1",$busqueda1,PDO::PARAM_STR);
            $st->bindValue(":APE2",$busqueda2,PDO::PARAM_STR);
            $st->execute();
            $listabdu=array();
               foreach ($st->fetchAll() as $row) {
                   $listabdu[]=new Bdu($row);
               }

               parent::disconnect($conn);
               return array($listabdu);

        } catch (PDOException $e) {
            parent::disconnect($conn);
            die("Query Failed :" . $e->getMessage());
        }

    }          
            

}
?>
