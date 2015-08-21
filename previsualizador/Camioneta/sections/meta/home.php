<?php


 if ($_SERVER["SERVER_PORT"] == "443") 
 {
      $pageURL .= $_SERVER["SERVER_NAME"].":80".$_SERVER["REQUEST_URI"];
 } else 
 {
      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }


 $partes = explode("/", $_SERVER["REQUEST_URI"]);

 $urlServer=$_SERVER["SERVER_NAME"]."/".$partes[1];
        
        

?>



<!--META FACEBOOOK-->
<link href="<?php echo $pageURL."src/img/img-compartir-Facebook.jpg" ?>" rel="image_src" />
<meta property="og:title" content="Nuevo carro EON TECH de Hyundai" />
<meta property="og:description" content="Para ti que te gusta estar siempre online, cuota diaria desde $4.999 - Hasta el 100% de financiación." />
<meta property="og:url" content="<?php echo $pageURL ?>" />
<meta property="og:image" content="<?php echo $pageURL."src/img/img-compartir-Facebook.jpg" ?>" />

<!-- META TWITTER -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@HyundaiColombia">
<meta name="twitter:creator" content="@HyundaiColombia">
<meta name="twitter:title" content="Nuevo carro EON TECH de Hyundai">
<meta name="twitter:description" content="Solo para ti que te gusta estar siempre online, cuota diaria desde $4.999 - Hasta el 100% de financiación.">
<meta name="twitter:image" content="<?php echo $pageURL."src/img/img-compartir-Facebook.jpg" ?>">



 
  