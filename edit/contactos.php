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

if(!empty($_POST)){

	$array_contactos = explode(",", $_POST['contactos']);

	$query = "TRUNCATE TABLE contactos";
	$rs = $db->Execute($query);
	foreach ($array_contactos as $key => $value) {
		$query_insert = "INSERT INTO contactos( correo ) VALUES ( '{$value}' )";
		$rs = $db->Execute($query_insert);
	}
}


$query = "SELECT correo FROM contactos";
$rs = $db->Execute($query);
$data = array();
while (!$rs->EOF) {
	array_push($data, "{tag: '{$rs->fields['correo']}'}");
	$rs->MoveNext();
}
$contectos = implode(", ", $data);
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
		<div class=" indigo darken-1">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 xl12"><h4><i class="Small material-icons left" style="line-height: inherit;">build</i>Contectos</h4></div>
				</div>			
			</div>
		</div>
		<!--head-->
		<main class="container" >
			<form method="POST" action="">
				<div class="row center">
					<p>Ingresa los correos de destino para el formulario de contactos ( clientes )</p>
				</div>
				<div class="row center cyan-text text-lighten-2">
					<div class="chips chips-initial"></div>       
				</div>
				<input type="hidden" name="contactos" value="" class="form-btn-data">
				<div class="row center">
					<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 form-btn" type="bottom" >Cambiar
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
				$('.chips').material_chip();
				$('.chips-initial').material_chip({
					data: [
						<?=$contectos;?>
					]
				});

				$('.form-btn').click(function(event) {
					var correos = new Array();
					$('.chip').each(function(i, j) {
						correos[i] = $('.chip')[i].childNodes[0].data;
					});
					data_correo = correos.join();
					$('.form-btn-data').val(data_correo);

				});
				$('.input').addClass('cyan-text text-lighten-2');
			});
		</script>
	</body>
</html>
