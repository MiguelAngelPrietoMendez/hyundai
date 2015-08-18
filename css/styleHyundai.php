<?php
include '../models/access_db.php';
include '../models/plantilla_select.php';

/*  BODY - QUERY  */
$resultBody = $mysqli->query("SELECT color_fondo_body FROM tbl_body where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowBody = $resultBody->fetch_array();

/*  HEADER - QUERY  */
$resultHeader = $mysqli->query("SELECT * FROM tbl_header where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowHeader = $resultHeader->fetch_array();

/*  FOOTER - QUERY  */
$resultFooter = $mysqli->query("SELECT * FROM tbl_footer where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowFooter = $resultFooter->fetch_array();

/*  SECCION 1 - QUERY  */
$resultSeccion1 = $mysqli->query("SELECT * FROM tbl_seccion_1 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion1 = $resultSeccion1->fetch_array();

/*  SECCION 2 - QUERY  */
$resultSeccion2 = $mysqli->query("SELECT * FROM tbl_seccion_2 where id_plantilla=" . $rowPlantilla["id_plantillas"] . "");
$rowSeccion2 = $resultSeccion2->fetch_array();

header("Content-type: text/css; charset: UTF-8");
?>
@font-face {
font-family: 'modern';
src: url('../src/fonts/modernh/modernh-bold-webfont.eot');
src: url('../src/fonts/modernh/modernh-bold-webfont.eot?#iefix') format('embedded-opentype'),
url('../src/fonts/modernh/modernh-bold-webfont.woff2') format('woff2'),
url('../src/fonts/modernh/modernh-bold-webfont.woff') format('woff'),
url('../src/fonts/modernh/modernh-bold-webfont.ttf') format('truetype'),
url('../src/fonts/modernh/modernh-bold-webfont.svg#modern_hbold') format('svg');
font-weight: 600;
font-style: normal;

}

@font-face {
font-family: 'modern';
src: url('../src/fonts/modernh/modernh-ecolight-webfont.eot');
src: url('../src/fonts/modernh/modernh-ecolight-webfont.eot?#iefix') format('embedded-opentype'),
url('../src/fonts/modernh/modernh-ecolight-webfont.woff2') format('woff2'),
url('../src/fonts/modernh/modernh-ecolight-webfont.woff') format('woff'),
url('../src/fonts/modernh/modernh-ecolight-webfont.ttf') format('truetype'),
url('../src/fonts/modernh/modernh-ecolight-webfont.svg#modern_hecolight') format('svg');
font-weight: 100;
font-style: normal;

}

@font-face {
font-family: 'modern';
src: url('../src/fonts/modernh/modernh-light-webfont.eot');
src: url('../src/fonts/modernh/modernh-light-webfont.eot?#iefix') format('embedded-opentype'),
url('../src/fonts/modernh/modernh-light-webfont.woff2') format('woff2'),
url('../src/fonts/modernh/modernh-light-webfont.woff') format('woff'),
url('../src/fonts/modernh/modernh-light-webfont.ttf') format('truetype'),
url('../src/fonts/modernh/modernh-light-webfont.svg#modern_hlight') format('svg');
font-weight: 300;
font-style: normal;

}

@font-face {
font-family: 'modern';
src: url('../src/fonts/modernh/modernh-medium-webfont.eot');
src: url('../src/fonts/modernh/modernh-medium-webfont.eot?#iefix') format('embedded-opentype'),
url('../src/fonts/modernh/modernh-medium-webfont.woff2') format('woff2'),
url('../src/fonts/modernh/modernh-medium-webfont.woff') format('woff'),
url('../src/fonts/modernh/modernh-medium-webfont.ttf') format('truetype'),
url('../src/fonts/modernh/modernh-medium-webfont.svg#modern_hmedium') format('svg');
font-weight: 400;
font-style: normal;

}


body{
background: <?php echo $rowBody["color_fondo_body"]; ?>;
font-family: 'modern';
}


#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 2%;
}




#btnCompartirGaleriaModal
{
width: 32%;
border-style: solid;
border-width: 1px;
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

margin-bottom: 5px;
margin-top: 8px;
font-size: 15px;
font-weight: bold;
letter-spacing: 1px;
background-color: rgba(2, 2, 2, 0.79);
border-color: rgba(120, 120, 120, 0.34);
}

#divNav{
max-width: 1066px;
}

.aNav
{
color: <?php echo $rowHeader["color_texto_header"]; ?>;
background-color: <?php echo $rowHeader["color_fondo_header"]; ?>;

}
.hrNav
{
float: left;
width: 21px;
margin-top: 14px;
margin-left: -21px;
border-top: 1px solid <?php echo $rowHeader["color_linea_header"]; ?>;;
}

#hr
{
background-color: rgba(14, 14, 14, 1);

border-top: 1px solid <?php echo $rowSeccion1["titulo_color_linea_seccion_1"]; ?>;
margin-top: -16px;
}
#hr2
{
background-color: rgba(14, 14, 14, 1);
border-top: 1px solid <?php echo $rowSeccion1["linea_1_color_seccion_1"]; ?>;
margin-top: 10px;
margin-bottom: 10px;
}

#divBtnCampana{

margin-top: 2%;
padding-bottom: 35px;      
padding-right: 0px;      
padding-left: 0px;
}

#btnCampana{
margin-top: 5px;
position: absolute;
margin-left: -10%;
border-style: solid;    border-color: rgba(238, 238, 238, 0.5);    border-width: 1px;    
background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}

#btnHome{
border-style: solid;    
border-color: <?php echo $rowSeccion1["titulo_color_borde_seccion_1"]; ?>;  
border-width: 1px;    
background-color: <?php echo $rowSeccion1["titulo_color_fondo_seccion_1"]; ?>;
color: <?php echo $rowSeccion1["titulo_color_texto_seccion_1"]; ?>;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}
#btnEonTech{
margin-top: 5px;
margin-left: -6%;
border-style: solid;   
border-color: <?php echo $rowSeccion2["titulo_color_borde_seccion_2"]; ?>;
border-width: 1px;    
background-color: <?php echo $rowSeccion2["titulo_color_fondo_seccion_2"]; ?>;
color: <?php echo $rowSeccion2["titulo_color_texto_seccion_2"]; ?>;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}

#btnPlayList{
border-style: solid;
border-color: rgba(238, 238, 238, 0.5);
border-width: 1px;
background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}


#btnTecnologia {

border-style: solid;
border-color: rgba(238, 238, 238, 0.5);
border-width: 1px;

background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}



#btnMundoEon 
{
margin-top: 5px;
position: absolute;
margin-left: -10%;
border-style: solid;    border-color: rgba(238, 238, 238, 0.5);    border-width: 1px;    
background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}

#btnGaleria 
{

border-style: solid;    border-color: rgba(238, 238, 238, 0.5);    border-width: 1px;    

background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

}



#btnCompartir {
float: right;
margin-top: 2.5%;

margin-left: -62px;
border-style: solid;

border-width: 1px;
margin-right: 0px;
background-color: rgb(2, 2, 2);
border-color: rgb(120, 120, 120);
color: #E9F2EF;
border-radius: 0;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;

font-size: 14px;
}

