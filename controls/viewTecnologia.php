<?php
$resultSeccion4 = $mysqli->query("SELECT * FROM tbl_seccion_4 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion4 = $resultSeccion4->fetch_array();
?>

<br><br>
          <div class="col-md-12 text-center" id="divBtnCampanaTit">
            <a class="btn btn-default btn-lg" id="btnTecnologia">SIEMPRE CONECTADO</a>
            <hr id="hr">
          </div>
      <div class="section">
      <div class="container">
        <div class="row" id="rowImgTextTecnologiaSi">
            <div class="col-md-6">
                <img class="img-responsive" id="textTecnologia" src="src/img/tecnologia/texto-1.png" alt="EON TECH nuevo Hyundai"/>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" id="imgTecnologia" src="src/img/tecnologia/logo-eon-tech.png" alt="EON TECH nuevo Hyundai"/>
            </div>
           
        </div>
        <div class="row" id="rowImgTextTecnologia2">
            
              <center>
                <img class="img-responsive" id="textTecnologia" src="src/img/tecnologia/texto-1.png" alt="EON TECH nuevo Hyundai"/>
            
                <img class="img-responsive" id="imgTecnologia" src="src/img/tecnologia/logo-eon-tech.png" alt="EON TECH nuevo Hyundai"/>
                </center>
        </div>
          
          <div class="row" id="rowImgTextTecnologia">
            <div class="col-md-12">
                <hr id="hrSepararCol-Tecnologia">
            </div>
             
        </div>
      </div>
    </div>
      
    <div class="section">
      <div class="container">
           <!--CONTENEDOR IMG DESCRIPCION 1-->
          <div id='contenedorImgTecnologia'>
            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-1-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-1.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <img id="img-1-tecno-mobile" src="src/img/tecnologia/Tip-1-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">SPOTIFY PLANEA INCLUIR VIDEOS</h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP1">
                  <p id="pContenidoTecnologia">
                    Spotify anunció el miércoles que se lanzará en el mercado del video y los contenidos originales, con la idea de expandir sus fronteras más allá de la música en momentos en que la empresa brega por volverse rentable.
                    
                    El servicio de música en línea y una de las firmas líderes en el boom del contenido por streaming, anunció en Nueva York que quiere ofrecer una plataforma más amplia y personalizada. Esta plataforma actualizada podrá alojar por primera vez videos y, además, ofrecerá noticias y otros contenidos no musicales provistos por grandes grupos mediáticos, algunos de ellos de forma exclusiva.
                    
                    El fundador y director ejecutivo de la compañía sueca, Daniel Ek, dijo queSpotify está respondiendo así al protagonismo cada vez más dominante de los teléfonos inteligentes en la vida moderna. Si bien su principal negocio seguirá siendo la música, el objetivo es disuadir a los usuarios de abrir otras aplicaciones para leer noticias o mirar videos, dijo Ek.
                  
                    La idea nació "cuando comprendimos que tenemos la increíble oportunidad de ponerle una pista de sonido a todo el día, y a toda la vida, en toda su complejidad", añadió el pionero de 32 años.
                    
                  </p>
                  </div>
                  <a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_1" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
            <hr id="hrSepararDivRowImg">


            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-2-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-2.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <img id="img-2-tecno-mobile" src="src/img/tecnologia/Tip-2-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">ANDROID AUTO Y CAR PLAY</h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP2">
                      <p id="pContenidoTecnologia">
                        A lo largo de esta semana hemos conocido diferentes anuncios de confirmación por parte de fabricantes como General Motors o Hyundai para la integración de Android Auto o iOS Car Play en los próximos meses. La llegada de Google y Apple a nuestros salpicaderos tiene previsto cambiar nuestro concepto de infoentretenimiento, y es que con la interfaces de Google y Apple se rompen las reglas tradicionales en tanto al acceso a sistemas multimedia. Con estos sistemas las posibilidades de la interfaz son las mismas para uno y otro coche, dejando en el usuario la capacidad para sacar el máximo provecho al sistema.
                        
                        Por decirlo de algún modo, el desembarco de Android Auto y iOS Car Play pone fecha de caducidad a los caros sistemas de infoentretenimiento ofrecidos por cada fabricante como parte de una larga lista de equipamiento opcional. Android Auto y iOS Car Play serán una herramientas de tipo todo-en-uno que solo necesitarán de la vinculación con tu smartphone, permitiendo así ampliar las posibilidades de tu teléfono una vez te pongas a los mandos del coche.
                        
                        
                      </p>
                  </div>
                  <a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_2" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
            <hr id="hrSepararDivRowImg">
            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-3-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-3.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <img id="img-3-tecno-mobile" src="src/img/tecnologia/Tip-3-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">PLACAS GEEK </h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP3"><p id="pContenidoTecnologia">
                    Ciertamente hay una gran numero de personas creativas en el mundo, pero lo que siempre logran llamar nuestra atención son los geek, ya que siempre buscan la forma de mostrar su afición a ciertas cosas, en el siguiente caso, o tuvieron muchísima suerte, o aplicaron una gran cantidad de creatividad para conseguir las siguientes placas para carros geeks

                  </p>
                  </div>
                  <a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_3" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
          </div>
          
          <!--CONTENEDOR IMG DESCRIPCION 2-->
          <div id='contenedorImgTecnologia2'>
            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-4-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-4.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <img id="img-4-tecno-mobile" src="src/img/tecnologia/Tip-4-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">HYUNDAI ABRE LAS PUERTAS AL FUTURO</h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP4">
                  <p id="pContenidoTecnologia">
                    Hyundai aprovecha los teléfonos inteligentes para crear el primer prototipo de su concepto de conectividad, permitiendo a los usuarios abrir el vehículo sin necesidad de la llave tradicional. También permite visualizar y controlar una serie de funciones del auto desde el teléfono. 
                   
                    Hyundai presentó en Alemania, un adelanto de su nueva tecnología sobre un i30 prototipo, la cual permite bloquear y desbloquear el vehículo con tan solo acercar el teléfono inteligente a una etiqueta NFC (Near Field Communication)
                     
                    El dispositivo móvil se coloca en la consola central para visualizar el contenido del usuario en la pantalla táctil, tales como contactos, direcciones, audios y otras aplicaciones del conductor. El sistema también hace posible visualizar y controlar ciertas aplicaciones propias al carro desde el teléfono. 
                     
                    Esta tecnología se comenzará a implementar a partir del 2015 a nivel mundial. Hyundai planea ofrecerla en algunos de los modelos que comercializará en Colombia a partir de esa fecha.
                  </div>
                  <a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_4" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
            <hr id="hrSepararDivRowImg">
            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-5-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-5.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <img id="img-5-tecno-mobile" src="src/img/tecnologia/Tip-5-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">ECO DRIVE.</h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP5"><p id="pContenidoTecnologia">
                   Este nuevo plus de Hyundai se ha convertido en un éxito de ventas en algunos países con marcas consolidadas como Estados Unidos, integrando toda la tecnología necesaria para que sus usuarios ahorren combustible. Su sistema Eco Drive, presente en el Hyundai i25, le sugiere al conductor los momentos claves para realizar cambios en las funciones de manejo, lo que genera un mejor desempeño a la hora de conducir y logra una importante reducción de las emisiones contaminantes.
                     
                        Un proceso que arranca desde el mismo momento en que se ensambla el vehículo, algo que pocos detallan, pero en el que la compañía ha puesto el ojo para no afectar al entorno y evitar la contaminación desde el primer momento.

                        La preocupación por el medio ambiente no se queda en el exterior. Por el contrario, la tecnología ambiental ha dado origen a un vehículo que, adicionalmente, cuenta con tecnología Blue Drive, lo que convierte al i25 en un vehículo aerodinámico y eficiente, con menor peso, un motor más pequeño pero con mayor potencia; una fricción menor, que permite aumentar la duración del vehículo, y una suma de sistemas adicionales como el auto stop, que controla electrónicamente la inyección del vehículo e informa al conductor sobre sus niveles de consumo para que los disminuya y tenga un manejo más efectivo y rentable.

                        Esta innovadora propuesta, su diseño futurista con base en acero de alta resistencia que protege a los ocupantes en caso de accidentes, su sistema de frenos, junto con accesorios como sistema integrado de control en el timón demuestran por qué la palabra Hyundai significa modernidad en la actualidad.

</p>
                  </div>
                  <a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_5" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
            <hr id="hrSepararDivRowImg">
            <div class="row" id="divRowImg2">
                <div class="col-md-4">
                    <img id="img-6-tecno-escritorio" src="src/img/tecnologia/img-tecnologia-6.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                      <img id="img-6-tecno-mobile" src="src/img/tecnologia/Tip-6-rectangular.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                 
                </div>
                <div class="col-md-8">
                  <h4 id="h4ContenidoTecnologia">APLICACIONES HYUNADI PARA RELOJES INTELIGENTES</h4>
                  <hr id="hrContenidoTecnologia">
                  <div class="contenedorP6"><p id="pContenidoTecnologia">
                     Cada vez existen más "smartwatches" o relojes inteligentes en el mercado, por lo que Hyundai aprovechando esta tendencia pondrá a disposición de sus clientes a partir de principios de 2015 una solución con la que podrán establecer contacto remoto con sus autos utilizando este tipo de dispositivo y la aplicación "smartwatch" Blue Link.
                       
                        La plataforma Blue Link de Hyundai cuenta con posibilidades tales como arranque del auto por control remoto y servicio de información al que se puede acceder rápidamente a través de equipos como "smartwatches" y "smartphones".
                       
                        "Esta nueva aplicación expande la exploración de Hyundai acerca de cómo una tecnología incluida en un artículo de vestir y el Sistema Blue Link se ajustan al estilo de vida del cliente", dijo Barry Ratzlaff, director ejecutivo de relaciones con los clientes y desarrollo de servicios en Hyundai Motor América. "Establecer contacto con su vehículo mediante un "smartwatch" y el reconocimiento de voz era algo que anteriormente sólo se veía en las películas de ciencia ficción. Ahora, podemos ofrecer esta posibilidad a los dueños de vehículos Hyundai equipados con Blue Link".
                        
                        La aplicación es muy fácil de usar, el usuario simplemente toca un icono o utiliza mandos de voz para ejecutar las funciones por control remoto. La aplicación permite a los propietarios el arranque del motor, abrir y cerrar las puertas y encontrar su auto en un atestado estacionamiento, todo ello por control remoto. Presionando el icono del micrófono en el reloj se activa la función de voz, con la que el conductor puede ordenar mandos tales como "Arrancar mi auto", "Cerrar mi auto" o "Encontrar mi auto".
                       
                        La aplicación "smartwatch" Blue Link se conecta mediante Bluetooth con el "smartphone" del propietario que contiene la aplicación móvil Blue Link. Las funciones remotas pueden ser ejecutadas desde casi cualquier lugar en tanto el "smartphone" del usuario tenga Bluetooth y conexión celular o de internet. Los representantes de Hyundai estarán demostrando la aplicación "smartwatch" Blue Link en "smartwatches" de las marcas Samsung, Motorola, Sony y LG. Los poseedores de Android Wear pueden bajar la aplicación de Google Play de forma gratuita a partir del primer trimestre de 2015.
                      
                        La aplicación "smartwatch" Blue Link funciona en los modelos de Hyundai equipados con el Sistema Blue Link de primera y de segunda generación. El sistema de primera generación se estrenó en el Sonata 2012, extendiéndose posteriormente por toda la línea de modelos del 2013. Los modelos equipados con Blue Link de próxima generación incluyen el Genesis, el Sonata y el Azera del 2015.
                      
                  </p>
                  </div><a href="#aboutModal" data-toggle="modal" data-target="#modalContenido_6" class="btn btn-primary" id="btnContenidoTecnologia">VER MÁS</a>
                </div>
            </div>
          </div>
      </div>
    </div>
<br><br>
    <div class="section" id="secVerMasFotos">
          <div class="container">
            <div class="row" id="rowBtnsTecnologia1">
              <div class="col-md-12 text-center" id="divBtnCampanaTit">
                <a class="btn btn-default btn-lg" href="https://www.hyundai.com.co/cotizador/eon​" target="_blank" id="btnCotizaloAquiTecnologia">COTIZALO AQUÍ</a>
                <a class="btn btn-default btn-lg" id="btnVerMasFotos"><img src="src/img/galeria/ver-mas-fotos.png" alt="EON TECH nuevo Hyundai"/></a>
                <a class="btn btn-default btn-lg" id="btnCompartir" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                <hr id="hr">
              </div>
            </div>
          </div>
        </div> 
        
    

        <div class="section" id="secVerFotosAnteriores">  
          <div class="container">
            <div class="row" id="rowBtnsTecnologia2">
              <div class="col-md-12 text-center" id="divBtnCampanaTit">
                  <a href="https://www.hyundai.com.co/cotizador/eon​" target="_blank" class="btn btn-default btn-lg" id="btnCotizaloAquiTecnologia">COTIZALO AQUÍ</a>
                <a class="btn btn-default btn-lg" id="btnVerFotosAnteriores"><img src="src/img/galeria/ver-mas-fotos-arriba.png" alt="EON TECH nuevo Hyundai"/></a>
                <a class="btn btn-default btn-lg" id="btnCompartir" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                <hr id="hr">
              </div>
            </div>
          </div>
        </div> 


    <!--MODAL NUMERO 1-->
    <div class="modal fade" id="modalContenido_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    <center>
                        <img src="src/img/tecnologia/img-tecnologia-1-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    <!--<img src="src/img/tecnologia/noticia-expandida.png" alt="EON TECH nuevo Hyundai" class="img-responsive"/>-->
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">SPOTIFY PLANEA INCLUIR VIDEOS</h3>
                    <h4 class="h4Subrrayado">Spotify amplía sus horizontes en el terreno multimedia </h4>
                    <hr id="hrModalTecnologia">
                    <center>

                  <div id="divOrdenarColumnas">

                    <p id="pModalTecnologia" class="text-left">
                        Spotify anunció el miércoles que se lanzará en el mercado del video y los contenidos originales, 
                        con la idea de expandir sus fronteras más allá de la música en momentos en que la empresa brega 
                        por volverse rentable. 
                        <br><br>
                        El servicio de música en línea y una de las firmas líderes en el boom del contenido por streaming, 
                        anunció en Nueva York que quiere ofrecer una plataforma más amplia y personalizada. Esta 
                        plataforma actualizada podrá alojar por primera vez videos y, además, ofrecerá noticias y otros 
                        contenidos no musicales provistos por grandes grupos mediáticos, algunos de ellos de forma 
                        exclusiva. 
                         <br><br>
                        El fundador y director ejecutivo de la compañía sueca, Daniel Ek, dijo queSpotify está 
                        respondiendo así al protagonismo cada vez más dominante de los teléfonos inteligentes en la vida 
                        moderna. Si bien su principal negocio seguirá siendo la música, el objetivo es disuadir a los 
                        usuarios de abrir otras aplicaciones para leer noticias o mirar videos, dijo Ek. 
                         <br><br>
                        La idea nació "cuando comprendimos que tenemos la increíble oportunidad de ponerle una pista 
                        de sonido a todo el día, y a toda la vida, en toda su complejidad", añadió el pionero de 32 años. 
                         <br><br>
                        La firma proveerá entonces los podcasts y otras producciones de sus socios de prensa, pero 
                        también buscará ofrecer contenido original. El grupo también quiere trabajar en la personalización 
                        del servicio, por ejemplo adaptando las sugerencias musicales a la velocidad de un corredor. 
                         <br><br>
                        Esta deportiva función fue concebida por el DJ holandés Tiesto, quien explicó en la conferencia de 
                        prensa que muchos de sus fans hacen ejercicios escuchando música. 
                         <br><br>
                        Ek añadió que esta nueva plataforma estará disponible de inmediato en Estados Unidos, Gran 
                        Bretaña, Alemania y Suecia, y que se seguirá desplegando en el curso de las próximas semanas en 
                        los otros 54 países donde está disponible el servicio. 
                        <br><br>
                        Fuente: <a href="http://www.eltiempo.com/entretenimiento/musica-y-libros/spotify-quiere-empoderarse-de-los-vi
                        deos-musicales-y-los-podcasts/15793975" target="_blank">eltiempo.com <br>
                        http://www.eltiempo.com/entretenimiento/musica-y-libros/spotify-quiere-empoderarse-de-los-vi
                        deos-musicales-y-los-podcasts/15793975 </a>
                       
                    </p>
              </div>
                    <br>
                    </center>
                </div>
           </div>
        </div>
    </div>


    <!--MODAL NUMERO 2-->
    <div class="modal fade" id="modalContenido_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    
                          <center>
                    <img src="src/img/tecnologia/img-tecnologia-2-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">ANDROID AUTO Y CAR PLAY</h3>
                    <h4 class="h4Subrrayado">El desembarco de esta nueva tecnología promete cambias el concepto del entretenimiento  </h4>
                    <hr id="hrModalTecnologia">
                    <center>
                      <div id="divOrdenarColumnas">
                    <p id="pModalTecnologia" class="text-left">
                       Hyundai ha confirmado la integración de Android Auto y  iOS Car Play a los próximos automóviles 
                        con el propósito de cambiar nuestro concepto de infoentretenimiento, y es que con las interfaces 
                        de Google y Apple se rompen las reglas tradicionales en tanto al acceso a sistemas multimedia. 
                        Con estos sistemas las posibilidades de la interfaz son las mismas para uno y otro coche, dejando 
                        en el usuario la capacidad para sacar el máximo provecho al sistema. 
                         <br><br>
                        Por decirlo de algún modo, el desembarco de Android Auto y iOS Car Play pone fecha de caducidad 
                        a los caros sistemas de infoentretenimiento ofrecidos por cada fabricante como parte de una larga 
                        lista de equipamiento opcional. Android Auto y iOS Car Play serán una herramientas de tipo 
                        todo-en-uno que solo necesitarán de la vinculación con tu smartphone, permitiendo así ampliar las 
                        posibilidades de tu teléfono una vez te pongas a los mandos del coche. 
                         <br><br>
                        Aunque los fabricantes se han posicionado muy a favor de la integración de los sistemas de Google 
                        y Apple, lo cierto es que todavía existen recelos en tanto a la pérdida de un negocio que ahora 
                        pasa a estar en manos de Google y Apple. De momento Hyundai se limitará a instalar el hardware, 
                        dejando todo el software en manos de los gigantes de internet y la electrónica de consumo. 
                         <br><br>
                        Aun así, no hay que olvidar que este desembarco no ofrece una solución perfecta, pues la 
                        dependencia del smartphone también traerá importantes complicaciones. Una de las que más 
                        preocupa es el uso de datos móviles, pues los sistemas de navegación y los servicios de streaming 
                        se nutrirán de ese ancho de banda para el funcionamiento. Al mismo tiempo existe la 
                        problemática de qué hacer cuando el dispositivo no esté presente, pues las interfaces han sido 
                        diseñadas exclusivamente para integrar del mejor modo a nuestro smartphone. 
                         <br><br>
                        Fuente: <a href="http://www.diariomotor.com/tecmovia/2015/05/30/el-desembarco-de-android-auto-y-car-play-c
                        ambia-las-reglas-del-juego/" target="_blank">diariomotor.com <br>
                        http://www.diariomotor.com/tecmovia/2015/05/30/el-desembarco-de-android-auto-y-car-play-c
                        ambia-las-reglas-del-juego/ </a>

                    </p>
                    <br>
                  </div>
                    </center>
                </div>
           </div>
        </div>
    </div>
    
    <!--MODAL NUMERO 3-->
    <div class="modal fade" id="modalContenido_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    
                        <center>
                    <img src="src/img/tecnologia/img-tecnologia-3-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">PLACAS GEEK </h3>
                    <h4 class="h4Subrrayado">Divertido listado las mejores placas de vehículos para personas Geek   </h4>
                    <hr id="hrModalTecnologia">
                    <center>
                      <div id="divOrdenarColumnas">
                    <p id="pModalTecnologia" class="text-left">
                        Ciertamente hay una gran número de personas creativas en el mundo, pero lo que siempre logra 
                        llamar nuestra atención son los Geek, ya que siempre buscan la forma de mostrar su afición a 
                        ciertas cosas como en el siguiente caso en el cual tuvieron mucha suerte o simplemente aplicaron 
                        una gran cantidad de creatividad para conseguir las siguientes placas para carros Geeks. 
                         <br><br>
                        Fuente: <a href="http://www.rinconabstracto.com/2012/01/10-placas-de-carros-para-personas-geek.html" target="_blank">rinconabstracto.com <br>
                        http://www.rinconabstracto.com/2012/01/10-placas-de-carros-para-personas-geek.html </a>
                    </p>
                    <br>
                  </div>
                    </center>
                </div>
           </div>
        </div>
    </div>
    
    <!--MODAL NUMERO 4-->
    <div class="modal fade" id="modalContenido_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    
                       <center> 
                    <img src="src/img/tecnologia/img-tecnologia-4-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">HYUNDAI ABRE LAS PUERTAS AL FUTURO </h3>
                    <h4 class="h4Subrrayado">Los Smartphones remplazaran a las llaves en los Hyundai del futuro </h4>
                    
                    <hr id="hrModalTecnologia">
                    <center>
                      <div id="divOrdenarColumnas">
                    <p id="pModalTecnologia" class="text-left">
                       Hyundai aprovecha los teléfonos inteligentes para crear el primer prototipo de su concepto de 
                      conectividad, permitiendo a los usuarios abrir el vehículo sin necesidad de la llave tradicional. 
                      También permite visualizar y controlar una serie de funciones del auto desde el teléfono.  
                        <br><br>
                      Hyundai presentó en Alemania, un adelanto de su nueva tecnología sobre un i30 prototipo, la cual 
                      permite bloquear y desbloquear el vehículo con tan solo acercar el teléfono inteligente a una 
                      etiqueta NFC (Near Field Communication) 
                        <br><br>
                      El dispositivo móvil se coloca en la consola central para visualizar el contenido del usuario en la 
                      pantalla táctil, tales como contactos, direcciones, audios y otras aplicaciones del conductor. El 
                      sistema también hace posible visualizar y controlar ciertas aplicaciones propias al carro desde el 
                      teléfono.  
                       <br><br> 
                      Esta tecnología se comenzará a implementar a partir del 2015 a nivel mundial. Hyundai planea 
                      ofrecerla en algunos de los modelos que comercializará en Colombia a partir de esa fecha 
                       <br><br>
                      Fuente:  <a href="https://www.hyundai.com.co/novedades" target="_blank">hyundai.com.co <br>
                      https://www.hyundai.com.co/novedades </a>
 
                    </p>
                    <br>
                  </div>
                    </center>
                </div>
           </div>
        </div>
    </div>

    
    <!--MODAL NUMERO 5-->
    <div class="modal fade" id="modalContenido_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    
                        <center>
                    <img src="src/img/tecnologia/img-tecnologia-5-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">ECO DRIVE.</h3>
                    <h4 class="h4Subrrayado">Tecnología ambiental a bordo de Hyundai</h4>
                    
                    <hr id="hrModalTecnologia">
                    <center>
                      <div id="divOrdenarColumnas">
                    <p id="pModalTecnologia" class="text-left">
                        Este nuevo plus de Hyundai se ha convertido en un éxito de ventas en algunos países con marcas consolidadas como Estados Unidos, integrando toda la tecnología necesaria para que sus usuarios ahorren combustible. Su sistema Eco Drive, presente en el Hyundai i25, le sugiere al conductor los momentos claves para realizar cambios en las funciones de manejo, lo que genera un mejor desempeño a la hora de conducir y logra una importante reducción de las emisiones contaminantes.
                        <br><br>
                        Un proceso que arranca desde el mismo momento en que se ensambla el vehículo, algo que pocos detallan, pero en el que la compañía ha puesto el ojo para no afectar al entorno y evitar la contaminación desde el primer momento.
<br><br>
                        La preocupación por el medio ambiente no se queda en el exterior. Por el contrario, la tecnología ambiental ha dado origen a un vehículo que, adicionalmente, cuenta con tecnología Blue Drive, lo que convierte al i25 en un vehículo aerodinámico y eficiente, con menor peso, un motor más pequeño pero con mayor potencia; una fricción menor, que permite aumentar la duración del vehículo, y una suma de sistemas adicionales como el auto stop, que controla electrónicamente la inyección del vehículo e informa al conductor sobre sus niveles de consumo para que los disminuya y tenga un manejo más efectivo y rentable.
<br><br>
                        Esta innovadora propuesta, su diseño futurista con base en acero de alta resistencia que protege a los ocupantes en caso de accidentes, su sistema de frenos, junto con accesorios como sistema integrado de control en el timón demuestran por qué la palabra Hyundai significa modernidad en la actualidad.
<br><br>
                        Fuente: <a href="http://revistadiners.com.co/articulo/62_441_tecnologia-a-bordo-de-los-automoviles" target="_blank">revistadiners.com.co<br>
                        http://revistadiners.com.co/articulo/62_441_tecnologia-a-bordo-de-los-automoviles</a>




                    </p>
                    <br>
                    <div>
                    </center>
                </div>
           </div>
        </div>
    </div>

    
    <!--MODAL NUMERO 6-->
    <div class="modal fade" id="modalContenido_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal-dialog-tecnologia">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" id="modal-header-tecnologia">
                    <button id="cerrarModalTecnologia" type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                    <a class="btn btn-default btn-lg"  id="myModalLabel" data-toggle="modal" data-target="#modalCompartir">COMPARTIR</a>
                </div>
                <div class="modal-body" >
                    
                        <center>
                    <img src="src/img/tecnologia/img-tecnologia-6-modal.jpg" alt="EON TECH nuevo Hyundai" class="img-responsive"/>
                    </center>
                    <h3 id="h3ModalTecnologia" class="media-heading">APLICACIONES HYUNADI PARA RELOJES INTELIGENTES</h3>
                    <h4 class="h4Subrrayado">Propone funcionalidades típicas de película de ciencia ficción</h4>
                    
                    <hr id="hrModalTecnologia">
                    <center>
                      <div id="divOrdenarColumnas">
                    <p id="pModalTecnologia" class="text-left">
                       Cada vez existen más "smartwatches" o relojes inteligentes en el mercado, por lo que Hyundai aprovechando esta tendencia pondrá a disposición de sus clientes a partir de principios de 2015 una solución con la que podrán establecer contacto remoto con sus autos utilizando este tipo de dispositivo y la aplicación "smartwatch" Blue Link.
                        <br><br>
                        La plataforma Blue Link de Hyundai cuenta con posibilidades tales como arranque del auto por control remoto y servicio de información al que se puede acceder rápidamente a través de equipos como "smartwatches" y "smartphones".
                        <br><br>
                        "Esta nueva aplicación expande la exploración de Hyundai acerca de cómo una tecnología incluida en un artículo de vestir y el Sistema Blue Link se ajustan al estilo de vida del cliente", dijo Barry Ratzlaff, director ejecutivo de relaciones con los clientes y desarrollo de servicios en Hyundai Motor América. "Establecer contacto con su vehículo mediante un "smartwatch" y el reconocimiento de voz era algo que anteriormente sólo se veía en las películas de ciencia ficción. Ahora, podemos ofrecer esta posibilidad a los dueños de vehículos Hyundai equipados con Blue Link".
                        <br><br>
                        La aplicación es muy fácil de usar, el usuario simplemente toca un icono o utiliza mandos de voz para ejecutar las funciones por control remoto. La aplicación permite a los propietarios el arranque del motor, abrir y cerrar las puertas y encontrar su auto en un atestado estacionamiento, todo ello por control remoto. Presionando el icono del micrófono en el reloj se activa la función de voz, con la que el conductor puede ordenar mandos tales como "Arrancar mi auto", "Cerrar mi auto" o "Encontrar mi auto".
                        <br><br>
                        La aplicación "smartwatch" Blue Link se conecta mediante Bluetooth con el "smartphone" del propietario que contiene la aplicación móvil Blue Link. Las funciones remotas pueden ser ejecutadas desde casi cualquier lugar en tanto el "smartphone" del usuario tenga Bluetooth y conexión celular o de internet. Los representantes de Hyundai estarán demostrando la aplicación "smartwatch" Blue Link en "smartwatches" de las marcas Samsung, Motorola, Sony y LG. Los poseedores de Android Wear pueden bajar la aplicación de Google Play de forma gratuita a partir del primer trimestre de 2015.
                        <br><br>
                        La aplicación "smartwatch" Blue Link funciona en los modelos de Hyundai equipados con el Sistema Blue Link de primera y de segunda generación. El sistema de primera generación se estrenó en el Sonata 2012, extendiéndose posteriormente por toda la línea de modelos del 2013. Los modelos equipados con Blue Link de próxima generación incluyen el Genesis, el Sonata y el Azera del 2015.
                        <br><br>
                        Fuente: <a href="http://www.diariocronica.com.ar/124659-hyundai-presento-una-aplicacion-para-relojes-inteligentes.html" target="_blank">diariocronica.com.ar<br>
                        http://www.diariocronica.com.ar/124659-hyundai-presento-una-aplicacion-para-relojes-inteligentes.html</a>
                        <br><br>
                        Video: <a href="https://www.youtube.com/watch?t=176&v=IucixlcRfzU" target="_blank">https://www.youtube.com/watch?t=176&v=IucixlcRfzU</a>

                    </p>
                    <br>
                  </div>
                    </center>
                </div>
           </div>
        </div>
    </div>

   <?php
include 'controls/modalCompartir/technotips.php';

?>







<script type="text/javascript">
    $(function()
    {
       $("#btnVerMasFotos").click(function()
       {
           
            $("#secVerMasFotos").hide();
            $("#secVerFotosAnteriores").toggle("slow");
            $("#contenedorImgTecnologia").slideUp();
            $("#contenedorImgTecnologia2").slideToggle();
            recortarText();
           
       });
       
       $("#btnVerFotosAnteriores").click(function()
       {
           
            $("#secVerFotosAnteriores").hide();
            $("#secVerMasFotos").toggle("slow");
            
            $("#contenedorImgTecnologia2").slideUp();
            $("#contenedorImgTecnologia").slideToggle();
           
       });
       
    });



    $(document).ready(function()
    {


            // GALERIA 1
            loadGallery(true, 'a.thumbnail');
           
            //This function disables buttons when needed
            function disableButtons(counter_max, counter_current){
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
            
            
              
            
            var i=0;
            for(i=1; i<=3;i++)
            {
                var $text = $(".contenedorP"+i+" p");
            
                while ( $text.outerHeight() > 65 ) 
                {
                        $text.text(function (index, text) 
                        {
                            return text.replace(/\W*\s(\S)*$/, '...');
                       });
                }
            }
            
            
            
            
        });

function recortarText()
            {
                
            
            var i=0;
            for(i=3; i<=6;i++)
            {
                var $text = $(".contenedorP"+i+" p");
            
                while ( $text.outerHeight() > 65 ) 
                {
                        $text.text(function (index, text) 
                        {
                            return text.replace(/\W*\s(\S)*$/, '...');
                       });
                }
            }
            }


</script>