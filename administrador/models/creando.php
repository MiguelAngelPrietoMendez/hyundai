<?php

session_start();   
include '../../models/access_db.php';//incluimos el acceso a la base de datos

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
        //echo $varHeader;
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
        //echo $varFooter;
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
        //echo $varSeccion1;
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
        //echo $varSeccion2;
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
        //echo $varSeccion3;
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
        //echo $varSeccion4;
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
        //echo $varSeccion5;
        $insertSeccion5= $mysqli->query("INSERT INTO tbl_seccion_5 (".$varSeccion5.")"
                . " SELECT ".$varSeccion5." FROM tbl_seccion_5 WHERE id_plantilla=1");
        $updateSeccion5= $mysqli->query("UPDATE tbl_seccion_5 SET id_plantilla=2 WHERE id_seccion_5=2");
       
        
        
        if ($insertBody && $updateBody && $insertHeader && $updatetHeader && $insertFooter && $updateFooter && $insertSeccion1 && $updateSeccion1 && $insertSeccion2 && $updateSeccion2 && $insertSeccion3 && $updateSeccion3 && $insertSeccion4 && $updateSeccion4 && $insertSeccion5 && $updateSeccion5 && $insertSeccion5 && $updateSeccion5) 
        { 
            
            
    
        /*   INICIO CREAR ARCHIVOS DE NUEVA PLANTILLA   */
         
            
        $rutaGeneral = '../../previsualizador/' . $itNombre ."/";

        /*  ruta controls  */
        $carpetaControls = '../../controls/';
        $rutaControls = '../../previsualizador/' . $itNombre ."/controls/";

        /*  ruta css  */
        $carpetaCss = '../../css/';
        $rutaCss = '../../previsualizador/' . $itNombre ."/css/";

        /*  ruta js  */
        $carpetaJs = '../../js/';
        $rutaJs = '../../previsualizador/' . $itNombre ."/js/";

        /*  ruta libraries  */
        $carpetaLibraries = '../../libraries/';
        $rutaLibraries = '../../previsualizador/' . $itNombre ."/libraries/";

        /*  ruta models  */
        $carpetaModels = '../../models/';
        $rutaModels = '../../previsualizador/' . $itNombre ."/models/";

        /*  ruta sections  */
        $carpetaSections = '../../sections/';
        $rutaSections = '../../previsualizador/' . $itNombre ."/sections/";

        /*  ruta src  */
        $carpetaSrc = '../../src/';
        $rutaSrc = '../../previsualizador/' . $itNombre ."/src/";

        /*  RUTA SECCION 1  */
        $resultArchivo1 = $mysqli->query("SELECT nombre_seccion_1 FROM tbl_seccion_1 WHERE id_seccion_1=2");
        $rowArchivo1 = $resultArchivo1->fetch_array();
        $carpetaSeccion1 = '../../'.$rowArchivo1["nombre_seccion_1"];
        $rutaSeccion1 = '../../previsualizador/' . $itNombre ."/".$rowArchivo1["nombre_seccion_1"];

        /*  RUTA SECCION 2  */
        $resultArchivo2 = $mysqli->query("SELECT nombre_seccion_2 FROM tbl_seccion_2 WHERE id_seccion_2=2");
        $rowArchivo2 = $resultArchivo2->fetch_array();
        $carpetaSeccion2 = '../../'.$rowArchivo2["nombre_seccion_2"];
        $rutaSeccion2 = '../../previsualizador/' . $itNombre ."/".$rowArchivo2["nombre_seccion_2"];

        /*  RUTA SECCION 3  */
        $resultArchivo3 = $mysqli->query("SELECT nombre_seccion_3 FROM tbl_seccion_3 WHERE id_seccion_3=2");
        $rowArchivo3 = $resultArchivo3->fetch_array();
        $carpetaSeccion3 = '../../'.$rowArchivo3["nombre_seccion_3"];
        $rutaSeccion3 = '../../previsualizador/' . $itNombre ."/".$rowArchivo3["nombre_seccion_3"];

        /*  RUTA SECCION 4  */
        $resultArchivo4 = $mysqli->query("SELECT nombre_seccion_4 FROM tbl_seccion_4 WHERE id_seccion_4=2");
        $rowArchivo4 = $resultArchivo4->fetch_array();
        $carpetaSeccion4 = '../../'.$rowArchivo4["nombre_seccion_4"];
        $rutaSeccion4 = '../../previsualizador/' . $itNombre ."/".$rowArchivo4["nombre_seccion_4"];

        /*  RUTA SECCION 5  */
        $resultArchivo5 = $mysqli->query("SELECT nombre_seccion_5 FROM tbl_seccion_5 WHERE id_seccion_5=2");
        $rowArchivo5 = $resultArchivo5->fetch_array();
        $carpetaSeccion5 = '../../'.$rowArchivo5["nombre_seccion_5"];
        $rutaSeccion5 = '../../previsualizador/' . $itNombre ."/".$rowArchivo5["nombre_seccion_5"];
        
        /*  RUTA SECCION 5 GALERIAS 2 - 12  */
        $carpetaSeccion5_2 = '../../galeria_2.php';
        $rutaSeccion5_2 = '../../previsualizador/' . $itNombre ."/galeria_2.php";

        $carpetaSeccion5_3 = '../../galeria_3.php';
        $rutaSeccion5_3 = '../../previsualizador/' . $itNombre ."/galeria_3.php";

        $carpetaSeccion5_4 = '../../galeria_4.php';
        $rutaSeccion5_4 = '../../previsualizador/' . $itNombre ."/galeria_4.php";

        $carpetaSeccion5_5 = '../../galeria_5.php';
        $rutaSeccion5_5 = '../../previsualizador/' . $itNombre ."/galeria_5.php";

        $carpetaSeccion5_6 = '../../galeria_6.php';
        $rutaSeccion5_6 = '../../previsualizador/' . $itNombre ."/galeria_6.php";

        $carpetaSeccion5_7 = '../../galeria_7.php';
        $rutaSeccion5_7 = '../../previsualizador/' . $itNombre ."/galeria_7.php";

        $carpetaSeccion5_8 = '../../galeria_8.php';
        $rutaSeccion5_8 = '../../previsualizador/' . $itNombre ."/galeria_8.php";

        $carpetaSeccion5_9 = '../../galeria_9.php';
        $rutaSeccion5_9 = '../../previsualizador/' . $itNombre ."/galeria_9.php";

        $carpetaSeccion5_10 = '../../galeria_10.php';
        $rutaSeccion5_10 = '../../previsualizador/' . $itNombre ."/galeria_10.php";

        $carpetaSeccion5_11 = '../../galeria_11.php';
        $rutaSeccion5_11 = '../../previsualizador/' . $itNombre ."/galeria_11.php";

        $carpetaSeccion5_12 = '../../galeria_12.php';
        $rutaSeccion5_12 = '../../previsualizador/' . $itNombre ."/galeria_12.php";

        if (!mkdir($rutaGeneral, 0777, true)) 
        {
            die('Fallo al crear las carpetas...');
        } else 
        {

            /*  CONTROLS - FUNCTION */ 
            function full_copy_controls( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_controls( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_controls($carpetaControls, $rutaControls);



            /*  CSS - FUNCTION */ 
            function full_copy_css( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_css( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_css($carpetaCss, $rutaCss);



            /*  JS - FUNCTION */ 
            function full_copy_js( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_js( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_js($carpetaJs, $rutaJs);




            /*  LIBRARIES - FUNCTION */ 
            function full_copy_libraries( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_libraries( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_libraries($carpetaLibraries, $rutaLibraries);




            /*  MODELS - FUNCTION */ 
            function full_copy_models( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_models( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_models($carpetaModels, $rutaModels);




            /*  SECTIONS - FUNCTION */ 
            function full_copy_sections( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_sections( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . $entry );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_sections($carpetaSections, $rutaSections);





            /*  SRC - FUNCTION */ 
            function full_copy_src( $source, $target ) 
            {
                if ( is_dir( $source ) ) {
                    @mkdir( $target );
                    $d = dir( $source );
                    while ( FALSE !== ( $entry = $d->read() ) ) {
                        if ( $entry == '.' || $entry == '..' ) {
                            continue;
                        }
                        $Entry = $source . '/' . $entry; 
                        if ( is_dir( $Entry ) ) {
                            full_copy_src( $Entry, $target . '/' . $entry );
                            continue;
                        }
                        copy( $Entry, $target . '/' . utf8_encode($entry) );
                    }

                    $d->close();
                }else {
                    copy( $source, $target );
                }
            }
            full_copy_src($carpetaSrc, $rutaSrc);



  
    
 
            
            
            if (!copy($carpetaSeccion1, $rutaSeccion1)) 
            {
                echo "Error al copiar 1...\n";
            }
            if (!copy($carpetaSeccion2, $rutaSeccion2)) 
            {
                echo "Error al copiar 2...\n";
            }
            if (!copy($carpetaSeccion3, $rutaSeccion3)) 
            {
                echo "Error al copiar 3...\n";
            }
            if (!copy($carpetaSeccion4, $rutaSeccion4)) 
            {
                echo "Error al copiar 4...\n";
            }
            if (!copy($carpetaSeccion5, $rutaSeccion5)) 
            {
                echo "Error al copiar 5...\n";
            }
                if (!copy($carpetaSeccion5_2, $rutaSeccion5_2)) 
                {
                    echo "Error al copiar 2...\n";
                }
                if (!copy($carpetaSeccion5_3, $rutaSeccion5_3)) 
                {
                    echo "Error al copiar 3...\n";
                }
                if (!copy($carpetaSeccion5_4, $rutaSeccion5_4)) 
                {
                    echo "Error al copiar 4...\n";
                }
                if (!copy($carpetaSeccion5_5, $rutaSeccion5_5)) 
                {
                    echo "Error al copiar 5...\n";
                }
                if (!copy($carpetaSeccion5_6, $rutaSeccion5_6)) 
                {
                    echo "Error al copiar 6...\n";
                }
                if (!copy($carpetaSeccion5_7, $rutaSeccion5_7)) 
                {
                    echo "Error al copiar 7...\n";
                }
                if (!copy($carpetaSeccion5_8, $rutaSeccion5_8)) 
                {
                    echo "Error al copiar 8...\n";
                }
                if (!copy($carpetaSeccion5_9, $rutaSeccion5_9)) 
                {
                    echo "Error al copiar 9...\n";
                }
                if (!copy($carpetaSeccion5_10, $rutaSeccion5_10)) 
                {
                    echo "Error al copiar 10...\n";
                }
                if (!copy($carpetaSeccion5_11, $rutaSeccion5_11)) 
                {
                    echo "Error al copiar 11...\n";
                }
                if (!copy($carpetaSeccion5_12, $rutaSeccion5_12)) 
                {
                    echo "Error al copiar 12...\n";
                }


        }
            
            
            
            
           // echo "<br> CREADO TODO<br>";
            $_SESSION['plantillaCreada'] = 1;
            header("Location: ../index.php");
            //if (isset($_SESSION['plantillaCreada']) && $_SESSION['plantillaCreada'] == 1) {}
           
        
            
            
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






