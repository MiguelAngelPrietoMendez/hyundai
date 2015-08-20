<?php
$resultSeccion5 = $mysqli->query("SELECT * FROM tbl_seccion_5 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion5 = $resultSeccion5->fetch_array();
?>


<br><br>
          <div class="col-md-12 text-center" id="divBtnCampanaTit">
              <a class="btn btn-default btn-lg" id="btnGaleria"><?php echo utf8_encode($rowSeccion5["titulo_texto_seccion_5"]); ?></a>
            <hr id="hr">
          </div>
        <div class="section">
      <div class="container">
        <div class="row" id="rowImgTextTecnologia">
            <div class="col-md-6">
                <img class="img-responsive" id="textTecnologia" src="<?php echo $rowSeccion5["imagen_1_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" id="imgTecnologia" src="<?php echo $rowSeccion5["imagen_2_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
            </div>
           
        </div>
          <div class="row" id="rowImgTextTecnologia2">
            
              <center>
                <img class="img-responsive" id="textTecnologia" src="<?php echo $rowSeccion5["imagen_12_mobile_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
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
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-1.jpg" data-target="#image-gallery" >
                            <img id="Galeri_1" src="<?php echo $rowSeccion5["galeria_img_1_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                            <img id="Galeri_1_columnas" src="<?php echo $rowSeccion5["galeria_img_1_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_2" >
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-2-expandidas.jpg" data-target="#image-gallery" >

                           <img id="Galeri_2" src="<?php echo $rowSeccion5["galeria_img_2_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                           <img id="Galeri_2_columnas" src="<?php echo $rowSeccion5["galeria_img_2_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                           
                    </div>
                    <div id="divGaleri_3">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-3-expandidas.jpg" data-target="#image-gallery" >

                           <img  id="Galeri_3" src="<?php echo $rowSeccion5["galeria_img_3_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                           <img id="Galeri_3_columnas" src="<?php echo $rowSeccion5["galeria_img_3_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_4">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-4-expandidas.jpg" data-target="#image-gallery" >

                            <img id="Galeri_4" src="<?php echo $rowSeccion5["galeria_img_4_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_4_columnas" src="<?php echo $rowSeccion5["galeria_img_4_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_5">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-5-expandidas.jpg" data-target="#image-gallery" >
                           <img  id="Galeri_5" src="<?php echo $rowSeccion5["galeria_img_5_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_5_columnas" src="<?php echo $rowSeccion5["galeria_img_5_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
                    <div id="divGaleri_6">
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-1-expandidas.jpg" data-target="#image-gallery" >
                        <img  id="Galeri_6" src="<?php echo $rowSeccion5["galeria_img_6_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>   
                            <img id="Galeri_6_columnas" src="<?php echo $rowSeccion5["galeria_img_6_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                    </div>
              </div>
                  
                <!--SLEIDER 2-->
                <div id="contenedorSlider2">
                <div id="divGaleri_1">
                    <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-1-expandidas.jpg" data-target="#image-gallery2" >
                        <img id="Galeri_7" src="<?php echo $rowSeccion5["galeria_img_7_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_7_columnas" src="<?php echo $rowSeccion5["galeria_img_7_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_2" >
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-2-expandidas.jpg" data-target="#image-gallery2" >
                                
                       <img id="Galeri_8" src="<?php echo $rowSeccion5["galeria_img_8_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_8_columnas" src="<?php echo $rowSeccion5["galeria_img_8_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_3">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-2-expandidas.jpg" data-target="#image-gallery2" >
                                
                       <img  id="Galeri_9" src="<?php echo $rowSeccion5["galeria_img_9_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_9_columnas" src="<?php echo $rowSeccion5["galeria_img_9_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_4">
                    <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-2-expandidas.jpg" data-target="#image-gallery2" >
                                
                        <img id="Galeri_10" src="<?php echo $rowSeccion5["galeria_img_10_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_10_columnas" src="<?php echo $rowSeccion5["galeria_img_10_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_5">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-5-expandidas.jpg" data-target="#image-gallery2" >
                       <img  id="Galeri_11" src="<?php echo $rowSeccion5["galeria_img_11_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_11_columnas" src="<?php echo $rowSeccion5["galeria_img_11_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        </a>
                </div>
                <div id="divGaleri_6">
                   <a class="thumbnail2" href="#" data-image-id2="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="src/img/galeria/foto-1-expandidas.jpg" data-target="#image-gallery2" >
                    <img  id="Galeri_12" src="<?php echo $rowSeccion5["galeria_img_12_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
                        <img id="Galeri_12_columnas" src="<?php echo $rowSeccion5["galeria_img_12_movil_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/>
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
              <div class="col-md-12 text-center" id="divBtnGaleriaMostrar">
                  
                <a class="btn btn-default btn-lg" id="btnVerMasFotos"><img src="<?php echo $rowSeccion5["boton_flecha_abajo_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/></a>
                <hr>
              </div>
            </div> 
          </div>
        </div> 
 
          
        <div class="section" id="secVerFotosAnteriores">
          <div class="container">
            <div class="row" id="rowBtnVerGaleria">
              <div class="col-md-12 text-center" id="divBtnGaleriaMostrar">
                  
                <a class="btn btn-default btn-lg" id="btnVerFotosAnteriores"><img src="<?php echo $rowSeccion5["boton_flecha_arriba_seccion_5"]; ?>" alt="EON TECH nuevo Hyundai"/></a>
                <hr>
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
                    <img alt="EON TECH nuevo Hyundai" id="image-gallery-image" class="img-responsive" src="">
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
                    <img alt="EON TECH nuevo Hyundai" id="image-gallery-image2" class="img-responsive" src="">
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
//        var i=0;
//        for(i=1;i<=6;i++)
//        {
//            if($(window).width() <= 1200)
//            {
//                //alert('Su resolución de pantalla es igual o menor a 1200px');
//                $("#Galeri_"+i+"").attr("src","src/img/galeria/2-columnas/foto-"+i+".png");
//            }
//        }
        
        
       


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