<?php
$resultSeccion3 = $mysqli->query("SELECT * FROM tbl_seccion_3 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion3 = $resultSeccion3->fetch_array();
?>
<br><br>

<div class="col-md-12 text-center" id="divBtnCampanaTit">
    <a class="btn btn-default btn-lg" id="btnPlayList"><?php echo $rowSeccion3["titulo_1_texto_seccion_3"]; ?></a>
    <hr id="hr">
</div>

<div class="section">
    <div class="container">
        <div class="row" id="divRowImgsMusic">
            <img id="imgMusic1" src="<?php echo $rowSeccion3["imagen_1_seccion_3"]; ?>" class="img-responsive">
            <img id="imgMusic2" src="<?php echo $rowSeccion3["imagen_2_seccion_3"]; ?>" class="img-responsive">
            <img id="imgMusic3" src="<?php echo $rowSeccion3["imagen_3_seccion_3"]; ?>" class="img-responsive">
        </div>

        <div class="row" id="divRowImgsMusic3">
            <center>
                <img id="imgMusic1" src="<?php echo $rowSeccion3["imagen_123_table_seccion_3"]; ?>" class="img-responsive">
            </center>
        </div>
        
        <div class="row" id="divRowImgsMusic2">
            <center>
                <img id="imgMusic1" src="<?php echo $rowSeccion3["imagen_1_mobile_seccion_3"]; ?>" class="img-responsive">
                <img id="imgMusic2" src="<?php echo $rowSeccion3["imagen_2_mobile_seccion_3"]; ?>" class="img-responsive">
                <img id="imgMusic3" src="<?php echo $rowSeccion3["imagen_3_mobile_seccion_3"]; ?>" class="img-responsive">
            </center>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row" id="divRowImg">
            <div class="col-md-12" id="col-md-12-frame-spotify">
                <iframe id="spotify" src="https://embed.spotify.com/?uri=spotify:user:<?php echo $rowSeccion3["playlist_user"]; ?>:playlist:<?php echo $rowSeccion3["playlist_list"]; ?>"  frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="section" id="secVerMasFotos">
    <div class="container">
        <div class="row" id="rowImgTextPlayList">
            <div class="col-md-12 text-center" id="divBtnCotizaMusic">

                <a href="<?php echo $rowSeccion3["titulo_2_url_seccion_3"]; ?>" target="_blank" class="btn btn-default btn-lg" id="btnCotizaloAqui">COTIZALO AQUÍ</a>
                <a class="btn btn-default btn-lg" id="btnCompartirPlay" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                <hr id="hr">
                <br>
                <div id="fullcarousel-example" data-interval="5000" class="carousel slide"
                     data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo $rowSeccion3["galeria_imagen_1_seccion_3"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </div>

                        <div class="item">
                            <img src="<?php echo $rowSeccion3["galeria_imagen_2_seccion_3"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev">
                        <img id="flechaAtrasPlaylist" src="src/img/eon-music/flecha-1.png" alt="EON TECH nuevo Hyundai" class="icon-prev text-success"/>
                        <!--<i class="fa fa-5x fa-angle-left icon-prev text-success"></i>-->
                    </a>
                    <a class="right carousel-control" href="#fullcarousel-example" data-slide="next">
                        <img id="flechaNextPlaylist" src="src/img/eon-music/flecha-2.png" alt="EON TECH nuevo Hyundai" class="icon-next text-success"/>
                        <!--<i class="fa fa-5x fa-angle-right icon-next text-success"></i>-->
                    </a>
                </div>


            </div>
        </div>
    </div>
</div> 


<?php
include 'controls/modalCompartir/playlist.php';
?>

<div class="section">
    <div class="container">
        <div class="row" id="divRowImg">
            <div class="col-md-12">
                <img id="skills-produxto" src="<?php echo $rowSeccion3["imagen_productos_seccion_3"]; ?>" alt="EON TECH nuevo Hyundai" class="center-block img-responsive">
                <img id="skills-produxto-3x3" src="<?php echo $rowSeccion3["imagen_productos_mobile_seccion_3"]; ?>" alt="EON TECH nuevo Hyundai" class="center-block img-responsive"/>

            </div>
        </div>
    </div>
</div>



<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_CO/sdk.js#xfbml=1&version=v2.4&appId=1644114939199526";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" data-href="http://localhost/hyundai/index.php" data-layout="button"></div>
-->