#btnCompartirPlay {
float: right;
margin-top: 1%;

margin-left: -62px;
border-style: solid;

border-width: 1px;
margin-right: 0px;
background-color: rgb(2, 2, 2);
border-color: rgb(120, 120, 120);
color: #E9F2EF;
border-radius: 0;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;

font-size: 14px;
}


#divBtnCampana hr {
margin-top: -10px;
}


#btnVerMasFotos{

margin-left: -62px;
border-style: solid;    
border-color: rgba(238, 238, 238, 0);    border-width: 1px;    
margin-right: 21px;    

background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 50%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 0px;
padding-left: 0px;
}


#btnsImgHome
{
width: 24%;
position: relative;
float: right;    
margin-top: -18.5%;
margin-right: 2%;
}

#btnsImgHome2
{
width: 24%;
position: relative;
float: right;
margin-top: -19.5%;
margin-right: 1%;
}

#btnConoce,#btnComparte,#btnCotizaHome{


width: 95%;
border-style: solid;    
border-color: <?php echo $rowSeccion1["boton_1_color_borde_seccion_1"]; ?>;
border-width: 1px;    
background-color: <?php echo $rowSeccion1["boton_1_color_fondo_seccion_1"]; ?>;
color: <?php echo $rowSeccion1["boton_1_color_texto_seccion_1"]; ?>;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

margin-bottom: 5px;
margin-top: 8px;
font-size: 15px;
font-weight: bold;
letter-spacing: 1px;
}

#btnComparte
{
background-color: <?php echo $rowSeccion1["boton_2_color_fondo_seccion_1"]; ?>;
border-color: <?php echo $rowSeccion1["boton_2_color_borde_seccion_1"]; ?>;
color: <?php echo $rowSeccion1["boton_2_color_texto_seccion_1"]; ?>;
}

#btnCotizaHome
{
border-color: <?php echo $rowSeccion1["boton_3_color_borde_seccion_1"]; ?>;
background-color: <?php echo $rowSeccion1["boton_3_color_fondo_seccion_1"]; ?>;
color: <?php echo $rowSeccion1["boton_3_color_texto_seccion_1"]; ?>;
}
#btnConoce2,#btnComparte2
{
width: 96%;
border-style: solid;    
border-color: <?php echo $rowSeccion2["boton_1_color_borde_seccion_2"]; ?>;
border-width: 1px;    
background-color: <?php echo $rowSeccion2["boton_1_color_fondo_seccion_2"]; ?>;
color: <?php echo $rowSeccion2["boton_1_color_texto_seccion_2"]; ?>;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;
margin-bottom: 5px;
margin-top: 8px;
font-size: 15px;
font-weight: bold;
letter-spacing: 1px;
}

#btnComparte2
{
background-color: <?php echo $rowSeccion2["boton_2_color_fondo_seccion_2"]; ?>;
border-color: <?php echo $rowSeccion2["boton_2_color_borde_seccion_2"]; ?>;
}

#btnConoceMasAqui{
width: 263px;
border-style: solid;    
border-color: <?php echo $rowSeccion1["boton_4_color_borde_seccion_1"]; ?>; 
border-width: 1px;    
background-color: <?php echo $rowSeccion1["boton_4_color_fondo_seccion_1"]; ?>;
color: <?php echo $rowSeccion1["boton_4_color_texto_seccion_1"]; ?>;
border-radius: 0;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 40px;
padding-left: 40px;
margin-bottom: 5px;
}

#divRowImg{
padding-bottom: 20px;
width: 88%;      margin: 0 auto;
width: 90%;      margin: 0 auto;
}

#divTxtCamapana
{
padding-left: 3%;
padding-right: 2.6%;
padding-top: 30px;
color: <?php echo $rowSeccion1["texto_color_seccion_1"]; ?>;
}

footer
{
font-size: 10px;
color: <?php echo $rowFooter["color_texto_footer"]; ?>;
text-align: center;
letter-spacing: 1px;
}

#pItalic
{
font-style: italic;
}


#btnConoceMasAqui2
{
margin-top: 12px;
border-style: solid;    
border-color: <?php echo $rowSeccion2["boton_3_color_borde_seccion_2"]; ?>;
border-width: 1px;    
background-color: <?php echo $rowSeccion2["boton_3_color_fondo_seccion_2"]; ?>;
color: <?php echo $rowSeccion2["boton_3_color_texto_seccion_2"]; ?>;
border-radius: 0;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 5%;
padding-left: 5%;
font-weight: bold;

width: 100%;

max-width: 374px;
font-size: 13px;
}
#btnConoceMasAqui3
{
border-style: solid;    
border-color:<?php echo $rowSeccion2["tabla_titulo_color_borde_seccion_2"]; ?>;
border-width: 1px;    
background-color: <?php echo $rowSeccion2["tabla_titulo_color_fondo_seccion_2"]; ?>;
color: <?php echo $rowSeccion2["tabla_titulo_color_texto_seccion_2"]; ?>;
border-radius: 0;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 5%;
padding-left: 5%;
font-weight: bold;

width: 100%;
max-width: 374px;
font-size: 17px;
margin-bottom: 9px;
font-weight: 400;
}


#video{
display: none;
width: 78%;
height: auto;
margin-left: 18%;
}

#videoET{
width: 81%;
height: auto;
margin-left: 10.5%;
max-width: 1000px;
margin-top: 2.7%;
}

#imgSombraVideoET
{
position: relative;
width: 99%;
height: auto;
background-color: rgba(0, 0, 0, 0);
margin-top: -46.1%;
}
#embedImgVideoET{

margin-top: 10px;
width: 87.5%;
margin: 0 auto;
}


#imgVideo{
cursor: pointer;
width: 100%;
height: auto;
}

#imgVideoET{
cursor: pointer;
width: 81%;
height: auto;
max-width: 1000px;
position: static;
position: relative;       
width: 86%;      height: auto;            
z-index: 99999999999;      
background-color: rgba(0, 0, 0, 0);      
margin-top: 1%;
}


#divImgVideo{
padding-left: 14%;
}
.liMenu{
border-color: <?php echo $rowHeader["color_borde_header"]; ?>;
}
.liMenu:hover{
border-color: <?php echo $rowHeader["color_hover_header"]; ?>;
}

#h4{

font-size: 17px;
}
#h4_2{

font-size: 14px;
}




#parte_1,#parte_2,#parte_3,#parte_4,#parte_5,#parte_6
{
width: 37px;
height: 37px;
background-image: url(../src/img/eon-tech/verDescripcion.png);
float: left;
position: relative;
}

#parte_1
{
left: <?php echo $rowSeccion2["div_desc_1_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_1_top_seccion_2"]; ?>;
}

#parte_2
{
left: <?php echo $rowSeccion2["div_desc_2_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_2_top_seccion_2"]; ?>;
}

#parte_3
{
left: <?php echo $rowSeccion2["div_desc_3_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_3_top_seccion_2"]; ?>;

}

#parte_4
{
left: <?php echo $rowSeccion2["div_desc_4_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_4_top_seccion_2"]; ?>;
}

#parte_5
{
left: <?php echo $rowSeccion2["div_desc_5_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_5_top_seccion_2"]; ?>;
}

