function hideNavResponsive(){
	$('.button-collapse').sideNav('hide');
}
function changeClass($arg){
	switch ($arg) {
		case 'S':
			$('.cubo_').removeClass('cuboD');
			$('.cubo_').addClass('cuboR');
			
		break;
		case 'M':
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');
			
		break;
		case 'L':
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');
			
		break;
		case 'XL':
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');			
			
		break;
	}
}
function changeAlbumMenu($arg,$arg2=null){
	$('.dropdown-content').hide(150);
	if($arg2==1){
		$('.button-collapse').sideNav('hide');
	}
	setTimeout( function(){ changeAlbum($arg) },1000);
}
function changeSubMenu($arg,$arg2=null){
	$('.dropdown-content').hide(150);
	if($arg2==1){
		$('.button-collapse').sideNav('hide');
	}
	setTimeout( function(){ changeSub($arg) },1000);
}
function changeSub($arg){
	setTimeout( function(){ alert('asd')},1000);
	switch ($arg) {
		case 1:			
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ $('.subCategoria_1').show(500) }, 500);
		break;
		case 2:			
			$('.subCategoria_1').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ $('.subCategoria_2').show(500) }, 500);
		break;
		case 3:			
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ $('.subCategoria_3').show(500) }, 500);
		break;
		case 4:			
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ $('.subCategoria_4').show(500) }, 500);
		break;
		case 5:			
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ $('.subCategoria_5').show(500) }, 500);
		break;
		case 6:			
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			setTimeout(function(){ $('.subCategoria_6').show(500) }, 500);
		break;
	}
}
function changeAlbum($arg){
	switch ($arg) {
		case 1:			
			$('.album_2').hide(500);
			$('.album_3').hide(500);
			$('.album_4').hide(500);
			$('.album_5').hide(500);
			$('.album_6').hide(500);
			setTimeout(function(){ $('.album_1').show(500) }, 500);
		break;
		case 2:			
			$('.album_1').hide(500);
			$('.album_3').hide(500);
			$('.album_4').hide(500);
			$('.album_5').hide(500);
			$('.album_6').hide(500);
			setTimeout(function(){ $('.album_2').show(500) }, 500);
		break;
		case 3:			
			$('.album_1').hide(500);
			$('.album_2').hide(500);
			$('.album_4').hide(500);
			$('.album_5').hide(500);
			$('.album_6').hide(500);
			setTimeout(function(){ $('.album_3').show(500) }, 500);
		break;
		case 4:			
			$('.album_1').hide(500);
			$('.album_2').hide(500);
			$('.album_3').hide(500);
			$('.album_5').hide(500);
			$('.album_6').hide(500);
			setTimeout(function(){ $('.album_4').show(500) }, 500);
		break;
		case 5:			
			$('.album_1').hide(500);
			$('.album_2').hide(500);
			$('.album_3').hide(500);
			$('.album_4').hide(500);
			$('.album_6').hide(500);
			setTimeout(function(){ $('.album_5').show(500) }, 500);
		break;
		case 6:			
			$('.album_1').hide(500);
			$('.album_2').hide(500);
			$('.album_3').hide(500);
			$('.album_4').hide(500);
			$('.album_5').hide(500);
			setTimeout(function(){ $('.album_6').show(500) }, 500);
		break;
	}
}

function ArrayPolar(distancia,angulo,region,arrayObj,select){
	var obj = "";
	paso =((2*Math.PI) / region ) / arrayObj.length;
	for(var i = 0; i < arrayObj.length; i++) {
		var x = ( (distancia) * Math.cos(angulo) -28).toFixed(2);
		var y = ( (distancia) * Math.sin(angulo) -28).toFixed(2);
		var contenido = arrayObj[i].replace(";", "; left:"+x+"px; top:"+y+"px;");
		obj+=contenido;
		//alert(obj);
		angulo += paso;
	}
	$("."+select).html(obj);
	
}
function clickGaleria($arg){
	if($arg=="galeria"){
		var obj = new Array();
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(1)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(2)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(3)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(4)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(5)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(6)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeAlbumMenu(6)'><i class='material-icons'>photo_library</i></a>\n");

		var distancia = ($('.cubo_').width())/3;
		var angulo = 92.9;
		var region = 2;
		var select = "cubo_";
		ArrayPolar(distancia,angulo,region,obj,select);
		$('.galeria').show(500);
		setTimeout(function (){$('#menu').css("left","18px")},500);
		setTimeout(function(){ $('.sarasa1').tapTarget('open') }, 1000);
	}
	if($arg=="subCat"){
		var obj = new Array();
		
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(1)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(2)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(3)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(4)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(5)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(6)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a style='position: absolute;' class='btn-floating btn-large waves-effect waves-light  light-green accent-3' onclick='changeSubMenu(6)'><i class='material-icons'>info</i></a>\n");

		var distancia = ($('.cubo_:last').width())/3;
		var angulo = 92.9;
		var region = 2;
		var select = "cubo_:last";
		ArrayPolar(distancia,angulo,region,obj,select);	

		$('.subCat').show(500);
		setTimeout(function (){$('#menu2').css("left","18px")},500);
		setTimeout(function(){ $('.sarasa').tapTarget('open') }, 1000);
	}
}