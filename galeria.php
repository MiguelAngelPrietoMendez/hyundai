<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  prefix="og: http://ogp.me/ns#">
    <head>
        
        <title>Galeria</title>
        <meta charset="utf-8">
        <meta name="Hyundai" content="Nuevo EON TECH">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>


        <!--<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        <script src="js/bootstrap/bootstrap.js" type="text/javascript"></script>
        <!--<script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">-->
        <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-validate/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="js/bootstrap/fileinput.js" type="text/javascript"></script>
        <script src="js/bootstrap/fileinput.min.js" type="text/javascript"></script>
        <script src="js/bootstrap/fileinput_locale_es.js" type="text/javascript"></script>
        <link href="css/bootstrap/fileinput.css" rel="stylesheet" type="text/css"/>
        <link href="css/styleHyundai.css" rel="stylesheet" type="text/css"/>
        <script src="js/jsHyundai.js" type="text/javascript"></script>
          

        <link href="http://www.youoneagency.com/hyundai/src/img/galeria/foto-1.jpg" rel="image_src" />
        <meta property="og:title" content="EON TECH Nueva edición de HYUNDAI" />
        <meta property="og:description" content="Para ti que necesitas estar siempre conectado te presentamos EON TECH una nueva edición de HYUNDAI. Haz clic aquí y conoce lo que HYUNDAI tiene preparado para ti." />
        <meta property="og:url" content="http://www.youoneagency.com/hyundai/galeria.php" />
        <meta property="og:image" content="http://www.youoneagency.com/hyundai/src/img/galeria/foto-1.jpg" />


      
    </head>
   
  <body>

    <?php
    include './controls/detectar_navegador/detectar_navegador.php';

    if($info["browser"] =="OTHER")
    {
        /*
         echo "Sistema operativo: ".$info["os"]."<br>";
    echo "Navegador: ".$info["browser"]."<br>";
    echo "Versión: ".$info["version"]."<br>";
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
    */
        ?>
        <div class="alert alert-warning">
            <center>
                <br>
          <strong>Alerta!</strong> El navegador que estas usando es una intertet explore para una mejor navegavilidad utiliza <a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank" >Google Chrome</a> u otro navegador
                <br>
            </center>
        </div>
        <?php
    }

    ?>




      <br class="hidden-sm hidden-xs"><br class="hidden-sm hidden-xs"><br>
    <?php
    include './sections/header.php';
    ?>
      <div id="contenedorPrincipal">



<br><br>
          <div class="col-md-12 text-center" id="divBtnCampanaTit">
            <a class="btn btn-default btn-lg" id="btnGaleria">GALERÍA</a>
            <hr id="hr">
          </div>
        <div class="section">
      <div class="container">
        <div class="row" id="rowImgTextTecnologia">
            <div class="col-md-6">
                <img class="img-responsive" id="textTecnologia" src="src/img/tecnologia/texto-1.png" alt="EON TECH nuevo Hyundai"/>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" id="imgTecnologia" src="src/img/tecnologia/logo-eon-tech.png" alt="EON TECH nuevo Hyundai"/>
            </div>
           
        </div>
          <div class="row" id="rowImgTextTecnologia2">
            
              <center>
                <img class="img-responsive" id="textTecnologia" src="src/img/mundo-eon/skills-tablet.png" alt="EON TECH nuevo Hyundai"/>
            </center>
        </div>
      </div>
    </div>
      <br>
    <div class="section">
      <div class="container">
        <div class="row" id="divRowImg">
          <div class="col-md-12" id="col-md-12-galeria">
            
              <center>
                  
                <!--SLEIDER 1-->
                <div id="contenedorSlider">
                    <div id="divGaleri_1">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-1-expandidas.jpg" data-target="#image-gallery" >
                            