#parte_6
{
left: <?php echo $rowSeccion2["div_desc_6_left_seccion_2"]; ?>;
top: <?php echo $rowSeccion2["div_desc_6_top_seccion_2"]; ?>;
}


#descripParte_1,#descripParte_2,#descripParte_3,#descripParte_4,#descripParte_5,#descripParte_6
{
float: left;
position: absolute;
left: 5%;
top: 5%;
}
#descripParte_1 p,#descripParte_2 p,#descripParte_3 p,#descripParte_4 p,#descripParte_5 p,#descripParte_6 p
{
background: <?php echo $rowSeccion2["desc_color_fondo_seccion_2"]; ?>;
border-style: solid;
color: <?php echo $rowSeccion2["desc_color_texto_seccion_2"]; ?>;
border-width: 1px;
border-color: <?php echo $rowSeccion2["desc_color_borde_seccion_2"]; ?>;
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
}

.descripcionCar h4
{
text-align: center;
color:#00C2F3;
border-left-style: solid;
border-left-color: #3c3c3c;
border-left-width: 1px;
border-right-style: solid;
border-right-color: #3c3c3c;
border-right-width: 1px;
border-top-style: solid;
border-top-color: #3c3c3c;
border-top-width: 1px;
border-bottom-style: solid;
border-bottom-color: #3c3c3c;
border-bottom-width: 1px;
padding-bottom: 2px;
padding-left: 45px;
padding-right: 45px;
border-bottom-left-radius: 714px 800px;
border-top-right-radius: 714px 800px;
}
.descripcionCar H5
{
text-align: center;
color:#fff;
border-left-style: solid;
border-left-color: #3c3c3c;
border-left-width: 1px;
border-right-style: solid;
border-right-color: #3c3c3c;
border-right-width: 1px;
border-top-style: solid;
border-top-color: #3c3c3c;
border-top-width: 1px;
padding-top: 2px;
padding-bottom: 2px;
padding-left: 45px;
padding-right: 45px;
margin-top: -11px;
border-bottom-left-radius: 714px 800px;      border-top-right-radius: 714px 800px;
}
.ultimaDescripcion
{
border-bottom-style:  solid;
border-bottom-color: #3c3c3c;
border-bottom-width: 1px;
}

#videoET {
visibility: visible;
}


#contenedorVideoET
{
width: 85%;
height: auto;
margin-left: 9%;
max-width: 1000px;
}

#hrCaracteristicas
{
background-color: rgba(14, 14, 14, 1);
border-top: 1px solid <?php echo $rowSeccion2["linea_1_color_seccion_2"]; ?>;

}

#divTablaEon{
padding-top: 5%;
padding-left: 27%;
margin: 0 auto;
}

#divTImgEon
{
padding-right: 0%;
}
#tg-ELLii
{
    <?php echo $rowSeccion2["tabla_color_fondo_seccion_2"]; ?>;
}
.tg-031e, .tg-s6z2
{
color: <?php echo $rowSeccion2["tabla_color_texto_seccion_2"]; ?>;
font-weight: bold;
border-color: <?php echo $rowSeccion2["tabla_color_borde_seccion_2"]; ?>;
font-size: 12px;
}


#contenedorSlider{
display: inline-block;
}

#divGaleri_1
{

display: inline-block;
}

#divGaleri_2
{

display: inline-block;

}

#divGaleri_3
{

display: inline-block;

}

#divGaleri_4
{

display: inline-block;
}

#divGaleri_5
{

display: inline-block;

}

#divGaleri_6
{

display: inline-block;

}


#Galeri_1
{
opacity: 0.5;
max-width: none;
}

#Galeri_2
{

margin-top: -86px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_3
{

margin-top: -86px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_4
{

opacity: 0.5;
margin-top: 0px;
margin-left: 0px;
max-width: none;
}

#Galeri_5
{


margin-top: -87px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_6
{


margin-top: -87px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
/*-webkit-filter: grayscale(1);  Blanco y negro */
}


#Galeri_7
{
opacity: 0.5;
max-width: none;
}

#Galeri_8
{

margin-top: -86px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_9
{

margin-top: -86px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_10
{

opacity: 0.5;
margin-top: 0px;
margin-left: 0px;
max-width: none;
}

#Galeri_11
{


margin-top: -87px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
}

#Galeri_12
{


margin-top: -87px;
margin-left: -4px;
opacity: 0.5;
max-width: none;
/*-webkit-filter: grayscale(1);  Blanco y negro */
}




#Galeri_1:hover,#Galeri_2:hover,#Galeri_3:hover,#Galeri_4:hover,
#Galeri_5:hover,#Galeri_6:hover,#Galeri_7:hover,#Galeri_8:hover,
#Galeri_9:hover,#Galeri_10:hover,#Galeri_11:hover,#Galeri_12:hover
{
opacity: 1;
}




#show-previous-image{

float: left; 
margin-top: -322%; 
margin-left: -108%; 


background-image: url("../src/img/galeria/flecha-1.png");      width: 26px;      height: 40px;      background-color: rgba(255, 255, 255, 0);      border-color: rgba(204, 204, 204, 0);
}
#show-next-image{

float: left; 
margin-top: -322%; 
margin-left: 171%; 


z-index: 99999999; 
position: static; 
background-image: url("../src/img/galeria/flecha-2.png");      
width: 26px;      
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}

#show-previous-image2{

float: left; 
margin-top: -322%; 
margin-left: -108%; 


background-image: url("../src/img/galeria/flecha-1.png");      width: 26px;      height: 40px;      background-color: rgba(255, 255, 255, 0);      border-color: rgba(204, 204, 204, 0);
}
#show-next-image2{

float: left; 
margin-top: -322%; 
margin-left: 171%; 


z-index: 99999999; 
position: static; 
background-image: url("../src/img/galeria/flecha-2.png");      
width: 26px;      
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}



#cerrarModal {
background-image: url("../src/img/galeria/cerrar-light-box.png");
width: 50px;
height: 49px;
margin-right: -9%;
}

#contenedorSlider2{
display: inline-block;
display: none;
}

#secVerFotosAnteriores
{
display: none;
}


#btnVerFotosAnteriores {
position: absolute;
margin-left: -62px;
border-style: solid;
border-color: rgba(238, 238, 238, 0);
border-width: 1px;
margin-right: 21px;
background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 50%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 0px;
padding-left: 0px;
}

#spotify
{
width: 100%;
height: 1087px;
}


#imgMusic2
{
margin-left: 24%;
margin-right: 24%;
}


#imgMusic3
{
float: right;
}


#imgMusic1,#imgMusic2,#imgMusic3
{
width: 16%;
}





#divRowImgsMusic
{
padding-bottom: 1%;
width: 88%;      margin: 0 auto;
}

#divRowImgsMusic2{
display: none;
padding-bottom: 1%;
width: 88%;      margin: 0 auto;
}

#divBtnCotizaMusic {
padding-bottom: 35px;
}

#contenedorImgTecnologia
{
width: 88%;      margin: 0 auto;
}

#contenedorImgTecnologia2
{
display: none;
width: 88%;      margin: 0 auto;
}



