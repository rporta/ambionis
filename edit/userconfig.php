<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!defined('RUTA')) {
	define('RUTA',dirname(__FILE__)."/../");
}
if(!$_SESSION['login']){
	header( 'Location: login.php' );
	die();
}
date_default_timezone_set("America/Argentina/Buenos_Aires"); 

include_once(RUTA.'/config/ini.php');

$con = new conect();
$db = $con->conect();

if($_POST['cambiar']  AND $rs['pass'] !== $_POST['pass']  AND $_POST['pass']!==""){
	$query = "UPDATE usuarios SET pass='{$_POST['pass']}' WHERE id = 1";
	 $db->Execute($query);
}
$query = "SELECT pass FROM usuarios";
$rs = $db->Execute($query)->fields;
?>
<!DOCTYPE html>
<html>	
	<div>
		<meta charset='utf-8'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/1.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</div>
	<body id="body" class="indigo darken-4 cyan-text text-lighten-2">
		<!--load-->
		<div class="load black valign-wrapper center-align" style="height: 100%;position: fixed;width: 100%;z-index: 9;">
			<div class="center-align " style="width: 100%;">
				<div class="preloader-wrapper big active">
					<div class="spinner-layer spinner-<?=$color?>-only ">
						<div class="circle-clipper left">
							<div class="circle"></div>
							</div><div class="gap-patch">
							<div class="circle"></div>
							</div><div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
			</div>                
		</div>
		<!--//load-->
		<!--nav-->
		<ul id="slide-out" class="side-nav">
			<li><a class="waves-effect" href="config.php"><i class="material-icons">replay</i>Volver</a></li>
			<li><a class="waves-effect" href="out.php"><i class="material-icons">exit_to_app</i>Salir</a></li>
		</ul>
		<a href="#" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" style="position: fixed; bottom: 18px; right: 18px; z-index: 9;"><i class="material-icons">menu</i></a>
		<!--head-->
		<div class=" indigo darken-1">
			<br><br>
				<div class="container">
					<div class="row"><i class="material-icons right " style="right: 18px; position: relative;">build</i>
						<div class="col s6 m6 l6 xl6"><h4>Configuracion Usuario</h4></div>
						<div class="col s6 m6 l6 xl6">
							<br>
						</div>
					</div>			
				</div>
			<br>
		</div>
		<!--head-->
		<br><br><br><br><br><br><br>
		<main class="container" >
			<br><br><br><br>
			<form method="POST" enctype="multipart/form-data" >
				<div class="row center">
					<div class="input-field col s12">
						<i class="material-icons prefix">create</i>
						<input id="icon_prefix" type="text" class="validate" value="<?=$rs['des'];?>" name="pass">
						<label for="icon_prefix">Password</label>
					</div>
				</div>
				<br><br><br><br><br><br><br>
				<div class="row center">
					<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" type="submit" name="cambiar" value="true">Cambiar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</main>	

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			$('.load').fadeOut(500);
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".button-collapse").sideNav();
			});
		</script>
	</body>
</html>
