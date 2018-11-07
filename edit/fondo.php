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

if (!empty($_FILES)){
	$dir_subida = "..//img/background/";
	$fichero_subido = $dir_subida . basename($_FILES['logo']['name']);
	if (move_uploaded_file($_FILES['logo']['tmp_name'], $fichero_subido)) {

		$query = "UPDATE fondo SET url='{$fichero_subido}' WHERE id={$_REQUEST['fondo']}";
		$rs = $db->Execute($query);
	}
}
$query = "SELECT url FROM fondo WHERE id={$_REQUEST['fondo']}";
$url = $db->Execute($query)->fields['url'];
$img = "<img class='responsive-img materialboxed' style='margin: auto;'' src='{$url}' >";
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
			<li><a class="waves-effect" href="userconfig.php"><i class="material-icons">build</i>Configurar</a></li>
			<li><a class="waves-effect" href="body.php"><i class="material-icons">replay</i>Volver</a></li>
			<li><a class="waves-effect" href="out.php"><i class="material-icons">exit_to_app</i>Salir</a></li>
		</ul>
		<a href="#" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" style="position: fixed; bottom: 18px; right: 18px; z-index: 9;"><i class="material-icons">menu</i></a>
		<!--head-->

		<!--head-->
		<div class=" indigo darken-1">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 xl12"><h4><i class="Small material-icons left" style="line-height: inherit;">build</i>Fondo <?=$_REQUEST['fondo'];?></h4></div>
				</div>			
			</div>
		</div>
		<!--head-->		
		<main class="container" style="">
			<div class="row">
				<div class="col s12 m12 l12 xl12">
				<?=$img?>
				</div>
			</div>
			<div class="row">
				<div class="">
					<form enctype="multipart/form-data" action="" method="POST">
						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="logo">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<div class="center-align">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit">Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</main>	
		<pre>
		</pre>
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
