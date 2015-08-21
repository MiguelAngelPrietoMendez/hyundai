<?php

//include 'access_db.php';
$resultPlantilla= $mysqli->query("SELECT id_plantillas FROM tbl_plantillas where seleccionada='SI'");
$rowPlantilla = $resultPlantilla->fetch_array();
     

//echo $rowPlantilla["id_plantillas"];