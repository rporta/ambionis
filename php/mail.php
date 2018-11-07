<?php

$arrayDebug = $arrayTitleDebug= array();
array_push($arrayDebug, $_GET); array_push($arrayTitleDebug,"_GET ::");
array_push($arrayDebug, $_POST); array_push($arrayTitleDebug,"_POST ::");
array_push($arrayDebug, $_SESSION); array_push($arrayTitleDebug,"_SESSION ::");
array_push($arrayDebug, $_REQUEST); array_push($arrayTitleDebug,"_REQUEST ::");
array_push($arrayDebug, $_SERVER); array_push($arrayTitleDebug,"_SERVER ::");
if(0){
	debug($arrayDebug,$arrayTitleDebug);
}

$datos = $_POST;


/*validacion*/
$query = 
"SELECT EXISTS(SELECT * FROM log_mails
WHERE 1=1
AND nombre = '{$datos['nombre']}'
AND apellido = '{$datos['apellido']}'
AND email = '{$datos['email']}'
AND tel = '{$datos['tel']}'
AND comentario = '{$datos['comentario']}'
) AS checked";
$rs = $db->Execute($query);

if($rs->fields['checked']){
	$checkMail = 0;
}
else{
	$checkMail = 1;
	$query = 
	"INSERT INTO log_mails(
		nombre,
		apellido,
		email,
		tel,
		comentario)
	VALUES (
		'{$datos['nombre']}',
		'{$datos['apellido']}',
		'{$datos['email']}',
		'{$datos['tel']}',
		'{$datos['comentario']}'
	)";
	$rs = $db->Execute($query);

	$qpara = "SELECT correo FROM contactos";
	$rs = $db->Execute($qpara);

	$apara = array();
	while (!$rs->EOF) {
		$apara [] = $rs->fields['correo'];
		$rs->MoveNext();		
	}

	$para = implode(", ", $apara);

	$título = "De: {$datos['email']}";
	$mensaje = 
	"<!DOCTYPE html>
	<html>
	<head>
		<meta charset='utf-8'>
		<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
	</head>
	<body>
		<main>
		<div class='center black'>
			<img src='img/logo/logo.png' class='responsive-img' style='width: 300px;'>		
		</div>
		<div class='container'>
			<div class='row'>
				<div class='col s12 m12 l12 xl12'>
					<h1 class=''>Tienes un nuevo correo!</h1>
				</div>		
			</div>
			<div class='divider'></div>
			<div class='row'>
				<div class='col s12 m3 l3 xl3'>
					<h5>Nombre:</h5>
				</div>
				<div class='col s12 m9 l9 xl9'>
					<h5>{$datos['nombre']}</h5>
				</div>
			</div>
			<div class='row'>
				<div class='col s12 m3 l3 xl3'>
					<h5>Apellido:</h5>
				</div>
				<div class='col s12 m9 l9 xl9'>
					<h5>{$datos['apellido']}</h5>
				</div>
			</div>
			<div class='row'>
				<div class='col s12 m3 l3 xl3'>
					<h5>Email:</h5>
				</div>
				<div class='col s12 m9 l9 xl9'>
					<h5>{$datos['email']}</h5>
				</div>
			</div>					
			<div class='row'>
				<div class='col s12 m3 l3 xl3'>
					<h5>Tel:</h5>
				</div>
				<div class='col s12 m9 l9 xl9'>
					<h5>{$datos['tel']}</h5>
				</div>
			</div>					
			<div class='divider'></div>
			<div class='row'>
				<div class='col s12 m3 l3 xl3'>
					<h5>Comentario: </h5>
				</div>
				<div class='col s12 m9 l9 xl9'>
					<h5>{$datos['comentario']}</h5>
				</div>
			</div>
		</div>
		</main>
		<script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
	</body>
	</html>";
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	mail($para, $título, $mensaje, $cabeceras);
}


?>