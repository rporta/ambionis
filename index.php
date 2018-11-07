<?php
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
if (!defined('RUTA')) {
	define('RUTA',dirname(__FILE__)."//");
}
include_once(RUTA.'/config/ini.php');

$con = new conect();
$db = $con->conect();

//logo
$qlogo = "SELECT url FROM head  ORDER BY id";
$rslogo = $db->Execute($qlogo)->fields['url'];
$logo_url = str_replace("..//", "",$rslogo);
//diapositiva1
$dp1 = array();
$qdp1 = "SELECT id, grupo, url, descripcion FROM diapositivas WHERE grupo = 1 ORDER BY id";
$rsdp1 = $db->Execute($qdp1);
while (!$rsdp1->EOF) {
	$rsdp1->fields['url'] = str_replace("..//", "",$rsdp1->fields['url']);
	array_push($dp1, $rsdp1->fields);
	$rsdp1->MoveNext();
}

//seccion1
$seccion1 = array();
$qseccion1 = "SELECT id, titulo, descripcion FROM seccion_1 WHERE id=1 ORDER BY id";
$rseccion1 = $db->Execute($qseccion1);
while (!$rseccion1->EOF) {
	array_push($seccion1, $rseccion1->fields);
	$rseccion1->MoveNext();
}

//diapositiva2
$dp2 = array();
$qdp2 = "SELECT id, grupo, url, descripcion FROM diapositivas WHERE grupo = 2 ORDER BY id";
$rsdp2 = $db->Execute($qdp2);
while (!$rsdp2->EOF) {
	$rsdp2->fields['url'] = str_replace("..//", "",$rsdp2->fields['url']);
	array_push($dp2, $rsdp2->fields);
	$rsdp2->MoveNext();
}

//footer
$qfooter = "SELECT des FROM footer  ORDER BY id";
$footer = $db->Execute($qfooter)->fields['des'];

//fondos
$fondos = array();
$qfondos = "SELECT url FROM fondo ORDER BY id";
$rfondos = $db->Execute($qfondos);
while (!$rfondos->EOF) {
	$fondo_url = str_replace("..//", "",$rfondos->fields['url']);
	array_push($fondos, $fondo_url);
	$rfondos->MoveNext();
}