#h4ContenidoTecnologia{


color: #fff;
font-size: 17px;
margin-top: 0px;
}

#hrContenidoTecnologia{


margin-top: 7px;      
margin-bottom: 1px;
border-top: 1px solid #AFD135;
}



#pContenidoTecnologia
{


color: #eee;
}


#h4ContenidoMundoEon{


color: #fff;
font-size: 17px;
margin-top: 0px;
margin-bottom: 0px;
letter-spacing: 1px;
}

#hrContenidoMundoEon{


margin-top: 4px;      
margin-bottom: 1px;
border-top: 1px solid #AFD135;
}



#pContenidoMundoEon
{


color: #eee;
font-size: 12px;
text-align: justify;
margin: 0 0 6px;             
}


#btnContenidoTecnologia
{
color: #eee;
background-color: #03519A;
border-color: #03519A;

border-radius: 0px;
font-size: 14px;
padding: 0;
padding-left: 2%;
padding-right: 2%;
padding-top: 1px;
padding-bottom: 1px;
}

#hrSepararDivRowImg{
margin-top: 13px;
margin-bottom: 21px;
border-top: 1px solid #3c3c3c;
}


#divRowImg2 {
padding-bottom: 0px;
}

#modal-content{
position: relative;

background-color: rgba(0, 0, 0, 0.95);
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: 1px solid #999;
border: 1px solid rgba(0, 0, 0, .2);
border-radius: 6px;
outline: 0;
-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
border-style: 1px solid #eee;
border-style: solid;
border-width: 1px;
border-color: rgba(177, 170, 170, 0.48);
}

#cerrarModalTecnologia {
background-image: url("../src/img/tecnologia/boton-cerrar.png");
width: 32px;
height: 34px;



}

#modal-dialog-tecnologia{
padding-top: 0%;
width: 62%;
margin: 30px auto;
max-width: 971px;
}

#h3ModalTecnologia
{
color:#fff;

margin-top: 8px;
font-size: 15px;
letter-spacing: 2px;
text-align: justify;
}

#hrModalTecnologia
{
margin-top: 7px;
margin-bottom: 1px;
border-top: 1px solid #AFD135;

}

#pModalTecnologia
{
color:#eee;

font-size: 12px;
text-align: justify;
}

#myModalLabel{

position: absolute;
border-style: solid;
border-color: rgba(238, 238, 238, 0.5);
border-width: 1px;
margin-right: 21px;
background-color: rgb(2, 2, 2);

color: #D3DEDB;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;

padding-right: 8px;

padding-left: 8px;

font-size: 15px;
}


#myModalLabel2{

border-style: solid;
border-color: rgba(238, 238, 238, 0.5);
border-width: 1px;
margin-right: 21px;
background-color: rgb(2, 2, 2);

color: #D3DEDB;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;

padding-right: 8px;

padding-left: 8px;


font-size: 13px;
width: 110px;
text-align: center;
}

#modal-header-tecnologia{
padding-bottom: 25px;
}

#textTecnologia{
float: left;
}


#imgTecnologia{
float: right;
}

#rowImgTextTecnologia{
width: 91%;

margin: 0 auto;
}
#rowImgTextPlayList{
width: 91%;

margin: 0 auto;
}
#rowImgTextHome{
width: 91%;

margin: 0 auto;
}
#rowImgTextTecnologiaSi{
width: 91%;

margin: 0 auto;
}
#rowImgTextTecnologia2{
display: none;
width: 91%;

margin: 0 auto;
}

#hrSepararCol-Tecnologia{
margin-top: 13px;
margin-bottom: 20px;

border-top: 1px solid rgba(119, 115, 115, 0.35);
}

#rowBtnsTecnologia1,#rowBtnsTecnologia2
{
width: 88%;
margin: 0 auto;
}

#flechaAtrasPlaylist{
margin-left: -65px;
width: 22px;
height: 37px;
margin-top: -24px;
font-size: 30px;
}

#flechaNextPlaylist{
margin-right: -65px;
width: 22px;
height: 37px;
margin-top: -15px;
font-size: 30px;
}

#col-md-6{

padding-right: 1px;
padding-left: 1px;
}

#col-md-7{

padding-right: 0;
}

#btnContenidoTecnologia:hover {
background-color: #000;
}



#buttonbar
{
display: none;
float: right;
margin-top: 10px;
margin-right: 10px;
position: relative;
z-index: 999999999999;
}

#col-md-4-1-playlist{

padding-left: 0;
}


#col-md-4-2-playlist{

padding-right: 0%;
}

#col-md-12-frame-spotify
{

padding-right: 0px;
padding-left: 0px;
}

#col-md-12-galeria
{
padding-right: 0;
padding-left: 0;
}


#rowBtnVerGaleria
{
width: 85%;
margin: 0px auto;
}


#Galeri_1_columnas,#Galeri_2_columnas,#Galeri_3_columnas,#Galeri_4_columnas,
#Galeri_5_columnas,#Galeri_6_columnas,#Galeri_7_columnas,#Galeri_8_columnas
,#Galeri_9_columnas,#Galeri_10_columnas,#Galeri_11_columnas,#Galeri_12_columnas
{
display: none;
opacity: 0.5;
}

#Galeri_1_columnas:hover,#Galeri_2_columnas:hover,#Galeri_3_columnas:hover,
#Galeri_4_columnas:hover,#Galeri_5_columnas:hover,#Galeri_6_columnas:hover,
#Galeri_7_columnas:hover,#Galeri_8_columnas:hover,#Galeri_9_columnas:hover,
#Galeri_10_columnas:hover,#Galeri_11_columnas:hover,#Galeri_12_columnas:hover
{
opacity: 1;
}

#skills-produxto-3x3{
display: none;
}

// ESTILOS TABLA
.tg  {border-collapse:collapse;border-spacing:0;margin-left: 10%; background-color: #0A0D0F;}
.tg td{ padding:6px  6px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{padding:6px  6px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-s6z2{text-align:center}
th.tg-sort-header::-moz-selection { background:transparent; }
th.tg-sort-header::selection      { background:transparent; }
th.tg-sort-header { cursor:pointer; }
table th.tg-sort-header:after {  content:'';  float:right;  margin-top:7px;  border-width:0 4px 4px;  border-style:solid;  border-color:#404040 transparent;  visibility:hidden;  }table th.tg-sort-header:hover:after {  visibility:visible;  }table th.tg-sort-desc:after,table th.tg-sort-asc:after,table th.tg-sort-asc:hover:after {  visibility:visible;  opacity:0.4;  }table th.tg-sort-desc:after {  border-bottom:none;  border-width:4px 4px 0;  }@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {-webkit-overflow-scrolling: touch;margin: auto 0px;}}



#divBtnCampanaTit {
margin-top: 2%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}
#divBtnCampanaTit hr{
margin-top: -10px;
}
#divBtnCampanaTit a{

}

#imgHeader2
{
display: none;
}



#btnCotizaloAqui {
margin-top: 5px;

margin-left: -4%;
border-style: solid;
border-color: rgba(238, 238, 238, 0.5);
border-width: 1px;
background-color: rgb(2, 2, 2);
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 40px;
padding-left: 40px;

border-style: solid;
border-color: #03519A;
border-width: 1px;
background-color: #020202;
color: #A6E53F;
border-radius: 0;

}

