<?php

session_start();   
include '../models/access_db.php';//incluimos el acceso a la base de datos

$itNombre = $mysqli->real_escape_string($_POST["itNombre"]);//validar sql injection

$resultPlantillaCreada = $mysqli->query("SELECT * FROM tbl_plantillas WHERE id_plantillas=2");
$rowPlantillaCreada = $resultPlantillaCreada->num_rows;

if($rowPlantillaCreada>0)
{
    echo "la plantilla ya  creo ".$rowPlantillaCreada ;
    $_SESSION['plantillaYaCreada'] = 1;
    //if (isset($_SESSION['plantillaYaCreada']) && $_SESSION['plantillaYaCreada'] == 1) {}
}else
{
     
    $crearPlantilla = $mysqli->query("INSERT INTO tbl_plantillas (nombre_plantillas)values('".$itNombre."')");
    
    if ($crearPlantilla) 
    {
        //echo "<br>TABLA CREADA<br>";
        $resultPlantilla = $mysqli->query("SELECT * FROM tbl_plantillas WHERE seleccionada='NO'");
        $rowPlantilla = $resultPlantilla->fetch_array();
       
        
        
        
        /*   BODY - QUERY    */
        $resultBody = $mysqli->query("SELECT * FROM tbl_body");
        $contBody = 1;
        $varBody = "";
        while($nombreColumna = $resultBody->fetch_field())
        {
            if($contBody>1) 
            {
                $varBody .= $nombreColumna->name;
                if($contBody < $resultBody->field_count)
                {
                    $varBody .= ", ";
                }
            }
            $contBody++;
        }
        $insertBody= $mysqli->query("INSERT INTO tbl_body (".$varBody.")"
                . " SELECT ".$varBody." FROM tbl_body WHERE id_plantilla=1");
        $updateBody= $mysqli->query("UPDATE tbl_body SET id_plantilla=2 WHERE id_body=2");
         
      
        
       
        
        
        /*   HEADER - QUERY    */
        $resultHeader = $mysqli->query("SELECT * FROM tbl_header");
        $contHeader = 1;
        $varHeader = "";
        while($nombreColumna = $resultHeader->fetch_field())
        {
            if($contHeader>1) 
            {
                $varHeader .= $nombreColumna->name;
                if($contHeader < $resultHeader->field_count)
                {
                    $varHeader .= ", ";
                }
            }
            $contHeader++;
        }
        echo $varHeader;
        $insertHeader = $mysqli->query("INSERT INTO tbl_header (".$varHeader.")"
                . " SELECT ".$varHeader." FROM tbl_header WHERE id_plantilla=1");
        $updatetHeader = $mysqli->query("UPDATE tbl_header SET id_plantilla=2 WHERE id_header=2");
        
        
        
        /*   FOOTER - QUERY    */
        $resultFooter = $mysqli->query("SELECT * FROM tbl_footer");
        $contFooter = 1;
        $varFooter = "";
        while($nombreColumna = $resultFooter->fetch_field())
        {
            if($contFooter>1) 
            {
                $varFooter .= $nombreColumna->name;
                if($contFooter < $resultFooter->field_count)
                {
                    $varFooter .= ", ";
                }
            }
            $contFooter++;
        }
        echo $varFooter;
        $insertFooter= $mysqli->query("INSERT INTO tbl_footer (".$varFooter.")"
               . " SELECT ".$varFooter." FROM tbl_footer WHERE id_plantilla=1");
        $updateFooter= $mysqli->query("UPDATE tbl_footer SET id_plantilla=2 WHERE id_footer=2");
        
        
       
        
        
        
        /*   SECCION 1 - QUERY    */
        $resultSeccion1 = $mysqli->query("SELECT * FROM tbl_seccion_1");
        $contSeccion1 = 1;
        $varSeccion1 = "";
        while($nombreColumna = $resultSeccion1->fetch_field())
        {
            if($contSeccion1>1) 
            {
                $varSeccion1 .= $nombreColumna->name;
                if($contSeccion1 < $resultSeccion1->field_count)
                {
                    $varSeccion1 .= ", ";
                }
            }
            $contSeccion1++;
        }
        echo $varSeccion1;
        $insertSeccion1= $mysqli->query("INSERT INTO tbl_seccion_1 (".$varSeccion1.")"
                . " SELECT ".$varSeccion1." FROM tbl_seccion_1 WHERE id_plantilla=1");
        $updateSeccion1= $mysqli->query("UPDATE tbl_seccion_1 SET id_plantilla=2 WHERE id_seccion_1=2");
        
        
        
        /*   SECCION 2  - QUERY    */
        $resultSeccion2 = $mysqli->query("SELECT * FROM tbl_seccion_2");
        $contSeccion2 = 1;
        $varSeccion2 = "";
        while($nombreColumna = $resultSeccion2->fetch_field())
        {
            if($contSeccion2>1) 
            {
                $varSeccion2 .= $nombreColumna->name;
                if($contSeccion2 < $resultSeccion2->field_count)
                {
                    $varSeccion2 .= ", ";
                }
            }
            $contSeccion2++;
        }
        echo $varSeccion2;
        $insertSeccion2= $mysqli->query("INSERT INTO tbl_seccion_2 (".$varSeccion2.")"
                . " SELECT ".$varSeccion2." FROM tbl_seccion_2 WHERE id_plantilla=1");
        $updateSeccion2= $mysqli->query("UPDATE tbl_seccion_2 SET id_plantilla=2 WHERE id_seccion_2=2");
        
        
        
        
         
        /*   SECCION 3 - QUERY    */
        $resultSeccion3 = $mysqli->query("SELECT * FROM tbl_seccion_3");
        $contSeccion3 = 1;
        $varSeccion3 = "";
        while($nombreColumna = $resultSeccion3->fetch_field())
        {
            if($contSeccion3>1) 
            {
                $varSeccion3 .= $nombreColumna->name;
                if($contSeccion3 < $resultSeccion3->field_count)
                {
                    $varSeccion3 .= ", ";
                }
            }
            $contSeccion3++;
        }
        echo $varSeccion3;
        $insertSeccion3= $mysqli->query("INSERT INTO tbl_seccion_3 (".$varSeccion3.")"
                . " SELECT ".$varSeccion3." FROM tbl_seccion_3 WHERE id_plantilla=1");
        $updateSeccion3= $mysqli->query("UPDATE tbl_seccion_3 SET id_plantilla=2 WHERE id_seccion_3=2");
        
        
        
        
        /*   SECCION 4 - QUERY    */
        $resultSeccion4 = $mysqli->query("SELECT * FROM tbl_seccion_4");
        $contSeccion4 = 1;
        $varSeccion4 = "";
        while($nombreColumna = $resultSeccion4->fetch_field())
        {
            if($contSeccion4>1) 
            {
                $varSeccion4 .= $nombreColumna->name;
                if($contSeccion4 < $resultSeccion4->field_count)
                {
                    $varSeccion4 .= ", ";
                }
            }
            $contSeccion4++;
        }
        echo $varSeccion4;
        $insertSeccion4= $mysqli->query("INSERT INTO tbl_seccion_4 (".$varSeccion4.")"
                . " SELECT ".$varSeccion4." FROM tbl_seccion_4 WHERE id_plantilla=1");
        $updateSeccion4= $mysqli->query("UPDATE tbl_seccion_4 SET id_plantilla=2 WHERE id_seccion_4=2");
        
        
        
        /*   SECCION 5 - QUERY    */
        $resultSeccion5 = $mysqli->query("SELECT * FROM tbl_seccion_5");
        $contSeccion5 = 1;
        $varSeccion5 = "";
        while($nombreColumna = $resultSeccion5->fetch_field())
        {
            if($contSeccion5>1) 
            {
                $varSeccion5 .= $nombreColumna->name;
                if($contSeccion5 < $resultSeccion5->field_count)
                {
                    $varSeccion5 .= ", ";
                }
            }
            $contSeccion5++;
        }
        echo $varSeccion5;
        $insertSeccion5= $mysqli->query("INSERT INTO tbl_seccion_5 (".$varSeccion5.")"
                . " SELECT ".$varSeccion5." FROM tbl_seccion_5 WHERE id_plantilla=1");
        $updateSeccion5= $mysqli->query("UPDATE tbl_seccion_5 SET id_plantilla=2 WHERE id_seccion_5=2");
       
        
        
        if ($insertBody && $updateBody && $insertHeader && $updatetHeader && $insertFooter && $updateFooter && $insertSeccion1 && $updateSeccion1 && $insertSeccion2 && $updateSeccion2 && $insertSeccion3 && $updateSeccion3 && $insertSeccion4 && $updateSeccion4 && $insertSeccion5 && $updateSeccion5 && $insertSeccion5 && $updateSeccion5) 
        {
            $_SESSION['plantillaCreada'] = 1;
            //if (isset($_SESSION['plantillaCreada']) && $_SESSION['plantillaCreada'] == 1) {}
            echo "<br> CREADO TODO<br>";
        }else 
        {
            echo "<br> ERROR AL CREAR ALGO<br>"."";
        }
        
     
      
        

    }else 
    {
         echo "<br>ERROR PLANTILLA <br>";
    }
    
}




?>