?>
<!DOCTYPE html>
<html>	
	<head>
		<meta charset='utf-8'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
		<?php include_once(RUTA.'/css/css.php'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body id="body">
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
		<!--select album-plagas-->	
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 1</a></li>
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 2</a></li>
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 3</a></li>
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 4</a></li>
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 5</a></li>
			<li><a href="#section_6"  class="waves-effect waves-teal navBtn"><i class="material-icons">photo_library</i>ALBUM 6</a></li>

		</ul>
		<ul id="dropdown4" class="dropdown-content">
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Roeedores</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Murcielagos</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Hormigas</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Cucarachas</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Arañas</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Alacranes</a></li>
			<li><a href="#section_5"  class="waves-effect waves-teal navBtn"><i class="material-icons">info</i>Otros</a></li>
		</ul>
		<!--icon nav-->
		<a href="#" data-activates="mobile-demo" class="center-align btn-floating  btn-large  button-collapse <?=$color?> btnNav"><i class="menuCenter material-icons">menu</i></a>
		<nav id="inico" class="black" style="position: relative; width: auto; height: auto;">
			<br>
			<!--logo-->
			<a id="logo" href="#!" class="brand-logo center  black " style="position:  relative !important;">
				<img src="<?=$logo_url;?>" class="responsive-img">
			</a>
			<br>
			<!--left panel-->
			<ul class="side-nav" id="mobile-demo">
				<li><a  href="#inico" class="waves-effect waves-teal navBtn"><i class="material-icons left">home</i>Inicio</a></li>
				<li><a  href="#section_2" class="waves-effect waves-teal navBtn"><i class="material-icons left">group</i>Nuestro Equipo</a></li>
				<li><a  href="#section_7" class="waves-effect waves-teal navBtn"><i class="material-icons left">email</i>Contactos</a></li>
				<li><a class="dropdown-button " href="#!" data-activates="dropdown4"><i class="material-icons left">folder</i>Plagas<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button " href="#!" data-activates="dropdown2"><i class="material-icons left">collections</i>Galeria <i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</nav>	
		<main>
			<!--modal-->
			<div id="formFail" class="modal">
				<div class="modal-content">
					<h4>Ups!</h4>
					<p>Te faltan datos por llenar para enviar tu mensaje</p>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
				</div>
			</div>
			<!--modal-->
			<div id="mailFail" class="modal">
				<div class="modal-content">
					<h4>Ups!</h4>
					<p>Ya has enviado este mensaje</p>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
				</div>
			</div>			
			<!--modal-->
			<div id="mailOk" class="modal">
				<div class="modal-content">
					<h4>Tu mensaje ha sido enviado</h4>
					<p>En breve nos comunicaremos con usted</p>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
				</div>
			</div>
			<!--btn galeri-plagas-->	
			<div style="left: 28px; top:28px;position: fixed !important; z-index: 3; ">
				<a id="menu" class="btn btn-floating btn-large  <?=$color?>"  onclick="clickSection('subCat')" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 2;"><i class="material-icons">view_module</i></a>
				<a class="btn btn-floating btn-large grey mfondo" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 1;"></a>
				<a class="btn btn-floating btn-large pulse mfpulse <?=$color?>" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 0;"></a>
				<div class="ss" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 0;transition: .3s;"></div>
				<!---->					
				<a id="menu2" class="btn btn-floating btn-large  <?=$color?>"  onclick="clickSection('galeria')" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 2;"><i class="material-icons">panorama</i></a>
				<a class="btn btn-floating btn-large grey mfondo" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 1;"></a>
				<a class="btn btn-floating btn-large pulse mfpulse <?=$color?>" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 0;"></a>
				<div class="ss" style="left: 28px; top:28px;position: fixed !important; transform: scale(0);z-index: 0;transition: .3s;"></div>					
			</div>
			<!--SECTION 1-->
			<div id="section_1">
				<!--CAROUSEL-->
				<div class="carousel carousel-slider center" data-indicators="true">
					<div class="carousel-fixed-item center">
					</div>
					<div class="carousel-item white-text img-regulation" href="#" style="background-image: url('<?=$dp1[0]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[0]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[1]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[1]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[2]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[2]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[3]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[3]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[4]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[4]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[5]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[5]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[6]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[6]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[7]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[7]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp1[8]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp1[8]['descripcion'];?></h1>
					</div>
				</div>
			</div>
			<!--SECTION 2-->
			<div id="section_2" class="section white">
				<div class="row container">
					<div class="col s10 m10 l10 xl10">
						<br>
						<h2 class="header"><?=$seccion1[0]['titulo'];?></h2>
						<p class="grey-text text-darken-3 lighten-3"><?=$seccion1[0]['descripcion'];?></p>					
					</div>
					<div class="col s2 m2 l2 xl2">
						<img src="img/watermark/poligonal.png" class="responsive-img">
					</div>
				</div>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[0];?>"></div>
			</div>
			<!--SECTION 3-->
			<div id="section_3">
				<!--CAROUSEL-->
				<div class="carousel carousel-slider center" data-indicators="true">
					<div class="carousel-fixed-item center">
					</div>
					<div class="carousel-item white-text img-regulation" href="#" style="background-image: url('<?=$dp2[0]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp2[0]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp2[1]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp2[1]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp2[2]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp2[2]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp2[3]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp2[3]['descripcion'];?></h1>
					</div>
					<div class="carousel-item  white-text img-regulation" href="#" style="background-image: url('<?=$dp2[4]['url'];?>');background-repeat: no-repeat;background-position: center; ">
						<h1><?=$dp2[4]['descripcion'];?></h1>
					</div>
				</div>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[1];?>"></div>
			</div>
			<!--SECTION 4-->
			<div id="section_4" class="section white">
				<div class="container">
					<br>
					<h2 class="header center-align ">Bicho taladro - Hylotrupes Bajulus</h2>
					<br>
					<br>	
				</div>
				<div class="row container">
					<?php include_once(RUTA.'/bichoTaladro/1.php');?>
				</div>
				<a class="btn btn-floating btn-large <?=$color?> rcenter btnMasInfoBichoTaladro"><i class="material-icons">arrow_drop_down</i></a>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[2];?>"></div>
			</div>
			<!--SECTION 5-->
			<div id="section_5" class="section white">
				<div class="container">
					<br>
					<h2 class="header center-align dinamic-title">Plagas</h2>			
				</div>
					<!-- CIRCLE NAV-->
				<div class="row">


					<!-- OVER ICONS-->
					<a class="btn-floating pulse <?=$color?> plaga1" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/roedores/1.jpg" class="responsive-img circle">
					</a>
					<a class="btn-floating pulse <?=$color?> plaga2" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/murcielagos/1.jpg" class="responsive-img circle">
					</a>
					<a class="btn-floating pulse <?=$color?> plaga3" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/hormigas/1.jpg" class="responsive-img circle">
					</a>
					<a class="btn-floating pulse <?=$color?> plaga4" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/cucarachas/1.jpg" class="responsive-img circle">
					</a>
					<a class="btn-floating pulse <?=$color?> plaga5" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/arañas/1.jpg" class="responsive-img circle">
					</a>
					<a class="btn-floating pulse <?=$color?> plaga6" style="width: 200px; height: 200px; position: relative; top: -72px;">
						<img src="img/plagas/alacranes/1.jpg" class="responsive-img circle">
					</a>
					<!--/ OVER ICONS-->
				</div>
				<div class="container">
					<!--CATEGORIAS-->
					<?php
						include_once(RUTA.'/subCategorias/1.php');
						include_once(RUTA.'/subCategorias/2.php');
						include_once(RUTA.'/subCategorias/3.php');
						include_once(RUTA.'/subCategorias/5.php');
						include_once(RUTA.'/subCategorias/6.php');
						include_once(RUTA.'/subCategorias/7.php');
						include_once(RUTA.'/subCategorias/4.php');
					?>
				</div>
				<a class="btn btn-floating btn-large <?=$color?> rcenter btnMasInfo"><i class="material-icons">arrow_drop_down</i></a>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[3];?>"></div>
			</div>
			<!--SECTION 6-->
			<div id="section_6" class="section white">
				<div class="container">
					<br>
					<h2 class="header center-align">Galeria</h2>
					<!-- CIRCLE NAV-->
				</div>

				<div class="container">
					<!--//CIRCLE NAV -->
					<!--GALERIAS-->
					<?php
						include_once(RUTA.'/galeria/album_1/1.php');
						include_once(RUTA.'/galeria/album_2/1.php');
						include_once(RUTA.'/galeria/album_3/1.php');
						include_once(RUTA.'/galeria/album_4/1.php');
						include_once(RUTA.'/galeria/album_5/1.php');
						include_once(RUTA.'/galeria/album_6/1.php');
					?>
				</div>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[4];?>"></div>
			</div>
			<!--SECTION 7-->
			<div id="section_7" class="section white">
				<div class="row container">
					<br>
					<h2 class="header">Contacto</h2>
					<form class="col s12" method="post" role="form">

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input name="nombre" id="icon_prefix" type="text" class="validate isComplete">
								<label for="icon_prefix">Nombre</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input name="apellido" id="icon_prefix" type="text" class="validate isComplete">
								<label for="icon_prefix">Apellido</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">email</i>
								<input name="email" id="email" type="email" class="validate isComplete">
								<label for="email">Correo</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">phone</i>
								<input name="tel" id="icon_telephone" type="tel" class="validate isComplete">
								<label for="icon_telephone">Telefono</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<textarea name="comentario" id="textarea1" class="materialize-textarea isComplete"></textarea>
										<label for="textarea1">Comentario</label>
									</div>
								</div>
							</div>
						</div>

						<button class="btn waves-effect <?=$color?>" type="button" name="EnviarMail" value="1" >Enviar
							<i class="material-icons right">send</i>
						</button>
				
					</form>
				</div>
				<?php 
					if($_POST['EnviarMail']){
						include(RUTA."/php/mail.php");
					}
				?>
			</div>
			<!--BACKGROUND DINAMIC-->
			<div class="parallax-container">
				<div class="parallax"><img src="<?=$fondos[5];?>"></div>
			</div>
		</main>
		<!--FOOTER-->
		<footer class="page-footer <?=$color?>" style="padding-top: 0px">
			<div class="footer-copyright">
				<div class="container">
				©  <?=date('Y')?> Copyright | <?=$footer?>
				<a class="grey-text text-lighten-4 right" href="#!">+ info</a>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

		<?php include_once(RUTA.'/js/functionsJs.php'); ?>
		<?php include_once(RUTA.'/js/js.php'); ?>
	</body>
</html>
<?php 
/*$db->close();*/?>