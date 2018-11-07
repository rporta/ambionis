<?php
ini_set('display_errors', 1);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/****************dbug***************/
if (!defined('RUTA')) {
	define('RUTA',dirname(__FILE__)."/../");
}
/**************************************/
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
include_once(RUTA.'/config/ini.php');
function encrypt($string, $key) {
	$result = '';
	for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)+ord($keychar));
		$result.=$char;
	}
	return base64_encode($result);
}
function decrypt($string, $key) {
	$result = '';
	$string = base64_decode($string);
	for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)-ord($keychar));
		$result.=$char;
	}
	return $result;
}
$con = new conect();
$db = $con->conect();
if($_POST['iniciar'] && !empty($_POST['user']) && !empty($_POST['pass'])){
	$query = "SELECT id,usuario,pass FROM usuarios WHERE usuario='{$_POST['user']}' AND pass='{$_POST['pass']}' ";
	$rs = $db->Execute($query)->fields;
	if($rs['pass'] == $_POST['pass'] AND $rs['usuario'] == $_POST['user']  ){
		$_SESSION['login']=TRUE;
		header( 'Location: config.php' );	
		die();
	}
}
#test
$text = "%i(i+1)";
$key = "aafsdo";

$text_encry = encrypt($text,$key);
$text_dencry = decrypt($text_encry,$key);
#test 
?>
<!DOCTYPE html>
<html>	
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/1.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
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
		
		<!--head-->
		<div class=" indigo darken-1">
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12 xl12"><h4><i class="Small material-icons left" style="line-height: inherit;">build</i>Iniciar sesión</h4></div>
				</div>			
			</div>
		</div>
		<!--head-->
		<main class="container" >
			<form method="post" action="">
				<div class="row">
					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate" name="user">
						<label for="last_name">User</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="pass">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="center">
					<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2" type="submit" name="iniciar" value="1">Iniciar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</main>	
		<!--modal-->
		<div id="modal1" class="modal grey darken-3">
			<div class="modal-content">
				<h4>Error</h4>
				<p>Usuario o contraseña incorrecto</p>
			</div>
			<div class="modal-footer grey darken-3">
				<a href="#!" class="modal-action modal-close waves-effect waves-light btn indigo darken-1 cyan-text text-lighten-2">Salir</a>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.load').fadeOut(500);
			});
			$(document).ready(function() {
				$('.modal').modal();
				<?php
					if (!$_SESSION['login'] AND $_POST['iniciar']){
						echo "$('#modal1').modal('open');";
					}
				?>
			});
		</script>
	</body>
</html>

