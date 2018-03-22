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
		<div class="row">
			<div class="col-md-12">
				<h1><b>Buscador de vols:</b></h1>
			</div>
		</div>
		<div class="row">
			<div id="content">
				<form action="servidor.php" method="post" name="frm">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>Origen:
							<select name="Origen">
								<option value="Barcelona">Barcelona</option>
								<option value="Madrid">Madrid</option>
								<option value="Paris">Paris</option>
								<option value="Londres">Londres</option>
								<option value="Vic">Vic</option>
							</select>
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>Desti:
							<select name="Desti">
								<option value="Barcelona">Barcelona</option>
								<option value="Madrid">Madrid</option>
								<option value="Paris">Paris</option>
								<option value="Londres">Londres</option>
								<option value="Vic">Vic</option>
							</select>
						</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<p>Aldults:
							<select name="Adults">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<p>Nens:
							<select name="Nens">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</p>
					</div>
					<div class="calendar" class="container">
						<table bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						  	<tr>
						    	<td class="cal_text">
						    		<h4>Anada</h4>
						    	</td>
						    	<td class="cal_text">
						    		<h4>Tornada</h4>
						    	</td>
						  	</tr>
						  	<tr>
						    	<td>
						    		<input name="Anada" id="tornada" type="date" value="2018-01-01">
						    	</td>
						    	<td>
						    		<input name="Tornada" id="tornada" type="date" value="2018-01-01">
						    	</td>
						  	</tr>
						</table>
					</div>
					<div class="info_pers" class="container">
						<input type="text" name="nombre" />
						<input type="text" name="apellido" />
					</div>
					<div class="s_button">
						<button class="btn btn-primary" type="submit">Buscar</button>
					</div>
					<input type="checkbox" name="only_go" value="go"> Només anada<br>
				</form>
			</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<h2 id="ofert_title">Ofertas mas populares del momento: </h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr class="info">
							<th>Vuelo</th>
							<th>Precio (ida y vuelta)</th>
						</tr>
						<tr>
							<td>Madrid-Ibiza</th>
							<td>140&#8364</th>
						</tr>
						<tr>
							<td>Madrid-Roma</th>
							<td>190&#8364</th>
						</tr>
						<tr>
							<td>Barcelona-Ibiza</th>
							<td>55&#8364</th>
						</tr>
						<tr>
							<td>Madrid-Barcelona</th>
							<td>56&#8364</th>
						</tr>
						<tr>
							<td>Barcelona-Londres</th>
							<td>125&#8364</th>
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

