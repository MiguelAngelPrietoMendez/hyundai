<?php
   $resultFooter= $mysqli->query("SELECT * FROM tbl_footer where id_plantilla=".$rowPlantilla["id_plantillas"]."");
   $rowFooter = $resultFooter->fetch_array();
?>
       
<hr>
<footer class="section">
      <div class="container">
        
        <div class="row">
          <div class="col-sm-12">
              <p><?php echo utf8_encode($rowFooter["texto_footer"]); ?>
              &nbsp;<a target="_blank" href="<?php echo $rowFooter["url_icono_facebook_footer"]; ?>">

              <img id="footerFacebook" src="<?php echo $rowFooter["icono_footer_facebook"]; ?>" alt=""/>
              </a>&nbsp;&nbsp;
              &nbsp;<a target="_blank" href="<?php echo $rowFooter["url_icono_twitter_footer"]; ?>">

              <img id="footerTwitter" src="<?php echo $rowFooter["icono_footer_twitter"]; ?>" alt=""/>
            </a>&nbsp;&nbsp;
              &nbsp;<a target="_blank" href="<?php echo $rowFooter["url_icono_instagram_footer"]; ?>">

              <img id="footerInstagram" src="<?php echo $rowFooter["icono_footer_instagram"]; ?>" alt=""/>
            </a>&nbsp;&nbsp;
              &nbsp;<a target="_blank" href="<?php echo $rowFooter["url_icono_youtube_footer"]; ?>">

              <img id="footerYoutube" src="<?php echo $rowFooter["icono_footer_youtube"]; ?>" alt=""/>
            </a>
            </p> 
            <p></p>
          </div>
        </div>
      </div>
    <br><br>
    </footer> 