#btnCotizaloAquiTecnologia {

border-color: #03519A;
border-width: 1px;
background-color: #020202;
color: #A6E53F;
border-radius: 0;

padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
float: left;      position: absolute;      
margin-top: 2.9%;      position: absolute;      margin-left: -49%;      margin-left: -50%;      padding-top: 3px;      padding-bottom: 3px;      padding-right: 8px;      padding-left: 8px;      font-size: 13px;  }


#rowImgTextTecnologiaTable{
display: none;
}
#skills-tableEonMundo{
width: 300px;
}

#mostrarCaracteristicasMobile
{
display: none;
}

#modal-content-compartir {
position: relative;
background-color:rgba(41, 37, 37, 0.92);
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: 1px solid #999; 
border: 1px solid rgba(0, 0, 0, .2); 
border-radius: 6px;
outline: 0;
-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5); 
box-shadow: 0 3px 9px rgba(0, 0, 0, .5); 
}
#modal-body-compartir
{
background-color: rgb(29, 25, 25);
margin-top: 2%;
}

#divOrdenarColumnas
{
column-count: 2;
-moz-column-count: 2; 
-webkit-column-count: 2;
-o-column-count: 2;
column-gap: 2em;
-moz-column-gap: 2em;
-webkit-column-gap: 2em;
-o-column-gap: 2em;
}


.h4Subrrayado
{
text-decoration:underline;
font-size: 15px;
color: #eee;

}

.modal-header-compartir {
min-height: 16.42857143px;
padding: 15px;
padding-bottom: 33px;
}

#div-botones-compartir
{
margin-top: 0%;
background-color:rgba(29, 25, 25, 0.93);
padding-top: 1%;
padding-bottom: 0%;
}


#div-botones-compartir-galeria
{
margin-top: -10.3%;

}

#divBtnGaleriaMostrar hr
{
margin-top: -20px;
background-color: rgba(14, 14, 14, 1);
border-top: 1px solid rgba(238, 238, 238, 0.55);
}

#divAnimado
{
float: right;

}
.caja_animada{
margin-top: -321px;
margin-right: 3%;
-webkit-animation: 3s intermitente 200;
}

@-webkit-keyframes intermitente 
{
25%, 75% 
{
opacity: 0;
}
50% 
{
opacity: 1;
}
}


#imgHeader3{
display:none;
}


#section-eontech-1{
margin-top: 3%;
}















/*                INICIO MEDIA              */

@media screen and (max-width:1200px)
{

.caja_animada {

margin-top: -99%;
margin-right: 0%;

width: 84%;
}

#imgMusic1,#imgMusic2,#imgMusic3
{
width: 15%;
}



#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 2%;
}


#spotify {
width: 100%;
height: 807px;
}


.navbar-nav > li {
margin-right: 21px;
height: 26px;
font-size: 14px;
}

.navbar-nav > li > a {
padding-left: 10px;
padding-right: 10px;
}

#btnConoce, #btnComparte,#btnCotizaHome {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 3px;
margin-top: 8px;
font-size: 11px;
}

#btnsImgHome {
width: 28%;
margin-top: -20.5%;
margin-right: 0%;
width: 100%;      margin-top: 0;      margin-right: 0.5%;      float: none;
}
#btnCampana {
margin-top: 7px;
font-size: 14px;
}
#btnHome {
font-size: 14px;
}
#btnEonTech {
font-size: 14px;
}
#btnPlayList {
margin-top: 7px;
font-size: 14px;
margin-left: -3%;
}
#btnTecnologia {
font-size: 14px;
}
#btnMundoEon {
margin-top: 7px;
font-size: 14px;
margin-left: -9%;
}
#btnGaleria {
font-size: 14px;
}




#divTxtCamapana {
padding-left: 3%;
padding-right: 0%;
padding-top: 0%;
color: rgba(255, 255, 255, 0.83);
}
#h4 {
font-size: 15px;
}
#h4_2 {

font-size: 12px;
}
#btnConoceMasAqui {
width: 100%;
font-size: 13px;
}
#btnsImgHome2 {
width: 28%;
margin-top: -20.5%;
margin-right: 0%;
width: 100%;      margin-top: 0;      margin-right: 0.5%;      float: none;

}
#btnConoce2, #btnComparte2 {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 3px;
margin-top: 8px;
font-size: 11px;

}
#btnConoceMasAqui2 {
margin-top: 12px;
margin-right: 0%;
padding-top: 3px;
padding-right: 2%;
padding-left: 2%;
width: 100%;
margin-left: 0%;
max-width: 373px;
font-size: 13px;
}
#divRowImgsMusic {
padding-bottom: 1%;
width: 94%;
margin: 0 auto;
}
#divRowImgsMusic2 {
padding-bottom: 1%;
width: 94%;
margin: 0 auto;
}
#rowImgTextTecnologia {
width: 95%;
margin: 0 auto;
}
#rowImgTextPlayList {
width: 95%;
margin: 0 auto;
}
#rowImgTextHome {
width: 95%;
margin: 0 auto;
}
#rowImgTextTecnologiaSi{
width: 95%;
margin: 0 auto;
}
#rowImgTextTecnologia2 {
width: 95%;
margin: 0 auto;
}

#contenedorImgTecnologia {
width: 92%;
margin: 0 auto;
}

#contenedorImgTecnologia2 {
display: none;
width: 92%;
margin: 0 auto;
}
#rowBtnsTecnologia1, #rowBtnsTecnologia2 {
width: 92%;
margin: 0 auto;
}
#btnCotizaloAquiTecnologia {
float: left;
position: absolute;
margin-top: 3%;
position: absolute;

margin-left: -49%;

margin-left: -50%;

padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 13px;
}
#btnVerMasFotos {


margin-left: 0%;



padding-top: 3px;
padding-bottom: 3px;
padding-right: 0px;
padding-left: 0px;
}
#btnCompartir {
float: right;
margin-top: 3%;

margin-left: -62px;

margin-right: 0px;

padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;

font-size: 13px;
}


#btnCompartirPlay {
float: right;
margin-top: 1.5%;

margin-left: -62px;

margin-right: 0px;

padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;

font-size: 13px;
}
#h4ContenidoTecnologia {

padding-top: 1.5%;
font-size: 15px;
}
#h4ContenidoMundoEon {

font-size: 15px;
margin-top: 2%;
}

#Galeri_1,#Galeri_2,#Galeri_3,#Galeri_4,
#Galeri_5,#Galeri_6,#Galeri_7,#Galeri_8,
#Galeri_9,#Galeri_10,#Galeri_11,#Galeri_12
{
display: none;
}
#Galeri_1_columnas,#Galeri_2_columnas,#Galeri_3_columnas,#Galeri_4_columnas
,#Galeri_5_columnas,#Galeri_6_columnas,#Galeri_7_columnas,#Galeri_8_columnas
,#Galeri_9_columnas,#Galeri_10_columnas,#Galeri_11_columnas,#Galeri_12_columnas
{
display: inline-block;
}