<!--                            <video width="320" height="240" controls>
                                <source src="../src/video/home.mp4" type="video/mp4">
                                Your browser does not support the <code>video</code> tag.
                            </video>-->
                            
                            <img id="Galeri_1" src="src/img/galeria/foto-1.jpg" alt="EON TECH nuevo Hyundai"/>
                            <img id="Galeri_1_columnas" src="src/img/galeria/2-columnas/foto-1.png" alt="EON TECH nuevo Hyundai"/>
                        
                        </a>
                    </div>
                    <div id="divGaleri_2" >
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-2-expandidas.jpg" data-target="#image-gallery" >

                           <img id="Galeri_2" src="src/img/galeria/foto-2.jpg" alt="EON TECH nuevo Hyundai"/>
                           <img id="Galeri_2_columnas" src="src/img/galeria/2-columnas/foto-2.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                           
                    </div>
                    <div id="divGaleri_3">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-3-expandidas.jpg" data-target="#image-gallery" >

                           <img  id="Galeri_3" src="src/img/galeria/foto-3.jpg" alt="EON TECH nuevo Hyundai"/>
                           <img id="Galeri_3_columnas" src="src/img/galeria/2-columnas/foto-3.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-4-expandidas.jpg" data-target="#image-gallery" >

                            <img id="Galeri_4" src="src/img/galeria/foto-4.jpg" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_4_columnas" src="src/img/galeria/2-columnas/foto-4.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_5">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-5-expandidas.jpg" data-target="#image-gallery" >
                           <img  id="Galeri_5" src="src/img/galeria/foto-5.jpg" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_5_columnas" src="src/img/galeria/2-columnas/foto-5.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_6">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-6-expandidas.jpg" data-target="#image-gallery" >
                        <img  id="Galeri_6" src="src/img/galeria/foto-6.jpg" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_6_columnas" src="src/img/galeria/2-columnas/foto-6.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
              </div>
                  
                <!--SLEIDER 2-->
                <div id="contenedorSlider2">
                <div id="divGaleri_1">
                    <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-7-expandidas.png" data-target="#image-gallery2" >
                        <img id="Galeri_7" src="src/img/galeria/foto-7.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_7_columnas" src="src/img/galeria/2-columnas/foto-7.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_2" >
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-8-expandidas.png" data-target="#image-gallery2" >
                                
                       <img id="Galeri_8" src="src/img/galeria/foto-8.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_8_columnas" src="src/img/galeria/2-columnas/foto-8.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_3">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-9-expandidas.png" data-target="#image-gallery2" >
                                
                       <img  id="Galeri_9" src="src/img/galeria/foto-9.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_9_columnas" src="src/img/galeria/2-columnas/foto-9.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_4">
                    <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-10-expandidas.png" data-target="#image-gallery2" >
                                
                        <img id="Galeri_10" src="src/img/galeria/foto-10.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_10_columnas" src="src/img/galeria/2-columnas/foto-10.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_5">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-11-expandidas.png" data-target="#image-gallery2" >
                       <img  id="Galeri_11" src="src/img/galeria/foto-11.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_11_columnas" src="src/img/galeria/2-columnas/foto-11.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_6">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-12-expandidas.png" data-target="#image-gallery2" >
                    <img  id="Galeri_12" src="src/img/galeria/foto-12.png" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_12_columnas" src="src/img/galeria/2-columnas/foto-12.png" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
              </div>
              </center>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="secVerMasFotos">
          <div class="container">
            <div class="row" id="rowBtnVerGaleria">
              <div class="col-md-12 text-center" id="divBtnCampana">
                  
                <a class="btn btn-default btn-lg" id="btnVerMasFotos"><img src="src/img/galeria/ver-mas-fotos.png" alt="EON TECH nuevo Hyundai"/></a>
                <hr id="hr">
              </div>
            </div>
          </div>
        </div> 


        <div class="section" id="secVerFotosAnteriores">
          <div class="container">
            <div class="row" id="rowBtnVerGaleria">
              <div class="col-md-12 text-center" id="divBtnCampana">
                  
                <a class="btn btn-default btn-lg" id="btnVerFotosAnteriores"><img src="src/img/galeria/ver-mas-fotos-arriba.png" alt="EON TECH nuevo Hyundai"/></a>
                <hr id="hr">
              </div>
            </div>
          </div>
        </div> 


    <!--MODAL NUMERO 1-->
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="cerrarModal" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<h4 class="modal-title" id="image-gallery-title"></h4>-->
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive" src="">

                </div>
                <div class="modal-footer">

                    <div class="col-md-2">
                        <button  type="button" class="btn btn-primary" id="show-previous-image"></button>
                    </div>

                    <div class="col-md-8 ">
<!--                        This text will be overwritten by jQuery-->
                    </div>

                    <div class="col-md-2">
                        <button  type="button" id="show-next-image" class="btn btn-default"></button>
                    </div>
                </div>
                <div style="margin-top: -8%;">
                    <center>
                              
                                  
                                <a target="_blank" id="valorFacebook" title="Facebook" class="fb-share-button" href="">
                                    
                                    <h3 id="btnCompartirGaleriaModal" >COMPARTIR</h3>
                                </a>
                                
                            
                        </center>
                </div>
            </div>
        </div>
    </div>

    <!--MODAL NUMERO 2-->
    <div class="modal fade" id="image-gallery2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="cerrarModal" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<h4 class="modal-title" id="image-gallery-title2"></h4>-->
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image2" class="img-responsive" src="">
                </div>
                <div class="modal-footer">

                    <div class="col-md-2">
                        <button  type="button" class="btn btn-primary" id="show-previous-image2"></button>
                    </div>

                    <div class="col-md-8 ">
