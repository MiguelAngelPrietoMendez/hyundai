<?php
session_start();
if (!isset($_SESSION['nombre_usuario']) && !isset($_SESSION['id_usuario'])) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/fileinput.css" rel="stylesheet" type="text/css">
	<link href="css/styleHyundai.css" rel="stylesheet" type="text/css">
	<link href="css/cmsStyles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/960.css" />
	<link href="http://youoneagency.com/hyundai/youoneagency.com/hyundai/src/img/img-compartir-Facebook.jpg" rel="image_src">
	<link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
</head>
<body>
	<div class="container_12">
			<br>
		<div class="grid_3"><!--First row-->
			<img src="img/logo.png" alt="">
		</div>
		<div class="grid_9" id="grid2">
			<p class="text">INGRESA TUS DATOS:</p>
			<hr>
		</div>
		  <br><br><br><br>
		  <div class="clear"></div><!--Second row-->
		  <div class="loginContainer">
                      <form action="../models/create_sesion.php" method="post" class="ssTitle" autocomplete="off">
		  		<p class="ssTitle">INGRESAR</p>
		  		<label class="loginForm" for="user"><i>Usuario:</i></label>
                                <input required class="loginForm" type="email" name="itMail">
		  		<label class="loginForm" for="pass"><i>Contraseña:</i></label>
		  		<input required class="loginForm" type="password" name="itPass">
		  		<button type="submit" class="activeSection" id="loginSubmit">INGRESAR</button>
		  	</form><br>
		  	<center><a href="#" style="color: #97A543"><u>recordar contraseña</u></a></center>
		  </div>
	</div>
	<footer>
		<hr>
		<p>HYUNDAI es una marca registrada de la compañia HYUNDAI Motor / Información Legal Todos los derechos reservados / 2015 HYUNDAI Motors</p>
	</footer>
</body>
</html>
<?php
} else {
    header("Location: php/crear.php");
}
?>