#Galeri_1_columnas,#Galeri_3_columnas
,#Galeri_5_columnas,#Galeri_7_columnas
,#Galeri_9_columnas,#Galeri_11_columnas
{

margin-left: 1.3%; 
}


#imgVideoET {
display: none;
}


#imgSombraVideoET {
position: relative;
width: 100%;
height: auto;
background-color: rgba(0, 0, 0, 0);
margin-top: -55.8%;
}


#videoET {
width: 82%;
height: auto;
margin-left: 10.5%;
max-width: 1000px;
margin-top: 3.5%;
}

#divBtnCampana {
margin-top: 1%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}


#divTablaEon {
margin: auto 0px;
}



#descripParte_1
{
margin-top: 7.5%;
width: 200px;
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_1 p
{
background: rgba(2, 2, 2, 0.51);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte1{

float: left;
width: 4%;
position: absolute;
margin-top: 9.5%;
margin-left: 23%;
}


#descripParte_2
{
margin-top: 9.5%;
width: 200px; 
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_2 p
{
background: rgba(2, 2, 2, 0.54);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte2{

float: left;

width: 22.2%;
position: absolute;
margin-top: 11.5%;
margin-left: 23%;
}



#descripParte_3
{
margin-top: 8.5%;
width: 200px; 
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_3 p
{
background: rgba(2, 2, 2, 0.51);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte3{

float: left;

width: 30.2%;
position: absolute;
margin-top: 10.2%;
margin-left: 23%;
}


#descripParte_4
{
margin-top: 11.1%;
width: 200px;
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_4 p
{
background: rgba(2, 2, 2, 0.51);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte4{

float: left;

width: 36.2%;
position: absolute;
margin-top: 13%;
margin-left: 23%;
}



#descripParte_5
{
margin-top: 12.5%;
width: 200px;
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_5 p
{
background: rgba(2, 2, 2, 0.51);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte5{

float: left;

width: 11.2%;
position: absolute;
margin-top: 14.7%;
margin-left: 23%;
}


#descripParte_6
{
margin-top: 21%;
width: 200px;
z-index: 9999999; 
position: absolute; 
padding: 5px;
color: #eee;

font-weight: bold;

font-size: 13px;
}
#descripParte_6 p
{
background: rgba(2, 2, 2, 0.51);
border-style: solid;
color: rgb(17, 112, 199);
border-width: 1px;
border-color: rgb(42, 42, 42);
padding-bottom: 2%;
padding-top: 2%;
padding-left: 2%;
padding-right: 2%;
text-align: center;
font-weight: bold;
font-size: 10px;
}
#conectorParte6{

float: left;

width: 27.5%;
position: absolute;
margin-top: 22.7%;
margin-left: 23.2%;
}





.partesCar
{
width: 26px;
height: 26px;
background-image: url(../src/img/eon-tech/verDescripcion2.png);
}





















}

#img-1-tecno-mobile
{
display: none;
}

#img-2-tecno-mobile
{
display: none;
}

#img-3-tecno-mobile
{
display: none;
}

#img-4-tecno-mobile
{
display: none;
}

#img-5-tecno-mobile
{
display: none;
}

#img-6-tecno-mobile
{
display: none;
}

@media screen and (max-width:1010px)
{

#divAnimado  {

display: none;
}
#imgHeader
{
display: none;
}

#imgHeader3
{
display: inline-block;
}
}
@media screen and (max-width:997px)
{





.caja_animada {
margin-top: -91%;
margin-right: 0%;
width: 71%;
}

#imgMusic1,#imgMusic2,#imgMusic3
{
width: 14%;
}

#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 2%;
}


#show-previous-image {
float: left;
margin-top: -39%;
margin-left: -8%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}


#show-next-image {
float: left;
margin-top: -38%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}

#show-previous-image2 { 
float: left;
margin-top: -39%;
margin-left: -8%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}


#show-next-image2 {
float: left;
margin-top: -38%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}


#img-1-tecno-escritorio
{
display: none;
}
#img-1-tecno-mobile
{
display: inline-block;
}


#img-2-tecno-escritorio
{
display: none;
}
#img-2-tecno-mobile
{
display: inline-block;
}


#img-3-tecno-escritorio
{
display: none;
}
#img-3-tecno-mobile
{
display: inline-block;
}


#img-4-tecno-escritorio
{
display: none;
}
#img-4-tecno-mobile
{
display: inline-block;
}


#img-5-tecno-escritorio
{
display: none;
}
#img-5-tecno-mobile
{
display: inline-block;
}


#img-6-tecno-escritorio
{
display: none;
}
#img-6-tecno-mobile
{
display: inline-block;
}





#mostrarCaracteristicasEscritorio
{
display: none;
}


#mostrarCaracteristicasMobile
{
display: inline-block;
}


#btnCotizaloAquiTecnologia 
{
float: left;
position: absolute;
margin-top: 0.9%;
position: absolute;
margin-left: -49%;
margin-left: -50%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 13px;
}


#btnVerMasFotos 
{
margin-top: -2.5%;
}

#btnVerFotosAnteriores {
margin-top: -2.5%;
}

#btnCotizaloAqui {
margin-top: -1.7%;
margin-left: -71%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 5%;
padding-left: 5%;
font-size: 14px;
}

#btnCompartir {
margin-top: 0.7%;
}
#btnCompartirPlay {
margin-top: -1%;
}


#divImgsMusicAdentro
{
margin: 0 auto;

}

#imgMusic2 {
margin-left: 20%;
margin-right: 20%;
}
#spotify {
width: 100%;
height: 707px;
}
.navbar-nav > li {
margin-right: 21px;
height: 26px;
font-size: 11px;
}

.navbar-nav > li > a {
padding-left: 6px;
padding-right: 6px;
text-align: center;
}

#logo{
width: 72%;
height: auto;
}
.navbar-brand {
width: 201px;
float: left;
height: 50px;
padding: 0px 0px;
font-size: 18px;
line-height: 20px;
margin-top: 19px;
}


#navbar-header{
margin-right: 0;

margin-left: 0%;

margin-top: -25px;
}

#divImgVideo {


padding-left: 0px;
}
#video {
width: 100%;
margin-left: 0%;
}

#btnCampana {
margin-top: -11px;

font-size: 13px;
margin-left: -14%;
}

#btnHome {

font-size: 13px;
}
#btnEonTech {
font-size: 12px;

}

#btnPlayList {

font-size: 13px;
}
#btnTecnologia {

font-size: 13px;
}
#btnMundoEon {
margin-top: -11px;

font-size: 13px;
margin-left: -13%;
}
#btnGaleria {

font-size: 13px;
}
#videoET {
width: 81%;
height: auto;
margin-left: 10.5%;
max-width: 1000px;
margin-top: 4%;
}
#divBtnCampana {
margin-top: 1%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}


#divTablaEon {
padding-bottom: 5px;
margin: auto 0px;
}
#col-md-7 {

padding-left: 0px;
padding-bottom: 3%;
}

}







@media screen and (max-width: 808px)
{



#show-next-image {
float: left;
margin-top: -40%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}
#show-next-image2 {
float: left;
margin-top: -40%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}

