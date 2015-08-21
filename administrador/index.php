<?php
session_start();
if (isset($_SESSION['nombre_usuario']) && isset($_SESSION['id_usuario'])) 
{
    include '../models/access_db.php'; //incluimos el acceso a la base de datos

    if(isset($_POST["plantillaActual"]))
    {
         $_SESSION['id_plantilla'] = 1;
    }elseif(isset($_SESSION["plantillaCreada"]) || isset($_POST["plantillaCreada"]))
    {
         $_SESSION['id_plantilla'] = 2;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/colorpicker.js"></script>
	<script type="text/javascript" src="js/jquery.tagsinput.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/fileinput.css" rel="stylesheet" type="text/css">
	<link href="css/styleHyundai.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/jquery.tagsinput.css" type="text/css">
	<link href="css/cmsStyles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/960.css" />
	<link href="http://youoneagency.com/hyundai/youoneagency.com/hyundai/src/img/img-compartir-Facebook.jpg" rel="image_src">
	<link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
</head>
<body>
		<div class="lightbox">
			<div class="img"><img id="lightImg" alt="botones"></div>
		</div>
	<div class="container_12">
			<br>
		<div class="grid_3"><!--First row-->
			<img src="img/logo.png" alt="">
		</div>
		<div class="grid_9" id="grid2">
			<p class="text">SELECCIONA LA SECCIÓN PARA EDITAR</p>
			<div class="buttonsContainer">
				<button class="headerButton">GUARDAR</button>
				<button class="headerButton" id="publicar">PUBLICAR</button>
			</div>
			<hr>
		</div>
		  <br><br><br><br>
		  <div class="clear"></div><!--Second row-->
		  <div class="grid_3">
				<div class="selectSection">
					<p class="ssTitle">BODY <i class="hIcon fa fa-angle-down"></i></p>
						<div class="subSectionContainer">
							<div class='opt-0 subSection transition activeOption first'>Color de fondo</div>

							<div class='opt-1 subSection transition activeOption'>Textos / Colores</div>

							<div class='opt-2 subSection transition activeOption'>Colores / Iconos / Legales</div>
	
							<div id="1-1" class='opt-3 subSection transition activeOption'>Imágen Producto</div>
							<div id="1-2" class='opt-3 subSection transition'>Botones</div>
							<div id="1-3" class='opt-3 subSection transition'>Descripción del Producto</div>
							<div id="1-4" class='opt-3 subSection transition'>Título de Campaña</div>
							<div id="1-5" class='opt-3 subSection transition'>Video</div>
							<div id="1-6" class='opt-3 subSection transition'>Animación</div>
						</div>
				</div>
		  </div>
		  <div class="grid_9">
			<div class="sectionsContainer">
				<button class="transition section activeSection" data-relation="0" id="section-1">BODY</button>
				<button class="transition section" data-relation="1" id="section-2">HEADER</button>
				<button class="transition section" data-relation="2" id="section-3">FOOTER</button>
				<button class="transition section" data-relation="3" id="section-4">SECCIÓN 1</button>
				<button class="transition section" data-relation="4" id="section-5">SECCIÓN 2</button>
				<button class="transition section" data-relation="5" id="section-6">SECCIÓN 3</button>
				<button class="transition section" data-relation="6" id="section-7">SECCIÓN 4</button>
				<button class="transition section" data-relation="7" id="section-8">SECCIÓN 5</button>
			</div>
			<!--Module-->
			<div class="modules">
				<div class="module" id="module-1">
					<?php include 'php/body.php' ?>
				</div>
				<div class="module" id="module-2">
					<?php include 'php/header.php' ?>
				</div>
				<div class="module" id="module-3">
					<?php include 'php/footer.php' ?>
				</div>
				<div class="module" id="module-4">
					<?php include 'php/section_1.php' ?>
				</div>
				<div class="module" id="module-5">
					<?php include 'php/section_2.php' ?>
				</div>
				<div class="module" id="module-6">
					<?php include 'php/section_3.php' ?>
				</div>
				<div class="module" id="module-7">
					<?php include 'php/section_4.php' ?>
				</div>
				<div class="module" id="module-8">
					<?php include 'php/section_5.php' ?>
				</div>
			</div>
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
    header("Location: login.php");
}
?>