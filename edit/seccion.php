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
	$query = "UPDATE seccion_1 SET descripcion='{$_POST['descripcion']}', titulo='{$_POST['titulo']}' WHERE id = 1";
	 $db->Execute($query);
}
$query = "SELECT descripcion,titulo FROM seccion_1 where id = 1";
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
			<li><a class="waves-effect" href="userconfig.php"><i class="material-icons">build</i>Configurar</a></li>
			<li><a class="waves-effect" href="body.php"><i class="material-icons">replay</i>Volver</a></li>
			<li><a class="waves-effect" href="out.php"><i class="material-icons">exit_to_app</i>Salir</a></li>
		</ul>
		<a href="#" data-activates="slide-out" class="button-collapse btn-floating btn-large waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" style="position: fixed; bottom: 18px; right: 18px; z-index: 9;"><i class="material-icons">menu</i></a>

		<!--head-->
		<div class=" indigo darken-1">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 xl12"><h4><i class="Small material-icons left" style="line-height: inherit;">build</i>Seccion <?=$_REQUEST['seccion']?></h4></div>
				</div>			
			</div>
		</div>
		<!--head-->		
		<?php if ($_REQUEST['seccion'] == "1 (Nuestro Equipo)") {?>
		<!--seccion 1-->
		<main class="container" >
			<form method="POST">
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">create</i>
						<input id="icon_prefix" type="text" class="validate" name="titulo"  value="<?=$rs['titulo'];?>">
						<label for="icon_prefix">Titulo</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">create</i>
						<textarea id="textarea1" class="materialize-textarea" name="descripcion" pleasej><?=$rs['descripcion'];?></textarea>
						<label for="textarea1">Descripcion</label>
					</div>
				</div>
				<div class="center">
					<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" type="submit" name="action">Cambiar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</main>	
		<?php }?>
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