#btnCotizaloAquiTecnologia 
{
float: left;
position: absolute;
margin-top: -1.6%;
position: absolute;
margin-left: -49%;
margin-left: -50%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 13px;
}

#imgMusic2 
{
margin-left: 17%;
margin-right: 17%;
}
#btnVerFotosAnteriores {
margin-top: -2.7%;
}
#spotify {
width: 100%;
height: 707px;
}
.navbar-brand {
width: 149px;
float: left;
height: 50px;
padding: 0px 0px;
font-size: 18px;
line-height: 20px;
margin-top: 16px;
}

#logo {
width: 100%;
height: auto;
}

#videoET {
width: 81%;
height: auto;
margin-left: 10.7%;
max-width: 1000px;
margin-top: 4.2%;
}

#divBtnCampana {
margin-top: 11%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}
#divTablaEon {
margin: auto 0px;
width: 82%;      margin: auto 0px;
}


}












@media screen and (max-width:769px)
{

#imgMusic1,#imgMusic2,#imgMusic3
{
width: 98%;
}

#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 2%;
}


#imgHeader
{
display: none;
}
#imgHeader2
{
display: inline-block;
}
#imgHeader3 {
display: none;
}
#btnContenidoTecnologia {
width: 100%;
}

#btnCotizaloAquiTecnologia 
{
float: left;
position: absolute;
margin-top: -0.1%;
position: absolute;
margin-left: -49%;
margin-left: -43%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 13px;
}

#btnVerMasFotos {
margin-top: -4.5%;
}
#btnVerFotosAnteriores {
margin-top: -4.5%;
}
#divRowImgsMusic{
display: none;
}

#divRowImgsMusic2 
{
display: none;
}
#imgMusic1 {
display: inherit;

margin-bottom: 3%;
}
#imgMusic2 {
margin-left: 1%; 
margin-right: 0%;
display: inherit;
margin-bottom: 3%;
}
#imgMusic3 {
float: none;
display: inherit;
margin-bottom: 1%;
}
#spotify {
width: 100%;
height: 589px;
}
#navbar-header{

margin-top: -2px;
}

.navbar-brand {

margin-top: 7px;
}

#divImgVideo {
padding-left: 0;
padding-right: 0;
margin-left: 4%;
margin-right: 4%;
}
#divTxtCamapana {
padding-left: 4%;
padding-right: 4%;
padding-top: 0px;

font-size: 14px;
}

#video {

width: 100%;

margin-left: 0%;
}
#h4{
font-size: 13px;
}

#btnCampana 
{
margin-top: -11px;
font-size: 10px;

margin-left: -19%;
}

#btnHome 
{
font-size: 10px;

}
#btnEonTech 
{
font-size: 10px;

}
#btnPlayList 
{
font-size: 10px;

}
#btnTecnologia 
{
font-size: 10px;

}
#btnMundoEon 
{
margin-top: -11px;
font-size: 10px;

margin-left: -16%;
}
#btnGaleria 
{
font-size: 10px;

}




#divRowImg {
width: 96%;
margin: 0 auto;
}

#btnsImgHome {
width: 100%;
margin-top: 0;
margin-right: 0.5%;
float: none;
}

#btnsImgHome2 {
width: 100%;
margin-top: 0;
margin-right: 0.5%;
float: none;
}
#btnConoce, #btnComparte {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 3px;
margin-top: 8px;

font-size: 11px;
}

#btnConoce2, #btnComparte2 {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 3px;
margin-top: 8px;

font-size: 11px;
}

#rowImgTextTecnologia {
width: 100%;

}
#rowImgTextPlayList {
width: 100%;

}
#rowImgTextHome {
width: 100%;

}
#rowImgTextTecnologiaSi{
width: 100%;

}
#rowImgTextTecnologia2 {
width: 100%;

}

#col-md-7-vide-home{
padding-right: 0;
padding-left: 0;
}
#videoET {
width: 81%;
height: auto;
margin-left: 10.8%;
max-width: 1000px;
margin-top: 4.6%;
}

#videoET {
width: 78%;
height: auto;
margin-left: 11.1%;
max-width: 1000px;
margin-top: 3%;
}
#imgSombraVideoET {
position: relative;
width: 100%;
height: auto;
background-color: rgba(0, 0, 0, 0);
margin-top: -50%;
}
#buttonbar {
display: none;
float: right;
margin-top: -2%;
margin-right: 10px;
position: relative;
z-index: 999999999999;
}


#divBtnCampana {
margin-top: 1%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}

}


#divRowImgsMusic3
{
display: none;
}


@media screen and (max-width: 769px)
{
#divRowImgsMusic3 {
display: inline-block;
padding-left: 4%;
padding-right: 4%;

}
}


@media screen and (max-width:723px)
{
#Galeri_1_columnas,#Galeri_3_columnas
,#Galeri_5_columnas,#Galeri_7_columnas
,#Galeri_9_columnas,#Galeri_11_columnas
{

margin-left: 0; 
}


#divRowImgsMusic3
{
display: inline-block;
}





}



@media screen and (max-width:700px)
{


#imgMusic1,#imgMusic2,#imgMusic3
{
width: 84%;
}

#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 3%;
}

#show-next-image {
float: left;
margin-top: -42%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}
#show-previous-image {
float: left;
margin-top: -39%;
margin-left: -8%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}

#show-next-image2 {
float: left;
margin-top: -42%;
margin-left: 103%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}
#show-previous-image2 {
float: left;
margin-top: -39%;
margin-left: -8%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgba(255, 255, 255, 0);
border-color: rgba(204, 204, 204, 0);
}

}


@media screen and (max-width: 700px)
{
#imgMusic1, #imgMusic2, #imgMusic3 {
width: 35%;
}

#show-next-image {
float: left;
margin-top: -42%;
margin-left: 97%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(21, 21, 21, 0.68);
border-color: rgba(204, 204, 204, 0.96);
}
#show-previous-image {
float: left;
margin-top: -42%;
margin-left: -4%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgb(38, 40, 30);
border-color: rgb(204, 204, 204);
}

#show-next-image2 {
float: left;
margin-top: -42%;
margin-left: 97%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(21, 21, 21, 0.68);
border-color: rgba(204, 204, 204, 0.96);
}
#show-previous-image2 {
float: left;
margin-top: -42%;
margin-left: -4%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgb(38, 40, 30);
border-color: rgb(204, 204, 204);
}


#btnCompartirGaleriaModal {
width: 32%;
border-style: solid;
border-width: 1px;
color: #E9F2EF;
border-radius: 0;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;

margin-bottom: 5px;
margin-top: 8px;
font-size: 10px;
font-weight: bold;
letter-spacing: 1px;
background-color: rgba(2, 2, 2, 0.79);
border-color: rgba(120, 120, 120, 0.34);
}

#divRowImgsMusic3
{
display: none;
}

#divRowImgsMusic2
{
display: inline-block;
}



#Galeri_1_columnas,#Galeri_3_columnas
,#Galeri_5_columnas,#Galeri_7_columnas
,#Galeri_9_columnas,#Galeri_11_columnas
{

margin-left: 0; 
}

#rowImgTextTecnologia{
display: none;
}

