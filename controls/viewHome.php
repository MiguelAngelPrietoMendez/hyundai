<?php
require_once ('libraries/Mobile-Detect-master/Mobile_Detect.php');
$detect = new Mobile_Detect();
?>


<script src="js/jsHyundai.js" type="text/javascript"></script>



<div class="section">

    <div class="container">

        <div class="row" id="divRowImg">

            <div class="col-md-12">

 

                <div id="contenedorImg1Home">
                    
                    
                    <img  id="imgHeader3" src="src/img/home/Home-Carro-Domingo.jpg" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>
                    
                            <img id="imgHeader"  src="src/img/home/eon-tech-car.jpg" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>
                    <div id="divAnimado">
                        <img class="center-block img-responsive caja_animada"  src="src/img/home/Logo-EON.png" alt="EON TECH nuevo Hyundai"/>
                
                    </div>
            
                            
                      

                    <img id="imgHeader2" src="src/img/home/eon-tech-car-tablet.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>
                    
                    <div id="btnsImgHome">


                        
                        <a href="https://www.hyundai.com.co/vehiculo/eon" target="_blank" class="btn  " id="btnConoce">CONÓCELO AQUÍ</a>

                        

                        <a class="btn " id="btnComparte" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>

                        <a class="btn btn-default btn-lg" href="https://www.hyundai.com.co/cotizador/eon​" target="_blank" id="btnCotizaHome">¡COTIZA AQUÍ!</a>
                

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

                <img id="skills-produxto" src="src/img/home/skills-produxto.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive">

                <img id="skills-produxto-3x3" src="src/img/home/skills-produxto-3x3.png" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>



            </div>

        </div>

    </div>

</div>



<div class="col-md-12 text-center" id="divBtnCampanaTit">

    <a class="btn btn-default btn-lg" id="btnHome">CONECTATECH</a>

    <hr id="hr">

</div>

<div class="section">

    <div class="container">

        <div class="row" id="rowImgTextHome">

            <div class="col-md-7" id="col-md-7-vide-home">

                <div class="embed-responsive embed-responsive-16by9" id="divImgVideo">

                 
                    <iframe width="400" height="315" src="https://www.youtube.com/embed/BIBSpBCAnAg" frameborder="0" allowfullscreen></iframe>








                <!--<iframe  width="400" height="315" src="https://www.youtube.com/embed/fZlmwGwr4c8" frameborder="0" allowfullscreen></iframe>-->





                </div>

            </div>

            <div class="col-md-5 text-left" id="divTxtCamapana">

<!--              <h4 id="h4"><strong>QUERERLO ES TENERLO EN JULIO LLEGA</strong></h4>

            <hr id="hr2">-->

                <!--            <h4 id="h4_2">La desición más inteligente es comprar tu HYUNDAI con precios especiales.</h4>
                
                            <hr id="hr2">-->

            <!--<p id="pItalic">Hasta el 100% de financiación *</p>-->

                <h4 id="h4">

                    Cuota diaria desde $4.999*

                </h4>

                <hr id="hr2">

                <p id="pItalic">$0 de cuota inicial. <a target="_blank" href="src/TERMINOS Y CONDICIONES EON TECH AGOSTO.pdf">Términos y condiciones</a></p>

                <!--<a href="controls/download_file.php">Información legal</a> -->

                <a href="https://www.hyundai.com.co/cotizador/eon​" target="_blank" class="btn btn-primary" id="btnConoceMasAqui">¡COTIZA AQUÍ!</a>

            </div>

        </div>

    </div>

</div>






<?php
include 'controls/modalCompartir/home.php';
?>