<!--                        This text will be overwritten by jQuery-->
                    </div>

                    <div class="col-md-2">
                        <button  type="button" id="show-next-image2" class="btn btn-default"></button>
                    </div>
                </div>
                <div style="margin-top: -8%;">
                    <center>
                              
                                  
                                <a href="http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php" target="_blank" id="valorFacebook" title="Facebook" class="fb-share-button" href="">
                                    
                                    <h3 id="btnCompartirGaleriaModal" >COMPARTIR</h3>
                                </a>
                                
                            
                        </center>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    $(function()
    {
       $("#btnVerMasFotos").click(function()
       {
           
            $("#secVerMasFotos").hide();
            $("#secVerFotosAnteriores").toggle("slow");
            $("#contenedorSlider").slideUp();
            $("#contenedorSlider2").slideToggle();
           
       });
       
       $("#btnVerFotosAnteriores").click(function()
       {
           
            $("#secVerFotosAnteriores").hide();
            $("#secVerMasFotos").toggle("slow");
            
            $("#contenedorSlider2").slideUp();
            $("#contenedorSlider").slideToggle();
           
       });
       
    });



    $(document).ready(function()
    {
            // GALERIA 1
            loadGallery(true, 'a.thumbnail');
           
            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current)
            {
                $('#show-previous-image, #show-next-image').show();
                if(counter_max == counter_current){
                    $('#show-next-image').hide();
                } else if (counter_current == 1){
                    $('#show-previous-image').hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery(setIDs, setClickAttr){
                var current_image,
                    selector,
                    counter = 0;

                $('#show-next-image, #show-previous-image').click(function(){
                    if($(this).attr('id') == 'show-previous-image'){
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

                function updateGallery(selector) {
                    var $sel = selector;
                    current_image = $sel.data('image-id');
                    $('#image-gallery-caption').text($sel.data('caption'));
                    $('#image-gallery-title').text($sel.data('title'));
                    $('#image-gallery-image').attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id'));


                    if(current_image===1)
                    {
                        //$('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?s=100&p[url]=http://www.youoneagency.com/hyundai/galeria.php&p[title]=IMAGEN NUMERO 1&p[summary]=Un buen recurso para aprender a compartir enlaces por código&&p[images][0]=http://www.youoneagency.com/hyundai/src/img/eon-tech/carro-2.png');
                          $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                      
                      var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===2)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria_2.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===3)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria_3.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===4)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria_4.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===5)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria_5.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===6)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria_6.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===7)     
                    {
                        alert(current_image);
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/index.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===8)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===9)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===10)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===11)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }else if(current_image===12)
                    {
                       $('#valorFacebook').attr('href','http://www.facebook.com/sharer.php?u=http://www.youoneagency.com/hyundai/galeria.php');
                       var valor=$('#valorFacebook').attr('href');
                       
                    }
                    
                     //alert(valor);
                  



                }

                if(setIDs == true){
                    $('[data-image-id]').each(function(){
                        counter++;
                        $(this).attr('data-image-id',counter);
                    });
                }
                $(setClickAttr).on('click',function(){
                    updateGallery($(this));
                });
            }
            
            
            
            /****************  GALERIA 2 **********************/
             loadGallery2(true, 'a.thumbnail2');
             //This function disables buttons when needed
            function disableButtons(counter_max, counter_current){
                $('#show-previous-image2, #show-next-image2').show();
                if(counter_max == counter_current){
                    $('#show-next-image2').hide();
                } else if (counter_current == 1){
                    $('#show-previous-image2').hide();
                }
            }

            /**
             *
             * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
             * @param setClickAttr  Sets the attribute for the click handler.
             */

            function loadGallery2(setIDs, setClickAttr){
                var current_image,
                    selector,
                    counter = 0;

                $('#show-next-image2, #show-previous-image2').click(function(){
                    if($(this).attr('id') == 'show-previous-image2'){
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id2="' + current_image + '"]');
                    updateGallery(selector);
                });

                function updateGallery(selector) {
                    var $sel = selector;
                    current_image = $sel.data('image-id2');
                    $('#image-gallery-caption2').text($sel.data('caption'));
                    $('#image-gallery-title2').text($sel.data('title'));
                    $('#image-gallery-image2').attr('src', $sel.data('image'));
                    disableButtons(counter, $sel.data('image-id2'));
                }

                if(setIDs == true){
                    $('[data-image-id2]').each(function(){
                        counter++;
                        $(this).attr('data-image-id2',counter);
                    });
                }
                $(setClickAttr).on('click',function(){
                    updateGallery($(this));
                });
            }
            
            
            
            
            
            
            
        });




</script>

      </div>
    <?php
    include './sections/footer.php';
    ?>
   
  </body>

</html>
</html>