#rowImgTextTecnologiaTable{
display: inline-block;
}

#btnCampana {
margin-top: -11px;
font-size: 10px;
margin-left: -30%;
}
#btnHome {
font-size: 10px;
}
#btnEonTech {
font-size: 10px;
}
#btnPlayList {
font-size: 10px;
}

#btnTecnologia {
font-size: 10px;
}
#btnMundoEon {
margin-top: -11px;
font-size: 10px;
margin-left: -22%;
}
#btnGaleria {
font-size: 10px;
}



#btnCotizaloAquiTecnologia 
{
float: left;
position: absolute;
margin-top: -2.1%;
position: absolute;
margin-left: -49%;
margin-left: -50%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 10px;
}

#btnVerMasFotos {
margin-top: -6.5%;
}
#btnVerFotosAnteriores {
margin-top: -6.5%;
margin-left: -4%;
}
#flechaNextPlaylist {
margin-right: -36px;
width: 13px;
height: 26px;
margin-top: -15px;
font-size: 30px;
}
#flechaAtrasPlaylist {
margin-left: -35px;
width: 13px;
height: 26px;
margin-top: -13px;
font-size: 30px;
}
#btnCotizaloAqui {
margin-top: -1.9%;
margin-left: -78%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 5%;
padding-left: 5%;
font-size: 10px;
}

#btnCompartir {
float: right;
margin-top: -0.3%;
margin-left: -62px;
margin-right: 0px;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 9px;
}
#btnCompartirPlay {
float: right;
margin-top: -0.3%;
margin-left: -62px;
margin-right: 0px;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 9px;
}

#imgMusic2 {
margin-left: 20%;
margin-right: 20%;
}
#spotify {
width: 100%;
height: 409px;
}
#skills-produxto{
display: none;
}
#skills-produxto-3x3{
display: inline-block;
}
#divRowImg {
width: 98%;
margin: 0 auto;
}

#videoET {
width: 78%;
height: auto;
margin-left: 12.8%;
max-width: 1000px;
margin-top: 4.5%;
}
#imgSombraVideoET {
position: relative;
width: 100%;
height: auto;
background-color: rgba(0, 0, 0, 0);
margin-top: -55.8%;
}
#buttonbar {
display: none;
float: right;
margin-top: -2%;
margin-right: 10px;
position: relative;
z-index: 999999999999;
}
#divBtnCampana {
margin-top: -1%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}
#divTablaEon {
width: 82%;
margin: auto 0px;
}

#rowImgTextTecnologiaSi
{
display: none;
}
#rowImgTextTecnologia2
{
display: inline-block;
}
#textTecnologia {
float: none;
margin-bottom: 5%;
}
#imgTecnologia {
float: none;
}

#modal-dialog-tecnologia {
padding-top: 0%;
width: 90%;
margin: 30px auto;
max-width: 971px;
}

#divOrdenarColumnas {
column-count: 1;
-moz-column-count: 1;
-webkit-column-count: 1;
-o-column-count: 1;
column-gap: 0em;
-moz-column-gap: 0em;
-webkit-column-gap: 0em;
-o-column-gap: 0em;
max-height: 248px;
overflow-y: scroll;

}


}

@media screen and (max-width:450px)
{
#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 4%;
}


#btnCompartir {
float: right;
margin-top: 2.7%;
margin-left: -62px;
margin-right: 0px;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 9px;

}
#btnCompartirPlay {
float: right;
margin-top: -1.3%;
margin-left: -62px;
margin-right: 0px;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 9px;

}
}


@media screen and (max-width:390px)
{
#imgMusic1,#imgMusic2,#imgMusic3
{
width: 47%;
}

#footerFacebook,#footerTwitter,#footerInstagram,#footerYoutube
{
width: 5%;
}

#show-next-image {
float: left;
margin-top: -53%;
margin-left: 95%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(21, 21, 21, 0.68);
border-color: rgba(204, 204, 204, 0.96);
}
#show-previous-image {
float: left;
margin-top: -53%;
margin-left: -7%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgb(38, 40, 30);
border-color: rgb(204, 204, 204);
}


#show-next-image2 {
float: left;
margin-top: -53%;
margin-left: 95%;
z-index: 99999999;
position: static;
background-image: url("../src/img/galeria/flecha-2.png");
width: 26px;
height: 40px;
background-color: rgba(21, 21, 21, 0.68);
border-color: rgba(204, 204, 204, 0.96);
}
#show-previous-image2 {
float: left;
margin-top: -53%;
margin-left: -7%;
background-image: url("../src/img/galeria/flecha-1.png");
width: 26px;
height: 40px;
background-color: rgb(38, 40, 30);
border-color: rgb(204, 204, 204);
}

#btnPlayList {
font-size: 10px;
}
#btnTecnologia {
font-size: 10px;
}
#btnMundoEon {
margin-top: -11px;
font-size: 10px;
margin-left: -30%;
}
#btnGaleria {
font-size: 10px;
}
#btnCotizaloAquiTecnologia 
{
float: left;
position: absolute;
margin-top: 2.9%;
position: absolute;
margin-left: -49%;
margin-left: -41%;
padding-top: 3px;
padding-bottom: 3px;
padding-right: 8px;
padding-left: 8px;
font-size: 9px;
}


#imgMusic2 {
margin-left: 20%;
margin-right: 20%;
}
#spotify {
width: 100%;
height: 342px;
}
#btnConoce, #btnComparte {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 4px;
margin-top: 8px;
font-size: 11px;
}

#btnConoc2, #btnCompart2 {
width: 100%;
padding-top: 4px;
padding-bottom: 4px;
padding-right: 1%;
padding-left: 1%;
margin-bottom: 4px;
margin-top: 8px;
font-size: 11px;
}
#btnsImgHome 
{
width: 28%;
margin-top: -23.5%;
margin-right: 0.5%;

width: 100%;      margin-top: 0;      margin-right: 0.5%;      float: none;
}
#btnsImgHome2 
{
width: 28%;
margin-top: -23.5%;
margin-right: 0.5%;

width: 100%;      margin-top: 0;      margin-right: 0.5%;      float: none;
}
#btnConoceMasAqui {
width: 100%;
font-size: 10px;
}
#h4 {
font-size: 10px;
}
#h4_2 {

font-size: 10px;
}
#pItalic {
font-size: 10px;
}
.navbar-brand {
margin-top: 3px;
width: 132px;
}
#divRowImg {
width: 100%;
margin: 0 auto;
}

#videoET {
width: 77%;
height: auto;
margin-left: 12.8%;
max-width: 1000px;
margin-top: 4.1%;
}
#imgSombraVideoET {
position: relative;
width: 100%;
height: auto;
background-color: rgba(0, 0, 0, 0);
margin-top: -55.8%;
}

#buttonbar {
display: none;
float: right;
margin-top: -3%;
margin-right: 10px;
position: relative;
z-index: 999999999999;
}


#divBtnCampana {
margin-top: 2%;
padding-bottom: 35px;
padding-right: 0px;
padding-left: 0px;
}
#divTablaEon {
padding-top: 1%;
padding-left: 0%;
width: 100%;      margin: auto 0px;
}



}




/*                FIN  MEDIA              */
