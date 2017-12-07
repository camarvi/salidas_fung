<?php
/* 
 * DEFINO LAS CONSTANTES QUE UTILIZO EN EL PROGRAMA
 */

// DATOS CONEXON POR MYSQL
//define("DB_DSN","mysql:host=10.8.65.9;dbname=SUCESOS");
//define("DB_DSN","mysql:dbname=web");
   


// CONEXION AL SERVIDOR SQL SERVER


define("DB_DSN","dblib:host=10.8.65.17;dbname=VISADO");

     

define("DB_USERNAME", "sa");
define("DB_PASSWORD", "servidor");
define("PAGE_SIZE", 5);
    

//Definicion Tablas BD
define("TBL_SALIDAS","FUNGIBLE_SALIDAS");
define("TBL_CENTROS","CENTROS");
define("TBL_BDU","FICHERO_BDU");
define("TBL_SEXO","SEXO");     
define("TBL_UGC","ZONAS");
define("TBL_RESIDENCIAS","RESIDENCIAS");
define("TBL_QUIEN","FUNG_QUIEN");
define("TBL_MATERIAL","MATERIAL_FUNG");


define( "ROOT", $_SERVER['HTTP_HOST']);
define("RAIZ", "http://" . $_SERVER['HTTP_HOST'] );

  
//consultas sql

//RELLENAR LOS COMBOS

define("SQL_LISTA_QUIEN","SELECT COD,PERSONA FROM " . TBL_QUIEN);
define("SQL_LISTA_SEXO","SELECT ID,SEXO FROM " . TBL_SEXO);
define("SQL_LISTA_RESIDENCIAS","SELECT COD,NOMBRE,DIRECCION,UGC,LOCALIDAD FROM " . TBL_RESIDENCIAS);
define("SQL_LISTA_UGC","SELECT IDENTIFICADOR,NOMBRE FROM " . TBL_UGC . " WHERE DISTRITO=1");

define("SQL_LISTACENTROS", "SELECT COD_CEN,CENTRO FROM " . TBL_CENTROS . " WHERE TALON=1 ORDER BY CENTRO" );

define("SQL_LISTA_MATERIAL","SELECT ID,CL_ECON,CL_UNIV,GENERICO,DESCRIPCION FROM " . TBL_MATERIAL .
        " ORDER BY DESCRIPCION");

   
//CONSULTAS TABLA SALIDAS

define("SQL_NUEVA_SALIDA","INSERT INTO " . TBL_SALIDAS . " (USUARIO,CENTRO,QUIEN,FECHA,MATERIAL,
    CANTIDAD,RESIDENCIA,OBSERVACIONES) VALUES (:USUARIO,:CENTRO,:QUIEN,:FECHA,:MATERIAL,
    :CANTIDAD,:RESIDENCIA,:OBSERVACIONES)"); 

define("SQL_ELIMINA_SALIDA","DELETE FROM " . TBL_SALIDAS . " WHERE COD=:cod");

define("SQL_BUSCA_SALIDAS_USUARIO","SELECT COD,USUARIO,CENTRO,QUIEN,FECHA,MATERIAL,CANTIDAD,"
        . "RESIDENCIA,OBSERVACIONES,MATERIAL_FUNG.DESCRIPCION AS NOMBRE_MATERIAL FROM " . TBL_SALIDAS . ","  . TBL_MATERIAL . 
        " WHERE MATERIAL_FUNG.ID=FUNGIBLE_SALIDAS.MATERIAL AND USUARIO=:usuario ORDER BY COD DESC" );

define("SQL_ULTIMA_SALIDA_USUARIO", "SELECT TOP 1 COD,USUARIO,CENTRO,QUIEN,FECHA,MATERIAL,CANTIDAD,"
        . "RESIDENCIA,OBSERVACIONES,MATERIAL_FUNG.DESCRIPCION AS NOMBRE_MATERIAL FROM " . TBL_SALIDAS . ","  . TBL_MATERIAL . 
        " WHERE MATERIAL_FUNG.ID=FUNGIBLE_SALIDAS.MATERIAL AND USUARIO=:usuario ORDER BY COD DESC" );
//CONSULTAS TABLA BDU


define("SQL_BUSCA_NUHSA","SELECT NUHSA,CLAMED,ANIO,MES,DIA,SEXO,APE1,APE2,NOMBRE,"
        . "TELEFONO,MOVIL,TIPO_VIA,NOMBRE_VIA,NUMERO_VIA FROM " . TBL_BDU . " WHERE NUHSA=:NUHSA");


define("SQL_BUSCA_APE1","SELECT NUHSA,CLAMED,ANIO,MES,DIA,SEXO,APE1,APE2,NOMBRE,"
        . "TELEFONO,MOVIL,TIPO_VIA,NOMBRE_VIA,NUMERO_VIA FROM " . TBL_BDU . 
        " WHERE APE1 LIKE :APE1 ORDER BY APE1,APE2,NOMBRE");

define("SQL_BUSCA_APE2","SELECT NUHSA,CLAMED,ANIO,MES,DIA,SEXO,APE1,APE2,NOMBRE,"
        . "TELEFONO,MOVIL,TIPO_VIA,NOMBRE_VIA,NUMERO_VIA FROM " . TBL_BDU . 
        " WHERE APE1 LIKE :APE1 AND APE2 LIKE :APE2 ORDER BY APE1,APE2,NOMBRE");




?>
     