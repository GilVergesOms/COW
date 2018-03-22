<!DOCTYPE html> 

<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estils.css">
</head>
<body>

	<header>
		<div class="container">
			<div id="header" class="row">
				<div class="col-xs-12">
					<nav id="menu">
						<ul>
							 <li><a href="#">Enlace 1</a>
							 	<ul>
								 <li><a href="#">Inici</a></li>
								 <li><a href="#.html">Qui som?</a></li>
								 <li><a href="https://www.turkishairlines.com/">Visita la competencia</a></li>
								 </ul>
							 </li>
							 <li><a href="#">Enlace 2</a></li>
							 <li><a href="#">Enlace 3</a></li>
							 <li><a href="#">Enlace 4</a></li>
						</ul>
					</nav>
				</div>
				<div class="l_button">
							<button class="btn btn-primary"> login </button>
				</div>
				<div class="si_button">
							<button class="btn btn-primary">sign in</button>
				</div>
			</div>
		</div>
		<div class="clearfix visible-sm-block"></div>
	</header>
	<div class="container">
		<section class="main row">
			<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
				<img id="mainImage" src="Resources\plane2.png">
			</article>
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<p id="aside_id">Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continua navegando, consideramos que acepta su uso. <br> Cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.</p>
			</aside>
		</section>
		<br>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<h2 id="ofert_title">Ultima cerca realitzada: </h2>
				<div class="table-responsive">
					<?php
					$desti = $_POST['Desti'];
					$adults = $_POST['Adults'];
					$origen = $_POST['Origen'];
					$nens = $_POST['Nens'];
					$anada = $_POST['Anada'];
					$tornada = $_POST['Tornada'];
					$nombre = $_POST['nombre'];
					$apellido = $_POST['apellido'];
					if(!preg_match("/^[A-Z][-'a-zA-Z]+$/",$nombre)){
						$nombre = "Nombre no valido -";
					}
					if(!preg_match("/^[A-Z][-'a-zA-Z]+$/",$apellido)){
						$apellido = " - Apellido no valido";
					}
					?>
					<table class="table table-bordered table-hover table-striped">
						<tr class="info">
							<th colspan="2">Informació</th>
						</tr>
						<tr>
							<td class="titulo"><b><u>Origen</u></b></th>
							<td class="titulo"><b><u>Desti</u></b></th>
						</tr>
						<tr>
							<td><?php echo $origen ?></th>
							<td><?php echo $desti ?></th>
						</tr>
						<tr>
							<td><b><u>Adults</u></b></th>
							<td><b><u>Nens</u></b></th>
						</tr>
						<tr>
							<td><?php echo $adults ?></th>
							<td><?php echo $nens ?></th>
						</tr>
						<tr>
							<td><b><u>Anada</u></b></th>
							<td><b><u>Tornada</u></b></th>
						</tr>
						<tr>
							<td><?php echo $anada ?></th>
							<td><?php echo $tornada ?></th>
						</tr>
						<tr>
							<th colspan="2"><?php echo $nombre." ".$apellido ?></th>
						</tr>
					</table>
				<div>
			</div>
		</div>
	</div>
	<div id="busqueda" class="row" class="col-xs-12 col-sm-12 col-md-12">
		<form method="get" action="http://www.google.com/custom">
			<table bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
			  <tr>
			    <td><a href="http://www.google.com/custom/">
			    <img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google" align="absmiddle">
			    </a>
			    </td><td>
			    <input type="text" name="q" size="25" maxlength="255" value="">
			    </td><td>
			    <input type="submit" name="btnG" value="Buscar en Google">
			    </td>
			  </tr>
			</table>
		</form>
	</div>
	<script src="js/jquery.js"></script>  <!--No utilitzo en aquesta practica-->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>




