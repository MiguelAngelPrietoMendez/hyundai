<?php
    
                    
   $resultHeader= $mysqli->query("SELECT * FROM tbl_header where id_plantilla=".$rowPlantilla["id_plantillas"]."");
   $rowHeader = $resultHeader->fetch_array();
    

?>
  <div class="section">
      <div class="container">
        <div class="row" >
          <div class="col-md-12" >
            <div class="navbar  navbar-static-top">
              <div class="container" id="divNav">
                <div class="navbar-header" id="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a href="https://www.hyundai.com.co/" accesskey="" class="navbar-brand" id="navbar-brand"><img id="logo" src="src/img/logo.png" alt="" ></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                  <ul  class="nav navbar-nav navbar-right">
                    <?php
                    for($i=1 ; $i<=5 ;$i++)
                    {
                        if($rowHeader["texto_".$i."_header"]!="")
                        {
                            if($i>1)
                            { 
                                ?>
                                <li class="liMenu">
                                    <a class="aNav" href="<?php echo $rowHeader["url_".$i."_header"]; ?>"><?php echo $rowHeader["texto_".$i."_header"]; ?></a>
                                 </li>
                                 <?php
                                 $i2=$i+1;
                                 $i3=$i+2; 
                                 $i4=$i+3;
                                 $i5=$i+4; 
                                 if((isset($rowHeader["texto_".$i2."_header"]) && $rowHeader["texto_".$i2."_header"]!="") || 
                                    (isset($rowHeader["texto_".$i3."_header"]) && $rowHeader["texto_".$i3."_header"]!="") ||
                                    (isset($rowHeader["texto_".$i4."_header"]) && $rowHeader["texto_".$i4."_header"]!="") ||
                                    (isset($rowHeader["texto_".$i5."_header"]) && $rowHeader["texto_".$i5."_header"]!="") 
                                   )
                                 {
                                    ?>
                                    <hr class="hrNav">
                                    <?php
                                 } 
                                 
                            }else
                            {
                                ?>
                                <li class="active liMenu">
                                    <a class="aNav"  href="<?php echo $rowHeader["url_".$i."_header"]; ?>"><?php echo $rowHeader["texto_".$i."_header"]; ?></a>
                                </li>
                                <?php
                                 $in2=$i+1;
                                 $in3=$i+2; 
                                 $in4=$i+3;
                                 $in5=$i+4; 
                                 if((isset($rowHeader["texto_".$in2."_header"]) && $rowHeader["texto_".$in2."_header"]!="") || 
                                    (isset($rowHeader["texto_".$in3."_header"]) && $rowHeader["texto_".$in3."_header"]!="") ||
                                    (isset($rowHeader["texto_".$in4."_header"]) && $rowHeader["texto_".$in4."_header"]!="") ||
                                    (isset($rowHeader["texto_".$in5."_header"]) && $rowHeader["texto_".$in5."_header"]!="") 
                                   )
                                 {
                                    ?>
                                    <hr class="hrNav">
                                    <?php
                                 } 
                              
                            }
                        }
                    }
                        
                    
                    ?>
                    
                    <!--<hr class="hrNav">
                    <li class="liMenu">
                      <a class="aNav" onclick="goPag('viewMundoEon');">MUNDO EON</a>
                    </li>-->
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>