<?php
    include 'models/access_db.php';
    
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  prefix="og: http://ogp.me/ns#">
    <head>
        
        <title>HYUNDAI</title>
        <?php
        include './sections/head.php';
         include './sections/meta/home.php';
        ?>
      
    </head>
   
    <script>
    /*
    $( document ).ready(function() 
    {
        
        $.ajax({
            type: 'POST',
            url: 'controls/viewHome.php',
            data:"",
            success: function(data) 
            {
                $("#contenedorPrincipal").html(data);

            }
         }); 
    }); 
    */
    

          

    </script>
 
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

        <?php 
            include 'controls/viewHome.php';
        ?>


      </div>
    <?php
    include './sections/footer.php';
    ?>
   
  </body>

</html>
</html>
