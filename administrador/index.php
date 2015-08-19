<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/colorpicker.js"></script>
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
						<div class="sectionOptions">Color de fondo</div>
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
					<?php require('php/body.php') ?>
				</div>
				<div class="module" id="module-2">
					<?php require('php/header.php') ?>
				</div>
				<div class="module" id="module-3">
					<?php require('php/footer.php') ?>
				</div>
				<div class="module" id="module-4">
					<?php require('php/section_1.php') ?>
				</div>
				<div class="module" id="module-5">
					<?php require('php/section_2.php') ?>
				</div>
				<div class="module" id="module-6">
					<?php require('php/section_3.php') ?>
				</div>
				<div class="module" id="module-7">
					<?php require('php/section_4.php') ?>
				</div>
				<div class="module" id="module-8">
					<?php require('php/section_5.php') ?>
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