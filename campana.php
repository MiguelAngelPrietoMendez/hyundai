<?php
    include 'models/access_db.php';
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>HYUNDAI</title>
        <?php
        include './sections/head.php';
        ?>
      
    </head>
    <html>
  
 
  <body>
      <br class="hidden-sm hidden-xs"><br class="hidden-sm hidden-xs"><br>
    <?php
    include './sections/header.php';
    ?>
    
    <div class="section">
      <div class="container">
        <div class="row" id="divRowImg">
          <div class="col-md-12">
            
            <img src="src/img/carro.PNG" alt=""  class="center-block img-responsive"/>
            
            <img src="src/img/veneficio.PNG" alt="" class="center-block img-responsive"/>
            
            
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" id="divBtnCampana">
            <a class="btn btn-default btn-lg" id="btnCampana">CAMPAÑA</a>
            <hr id="hr">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="embed-responsive embed-responsive-16by9" id="divImgVideo">
<!--              <video class="embed-responsive-item" id="video1" loop="" autoplay="" preload=""
                poster="poster.png">
                <source src="fondo.mp4" type="video/mp4">
                  <source src="videos/video1.webm" type="video/webm">
                    <source src="videos/video1.ogv" type="video/ogg">
              </video>-->
                <img id="imgVideo" src="src/img/imgVideo.PNG" alt=""/>
                
                <video id="video" width="320" height="240" controls >
                    <source src="src/video/fondo.mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                
            </div>
          </div>
          <div class="col-md-5 text-left" id="divTxtCamapana">
              <h4 id="h4"><strong>QUERERLO ES TENERLO EN JULIO LLEGA</strong></h4>
            <hr id="hr2">
            <h4 id="h4">La desición más inteligente es comprar tu HYUNDAI con precios especiales.</h4>
            <hr id="hr2">
            <p id="pItalic">Hasta el 100% de financiación *</p>
            <a class="btn btn-primary" id="btnConoceMasAqui">CONOCE MÁS AQUÍ</a>
          </div>
        </div>
      </div>
    </div>
    <?php
    include './sections/footer.php';
    ?>
   
  </body>

</html>
</html>
