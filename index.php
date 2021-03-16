<?php
	session_start();
	
	include 'php/idiomas.php';
	$idiomas = new Idiomas();
	if(isset($_GET['lang']) == null && isset($_SESSION["lang"]) == null){
		$_SESSION["lang"] = "es";
	}
	else{
		if(isset($_GET['lang']) != null){
			$_SESSION["lang"] = $_GET['lang'];
		}
	}
	
	if(isset($_SESSION['email']) == null){
		echo '
		<!DOCTYPE html>
		<html lang="en" class="no-js">
			<head>
				<meta charset="UTF-8" />
				<title>'.$idiomas->getString($_SESSION["lang"], "tituloPestana").'</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
				<meta name="description" content="Herramienta de autodiagnostico Localcir" />
				
				<meta name="MobileOptimized" content="width">
				<meta name="HandheldFriendly" content="true">
				<meta name="apple-mobile-web-app-capable" content="yes">
				<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
				<link rel="manifest" href="./manifest.json">
				
				<link rel="shortcut icon" href="images/iconolocalcir.png">
				<link rel="stylesheet" type="text/css" href="css/style.css" />
				<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
			</head>
			<body>
				<header>
					<div class="header">
						<a href="/herramientaeconomiacircularpruebas/php/login.php"><img class="imgheader" src="images/logo.jpg"/></a>
					</div>
				</header>
				<div class="container">
					<div id="tituloHerramienta">
						<h1>'.$idiomas->getString($_SESSION["lang"], "nombreHerramienta").'</h1>
					</div>
					<section>				
						<div id="container_demo" >
							<a class="hiddenanchor" id="toregister"></a>
							<a class="hiddenanchor" id="tologin"></a>
							<div id="wrapper">
								<div id="login" class="animate form">
									<form  action="php/login.php" method="POST" autocomplete="on"> 
										<h1>
											<img class="imgLogo" width="30%" src="images/logoTitulo.png"/>
											<p class="change_link5">
												<a href="?lang=es"><img src="images/es.png"/></a>
												<a href="?lang=pt"><img src="images/pt.png"/></a>
											</p>
										</h1>
										<p> 
											<label for="username" class="uname" data-icon="u" >'.$idiomas->getString($_SESSION["lang"], "email").'</label>
											<input id="username" name="email" required="required" type="text" placeholder="correo@electronico.com"/>
										</p>
										<p> 
											<label for="contrasena" class="tucontrasena" data-icon="p">'.$idiomas->getString($_SESSION["lang"], "contrasena").'</label>
											<input id="contrasena" name="contrasena" required="required" type="password" placeholder="ej. A1b2C3d4" /> 
										</p>
										<p class="login button"> 
											<input type="submit" name="btnIniciarSesion" value="'.$idiomas->getString($_SESSION["lang"], "iniciarSesion").'" /> 
										</p>
										<p class="change_link">
											¿No tienes cuenta?
											<a href="#toregister" class="to_register">'.$idiomas->getString($_SESSION["lang"], "registrarse").'</a>
											
											<a href="php/formularioRecuperarContrasena.php" id="recu" class="to_register">'.$idiomas->getString($_SESSION["lang"], "recuperarContrasena").'</a>
										</p>
									</form>
								</div>

								<div id="register" class="animate form">
									<form  action="php/registro.php" method="POST" autocomplete="on"> 
										<h1>HAECE
											<p class="change_link5">
												<a href="#toregister?lang=es"><img src="images/es.png"/></a>
												<a href="#toregister?lang=pt"><img src="images/pt.png"/></a>
											</p>
										</h1>
										<p> 
											<label for="razonsocialsignup" class="razonsocial">'.$idiomas->getString($_SESSION["lang"], "razonSocial").'</label>
											<input id="razonsocialsignup" name="razonsocial" required="required" type="text" placeholder="" />
										</p>
										<p> 
											<label for="nifsignup" class="nif">'.$idiomas->getString($_SESSION["lang"], "cif").'</label>
											<input id="nifsignup" name="nif" required="required" type="text" placeholder="" />
										</p>
										<p> 
											<label for="comunidadautonomasignup" class="comunidadautonoma">'.$idiomas->getString($_SESSION["lang"], "comunidadAutonoma").'</label>
											<select id="comunidadautonomasignup" name="comunidadautonoma" required="required">
												<option value=""></option>
												<option value="Andalucía">Andalucía</option>
												<option value="Aragón">Aragón</option>
												<option value="Asturias">Asturias, Principado de</option>
												<option value="Balears">Balears, Illes</option>
												<option value="Canarias">Canarias</option>
												<option value="Cantabria">Cantabria</option>
												<option value="Castilla La-Mancha">Castilla La-Mancha</option>
												<option value="Castilla y León">Castilla y León</option>
												<option value="Cataluña">Cataluña</option>
												<option value="Ciudad de Ceuta">Ciudad de Ceuta</option>
												<option value="Ciudad de Melilla">Ciudad de Melilla</option>
												<option value="Comunitat Valenciana">Comunitat Valenciana</option>
												<option value="Extremadura">Extremadura</option>
												<option value="Galicia">Galicia</option>
												<option value="Madrid">Madrid, Comunidad de</option>
												<option value="Murcia">Murcia, Región de</option>
												<option value="Navarra">Navarra, Comunidad Foral de</option>
												<option value="País Vasco">País Vasco</option>
												<option value="La Rioja">Rioja, La</option>
											</select>
										</p>
										<p> 
											<label for="provinciasignup" class="provincia">'.$idiomas->getString($_SESSION["lang"], "provincia").'</label>
											<input id="provinciasignup" name="provincia" required="required" type="text" placeholder="" />
										</p>
										<p> 
											<label for="localidadsignup" class="localidad">'.$idiomas->getString($_SESSION["lang"], "localidad").'</label>
											<input id="localidadsignup" name="localidad" type="text" placeholder="" />
										</p>
										<p> 
											<label for="cargorsignup" class="cargor">'.$idiomas->getString($_SESSION["lang"], "cargoResponsable").'</label>
											<input id="cargorsignup" name="cargor" type="text" placeholder="" />
										</p>
										<p> 
											<label for="nombrersignup" class="nombrer" data-icon="u">'.$idiomas->getString($_SESSION["lang"], "nombreResponsable").'</label>
											<input id="nombrersignup" name="nombrer" type="text" placeholder="" />
										</p>
										<p> 
											<label for="apellidorsignup" class="apellidor" data-icon="u">'.$idiomas->getString($_SESSION["lang"], "apellidoResponsable").'</label>
											<input id="apellidorsignup" name="apellidor" type="text" placeholder="" />
										</p>
										<p> 
											<label for="tamanoempresasignup" class="tamanoempresa">'.$idiomas->getString($_SESSION["lang"], "tamanoEmpresa").'</label>
											<select id="tamanoempresasignup" name="tamanoempresa">
												<option value=""></option>
												<option value="Microempresa">Microempresa (menos de 10 personas)</option>
												<option value="Pequeña empresa">Pequeña empresa (entre 10 y 50 personas)</option>
												<option value="Mediana empresa">Mediana empresa (entre 50 y 250)</option>
												<option value="Gran empresa">Gran empresa (más de 250)</option>
											</select>
										</p>
										<p> 
											<label for="anosactividadsignup" class="anosactividad">'.$idiomas->getString($_SESSION["lang"], "anosActividad").'</label>
											<select id="anosactividadsignup" name="anosactividad">
												<option value=""></option>
												<option value="Menos de 5 años">Menos de 5 años</option>
												<option value="De 5 a 10 años">De 5 a 10 años</option>
												<option value="Más de 10 años">Más de 10 años</option>
											</select>
										</p>
										<p> 
											<label for="emailsignup" class="email" data-icon="e" >'.$idiomas->getString($_SESSION["lang"], "emailObligatorio").'</label>
											<input id="emailsignup" name="email" required="required" type="email" placeholder="correo@electronico.com"/> 
										</p>
										<p> 
											<label for="contrasenasignup" class="contrasena" data-icon="p">'.$idiomas->getString($_SESSION["lang"], "contrasenaObligatorio").'</label>
											<input id="contrasenasignup" name="contrasena" required="required" type="password" placeholder="ej. A1b2C3d4"/>
										</p>
										<p class="signin button"> 
											<input type="submit" name="btnRegistro" value="'.$idiomas->getString($_SESSION["lang"], "registrarse").'"/> 
										</p>
										<p class="change_link">  
											'.$idiomas->getString($_SESSION["lang"], "tienesCuenta").'
											<a href="#tologin" class="to_register">'.$idiomas->getString($_SESSION["lang"], "iniciarSesion").'</a>
										</p>
									</form>
								</div>
							</div>
						</div>  
					</section>
				</div>
				<div class="footer">
					<table id="tablaFooter">
						<tr>
							<td>
								<img src="images/europa.jpg"/>
							</td>
							<td style="text-align: left;">
								<p>
									UE FEDER
								</p>
							</td>
							<td style="text-align: right;">
								<p>
									Cofinanciado por el Fondo Europeo de Desarrollo Regional (FEDER)
								</p>
							</td>
						</tr>
					</table>
				</div>
				<script src="./scriptSW.js"></script>
			</body>
		</html>';
	}
	else{
		header('Location: /herramientaeconomiacircularpruebas/php/login.php');
	}
?>
