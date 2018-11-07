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
if ($_REQUEST['diapositiva'] == 1){
	if(!empty($_POST)){
		foreach ($_POST as $key => $value) {
			switch ($key) {
				case 't1g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 1";
					break;
				case 't2g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 2";
					break;
				case 't3g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 3";
					break;
				case 't4g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 4";
					break;
				case 't5g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 5";
					break;
				case 't6g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 6";
					break;
				case 't7g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 7";
					break;
				case 't8g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 8";
					break;
				case 't9g1':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 9";
					break;
			}
			$db->Execute($query);
		}
	}
	if (!empty($_FILES)){
		$dir_subida = "..//img/diapositivas/";
		foreach ($_FILES as $key => $value) {
			$fichero_subido = $dir_subida . basename($_FILES[$key]['name']);

			if (move_uploaded_file($_FILES[$key]['tmp_name'], $fichero_subido)) {
				switch ($key) {
					case 'd1g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 1";
						break;
					case 'd2g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 2";
						break;
					case 'd3g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 3";
						break;
					case 'd4g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 4";
						break;
					case 'd5g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 5";
						break;
					case 'd6g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 6";
						break;
					case 'd7g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 7";
						break;
					case 'd8g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 8";
						break;
					case 'd9g1':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 9";
						break;
				}
				$rs = $db->Execute($query);
			}
		}
	}
	$query = "SELECT id, grupo, url, descripcion FROM diapositivas WHERE grupo = 1 ";
}else if($_REQUEST['diapositiva'] == 2){
	if(!empty($_POST)){
		foreach ($_POST as $key => $value) {
			switch ($key) {
				case 't1g2':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 10";
					break;
				case 't2g2':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 11";
					break;
				case 't3g2':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 12";
					break;
				case 't4g2':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 13";
					break;
				case 't5g2':
					$query = "UPDATE diapositivas SET descripcion='{$value}' WHERE id = 14";
					break;
			}
			$db->Execute($query);
		}
	}
	if (!empty($_FILES)){
		$dir_subida = "..//bichoTaladro/diapositivas/";
		foreach ($_FILES as $key => $value) {
			$fichero_subido = $dir_subida . basename($_FILES[$key]['name']);

			if (move_uploaded_file($_FILES[$key]['tmp_name'], $fichero_subido)) {
				switch ($key) {
					case 'd1g2':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 10";
						break;
					case 'd2g2':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 11";
						break;
					case 'd3g2':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 12";
						break;
					case 'd4g2':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 13";
						break;
					case 'd5g2':
						$query = "UPDATE diapositivas SET url='{$fichero_subido}' WHERE id = 14";
						break;
				}
				$rs = $db->Execute($query);
			}
		}
	}
	$query = "SELECT id, grupo, url, descripcion FROM diapositivas WHERE grupo = 2 ";
}
$rs = $db->Execute($query);
$data = array();
while (!$rs->EOF) {
	array_push($data, $rs->fields);
	$rs->MoveNext();
}
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
					<div class="col s12 m12 l12 xl12"><h4><i class="Small material-icons left" style="line-height: inherit;">build</i>Diapositiva <?=$_REQUEST['diapositiva']?></h4></div>
				</div>			
			</div>
		</div>
		<!--head-->
		<main class="container" >
			<?php if ($_REQUEST['diapositiva'] == 1){ ?>
		<form name="diapositiva1" method="POST" enctype="multipart/form-data">
			<!--img 1-->
			<div class="row">
				<h4 class="center-align">Imagen 1</h4>
				<br> 
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[0]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t1g1" value="<?=$data[0]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d1g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>

			<!--img 2-->
			<div class="row">
				<h4 class="center-align">Imagen 2</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[1]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t2g1" value="<?=$data[1]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d2g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 3-->
			<div class="row">
				<h4 class="center-align">Imagen 3</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[2]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t3g1" value="<?=$data[2]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d3g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 4-->
			<div class="row">
				<h4 class="center-align">Imagen 4</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[3]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t4g1" value="<?=$data[3]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file"  name="d4g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 5-->
			<div class="row">
				<h4 class="center-align">Imagen 5</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[4]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t5g1" value="<?=$data[4]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d5g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 6-->
			<div class="row">
				<h4 class="center-align">Imagen 6</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[5]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t6g1" value="<?=$data[5]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d6g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 7-->
			<div class="row">
				<h4 class="center-align">Imagen 7</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[6]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t7g1" value="<?=$data[6]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d7g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 8-->
			<div class="row">
				<h4 class="center-align">Imagen 8</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[7]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t8g1" value="<?=$data[7]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d8g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 9-->
			<div class="row">
				<h4 class="center-align">Imagen 9</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[8]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t9g1" value="<?=$data[8]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d9g1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>


		</form>
			<?php }?>
			<?php if ($_REQUEST['diapositiva'] == 2){ ?>
		<form name="diapositiva2" method="POST" enctype="multipart/form-data">
			<!--img 1-->
			<div class="row">
				<h4 class="center-align">Imagen 1</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[0]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t1g2" value="<?=$data[0]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d1g2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>

			<!--img 2-->
			<div class="row">
				<h4 class="center-align">Imagen 2</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[1]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t2g2" value="<?=$data[1]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d2g2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 3-->
			<div class="row">
				<h4 class="center-align">Imagen 3</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[2]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t3g2" value="<?=$data[2]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d3g2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 4-->
			<div class="row">
				<h4 class="center-align">Imagen 4</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[3]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t4g2" value="<?=$data[3]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file"  name="d4g2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>

			<br><br><br><br>
			<div class="divider cyan lighten-2"></div>
			<br><br><br><br>
			<!--img 5-->
			<div class="row">
				<h4 class="center-align">Imagen 5</h4>
				<br>
				<div class="col s5 m5 l5 xl5">
					<img class="materialboxed responsive-img" width="650" src="<?=$data[4]['url'];?>" >
				</div>
				<div class="col s2 m2 l2 xl2">
				</div>
				<div class="col s5 m5 l5 xl5">
					
						<div class="input-field ">
							<i class="material-icons prefix">create</i>
							<input id="icon_prefix" type="text" class="validate" name="t5g2" value="<?=$data[4]['descripcion'];?>">
							<label for="icon_prefix">Titulo</label>
						</div>

						<div class="file-field input-field">
							<div class="btn indigo darken-1 cyan-text text-lighten-2">
								<span>File</span>
								<input type="file" name="d5g2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
						<br><br><br><br>
						<div class="center">
							<button class="btn waves-effect waves-light indigo darken-1 cyan-text text-lighten-2 btn-form" type="submit" >Cambiar
								<i class="material-icons right">send</i>
							</button>
						</div>
					
				</div>
			</div>
			<br><br><br><br>
		</form>			
			<?php }?>
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
