<?php

require_once ('libraries/Mobile-Detect-master/Mobile_Detect.php');
$detect = new Mobile_Detect();

$resultSeccion1 = $mysqli->query("SELECT * FROM tbl_seccion_1 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion1 = $resultSeccion1->fetch_array();
?>
<script src="js/jsHyundai.js" type="text/javascript"></script>

<div class="section">

    <div class="container">

        <div class="row" id="divRowImg">

            <div class="col-md-12">



                <div id="contenedorImg1Home">


                    <img  id="imgHeader3" src="<?php echo $rowSeccion1["imagen_carro_tablet_seccion_1"]; ?>" alt="<?php echo $rowSeccion1["alt_imagenes_seccion_1"]; ?>" class="center-block img-responsive"/>

                    <img id="imgHeader"  src="<?php echo $rowSeccion1["imagen_carro_seccion_1"]; ?>" alt="<?php echo $rowSeccion1["alt_imagenes_seccion_1"]; ?>" class="center-block img-responsive"/>
                    <div id="divAnimado">
                        <img class="center-block img-responsive caja_animada"  src="<?php echo $rowSeccion1["imagen_animada_seccion_1"]; ?>" alt="<?php echo $rowSeccion1["alt_imagenes_seccion_1"]; ?>"/>
                    </div> 
                    <img id="imgHeader2" src="<?php echo $rowSeccion1["imagen_carro_mobile_seccion_1"]; ?>" alt="<?php echo $rowSeccion1["alt_imagenes_seccion_1"]; ?>" class="center-block img-responsive"/>
                    <div id="btnsImgHome">
                        <a href="<?php echo $rowSeccion1["boton_1_url_seccion_1"]; ?>" target="_blank" class="btn  " id="btnConoce">CONÓCELO AQUÍ</a>
                        <a class="btn " id="btnComparte" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                        <a class="btn btn-default btn-lg" href="<?php echo $rowSeccion1["boton_3_url_seccion_1"]; ?>" target="_blank" id="btnCotizaHome">¡COTIZA AQUÍ!</a>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>



<div class="section">

    <div class="container">

        <div class="row" id="divRowImg">

            <div class="col-md-12">

                <img id="skills-produxto" src="<?php echo $rowSeccion1["imagen_productos_seccion_1"]; ?>" alt="EON TECH nuevo Hyundai" class="center-block img-responsive">

                <img id="skills-produxto-3x3" src="<?php echo $rowSeccion1["imagen_productos_mobile_seccion_1"]; ?>" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>



            </div>

        </div>

    </div>

</div>



<div class="col-md-12 text-center" id="divBtnCampanaTit">

    <a class="btn btn-default btn-lg" id="btnHome"><?php echo $rowSeccion1["titulo_texto_seccion_1"]; ?></a>

    <hr id="hr">

</div>

<div class="section">

    <div class="container">

        <div class="row" id="rowImgTextHome">

            <div class="col-md-7" id="col-md-7-vide-home">

                <div class="embed-responsive embed-responsive-16by9" id="divImgVideo">


                    <!--<iframe width="400" height="315" src="https://www.youtube.com/embed/BIBSpBCAnAg" frameborder="0" allowfullscreen></iframe>-->
                    <?php
                        $step1=explode('v=', $rowSeccion1["video_url_seccion_1"]);
                        $step2 =explode('&',$step1[1]);
                        $vedio_id = $step2[0];
                        echo '<iframe width="400" height="315" frameborder="0" allowfullscreen
                                    src="http://www.youtube.com/embed/'. $vedio_id.'" >
                              </iframe>'; 
                    ?>
 
                </div>

            </div>

            <div class="col-md-5 text-left" id="divTxtCamapana">

                <h4 id="h4">

                   <?php echo $rowSeccion1["texto_1_seccion_1"]; ?>

                </h4>

                <hr id="hr2">
                <p id="pItalic"><?php echo utf8_encode($rowSeccion1["texto_2_seccion_1"]); ?></p>
                <a href="<?php echo utf8_encode($rowSeccion1["boton_4_url_seccion_1"]); ?>" target="_blank" class="btn btn-primary" id="btnConoceMasAqui">¡COTIZA AQUÍ!</a>

            </div>

        </div>

    </div>

</div>






<?php

include 'controls/modalCompartir/home.php';
?>