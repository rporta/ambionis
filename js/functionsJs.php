<script type="text/javascript">
(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));
(function($) {
    $.fn.wh = function(arg) {
    	this.width(arg).height(arg);
    };
}(jQuery));
function scrollAnimation(j) {
	/*scroll animation*/
	var target = $(j.hash);
	var text = j.childNodes[1].textContent;
	if (target.length) {
		var targetOffset = target.offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
		switch(text){
			case "Inicio": hideNavResponsive();
			break;
			case  "Nuestro Equipo": hideNavResponsive();
			break;
			case "Contactos": hideNavResponsive();
			break;
			case "Roeedores" : changeSubMenu(1,1);
			break;
			case "Murcielagos" : changeSubMenu(2,1);
			break;
			case "Hormigas" : changeSubMenu(3,1);
			break;
			case "Cucarachas" : changeSubMenu(4,1);
			break;
			case "Arañas" : changeSubMenu(5,1);
			break;
			case "Alacranes" : changeSubMenu(6,1);
			break;
			case "Otros" : changeSubMenu(7,1);
			break;
			case "ALBUM 1" : changeAlbumMenu(1,1);
			break;
			case "ALBUM 2" : changeAlbumMenu(2,1);
			break;
			case "ALBUM 3" : changeAlbumMenu(3,1);
			break;
			case "ALBUM 4" : changeAlbumMenu(4,1);
			break;
			case "ALBUM 5" : changeAlbumMenu(5,1);
			break;
			case "ALBUM 6" : changeAlbumMenu(6,1);
			break;
		}
	}
}
function rCenter(){
	var body = ($('body').width())/2;
	var	imgDinamic = ($('#menu').width()/2);
	$('.rcenter').each(function(index, j) {
		$(j).css("left", (body-imgDinamic)+"px")
	});
}
function hideNavResponsive(){
	$('.button-collapse').sideNav('hide');
}
function changeClass($arg){
	switch ($arg) {
		case 'S':
			$(".img-regulation").each(function(i, j) {
				var h = $('.carousel.carousel-slider').height();
				var w = $('.carousel.carousel-slider').width();
				$(j).css({
					"background-size": w+'px '+ h+'px'
				});
			});
			$('.cubo_').removeClass('cuboD');
			$('.cubo_').addClass('cuboR');
			$($('.carousel-slider')[1]).height(400);
		break;
		case 'M':
			$(".img-regulation").each(function(i, j) {
				var h = $('.carousel.carousel-slider').height();
				var w = $('.carousel.carousel-slider').width();
				$(j).css({
					"background-size": w+'px '+'auto'
				});
			});
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');
			$($('.carousel-slider')[1]).height(400);
		break;
		case 'L':
			$(".img-regulation").each(function(i, j) {
				var h = $('.carousel.carousel-slider').height();
				var w = $('.carousel.carousel-slider').width();
				$(j).css({
					"background-size": w+'px '+'auto'
				});
			});
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');
			$($('.carousel-slider')[1]).height(600);
		break;
		case 'XL':
			$(".img-regulation").each(function(i, j) {
				var h = $('.carousel.carousel-slider').height();
				var w = $('.carousel.carousel-slider').width();
				$(j).css({
					"background-size": w+'px '+'auto'
				});
			});		
			$('.cubo_').removeClass('cuboR');
			$('.cubo_').addClass('cuboD');
			$($('.carousel-slider')[1]).height(800);			
		break;
	}
}
function responsiveCalc(){
	var viewportWidth = $(window).width();			
	if (viewportWidth<= 600)	 changeClass('S');
	else if (viewportWidth> 600 && viewportWidth<=975) changeClass('M');
	else if(viewportWidth>= 975 && viewportWidth< 1200) changeClass('L');
	else if(viewportWidth> 1200) changeClass('XL');
}
function changeSub($arg){
	switch ($arg) {
		case 1:
			$('.btnMasInfoCuca').hide(500);			
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){ 
				$('.subCategoria_1').show(500);
				$('.btnMasInfo').show(500);
			}, 500);
		break;
		case 2:
			$('.btnMasInfoCuca').hide(500);				
			$('.subCategoria_1').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){ 
				$('.subCategoria_2').show(500);
				$('.btnMasInfo').show(500);
			}, 500);
		break;
		case 3:
			$('.btnMasInfo').hide(500);
			$('.btnMasInfoCuca').hide(500);				
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){ 
				$('.subCategoria_3').show(500);
			}, 500);
		break;
		case 4:
						
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){
				$('.btnMasInfo').show(500);
				$('.btnMasInfoCuca').show(500);	 
				$('.subCategoria_4').show(500); 
			}, 500);
		break;
		case 5:
			$('.btnMasInfoCuca').hide(500);				
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_6').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){ 
				$('.btnMasInfo').show(500);
				$('.subCategoria_5').show(500);
			}, 500);
		break;
		case 6:
			$('.btnMasInfo').hide(500);
			$('.btnMasInfoCuca').hide(500);				
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_7').hide(500);
			setTimeout(function(){ 
				$('.subCategoria_6').show(500);
			}, 500);
		break;
		case 7:
			$('.btnMasInfo').hide(500);
			$('.btnMasInfoCuca').hide(500);				
			$('.subCategoria_1').hide(500);
			$('.subCategoria_2').hide(500);
			$('.subCategoria_3').hide(500);
			$('.subCategoria_4').hide(500);
			$('.subCategoria_5').hide(500);
			$('.subCategoria_6').hide(500);
			setTimeout(function(){ 
				$('.subCategoria_7').show(500);
			}, 500);
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
function changeAlbumMenu($arg,$arg2=null){
	$('.dropdown-content').hide(150);
	if($arg2==1){
		$('.button-collapse').sideNav('hide');
	}
	else{
		$($('.mfondo')[1]).css('transform','scale(0)');
		$($('.mfpulse')[1]).css('transform','scale(0)');
		$($('.ss')[1]).css('transform','scale(0)');
	}	
	setTimeout( function(){ changeAlbum($arg) },1000);
}
function changeSubMenu($arg,$arg2=null){
	$('.dropdown-content').hide(150);
	if($arg2==1){
		$('.button-collapse').sideNav('hide');
	}
	else{
		$($('.mfondo')[0]).css('transform','scale(0)');
		$($('.mfpulse')[0]).css('transform','scale(0)');
		$($('.ss')[0]).css('transform','scale(0)');
	}	
	setTimeout( function(){ changeSub($arg) },1000);
}
function ArrayPolar(distancia,angulo,region,arrayObj,select){
	var obj = "";
	paso =((2*Math.PI) / region ) / arrayObj.length;
	for(var i = 0; i < arrayObj.length; i++) {
		var x = ( (distancia) * Math.cos(angulo) -28).toFixed(2);
		var y = ( (distancia) * Math.sin(angulo) -28).toFixed(2);
		var contenido = arrayObj[i].replace(";", "; left:"+x+"px; top:"+y+"px;");
		obj+=contenido;
		angulo += paso;
	}
	select.html(obj);
	
}
function doScaledTimeout(i,stringComplete) {
  setTimeout(function() {
    $('.dinamic-title').html(stringComplete+'<br><br>');
  }, (i*75) );
}
function animationRecursive(string){
	var stringComplete="";
	for(i=0; i<string.length; i++){
		j=i;
		stringComplete+= string.charAt(i);
		doScaledTimeout(j,stringComplete);
	}
}
function descripcion($arg){

/*
	if($arg=="roeedores"){
		cadena = "roeedores";
		animationRecursive('Roedores');
		$('.plaga2').hide();
		$('.plaga3').hide();
		$('.plaga4').hide();
		$('.plaga5').hide();
		$('.plaga6').hide();		
		$('.plaga1').show(500);
	}
	if($arg=="murcielagos"){
		animationRecursive('Murcielagos');
		$('.plaga1').hide();
		$('.plaga3').hide();
		$('.plaga4').hide();
		$('.plaga5').hide();
		$('.plaga6').hide();			
		$('.plaga2').show(500);
	}
	if($arg=="hormigas"){
		animationRecursive('Hormigas');
		$('.plaga1').hide();
		$('.plaga2').hide();
		$('.plaga4').hide();
		$('.plaga5').hide();
		$('.plaga6').hide();			
		$('.plaga3').show(500);
	}
	if($arg=="cucarachas"){
		animationRecursive('Cucarachas');
		$('.plaga1').hide();
		$('.plaga2').hide();
		$('.plaga3').hide();
		$('.plaga5').hide();
		$('.plaga6').hide();			
		$('.plaga4').show(500);
	}
	if($arg=="arañas"){
		animationRecursive('Arañas');
		$('.plaga1').hide();
		$('.plaga2').hide();
		$('.plaga3').hide();
		$('.plaga4').hide();
		$('.plaga6').hide();	
		$('.plaga5').show(500);
	}
	if($arg=="alacranes"){
		animationRecursive('Alacranes');
		$('.plaga1').hide();
		$('.plaga2').hide();
		$('.plaga3').hide();
		$('.plaga4').hide();
		$('.plaga5').hide();
		$('.plaga6').show(500);				
	}
	if($arg=="otros"){
		animationRecursive('Otros');
		$('.plaga1').hide();
		$('.plaga2').hide();
		$('.plaga3').hide();
		$('.plaga4').hide();
		$('.plaga5').hide();
		$('.plaga6').hide();				
		
	}
*/	
}

function clickSection($arg){
	if($arg=="galeria"){
		var obj = new Array();
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(1)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(2)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(3)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(4)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(5)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(6)'><i class='material-icons'>photo_library</i></a>\n");
		obj.push("<a style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeAlbumMenu(6)'><i class='material-icons'>photo_library</i></a>\n");
		var distancia = (200);
		var angulo = 0.1;
		var region = 4;
		var select = $($('.ss')[1]);
		$($('.mfondo')[1]).css('transform','scale(2)');
		$($('.mfpulse')[1]).css('transform','scale(2)');
		ArrayPolar(distancia,angulo,region,obj,select);
		$($('.ss')[1]).css('transform','scale(1)');
	}
	if($arg=="subCat"){
		var obj = new Array();
		
		obj.push("<a onmouseover=\"descripcion('roeedores')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(1)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('murcielagos')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(2)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('hormigas')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(3)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('cucarachas')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(4)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('arañas')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(5)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('alacranes')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(6)'><i class='material-icons'>info</i></a>\n");
		obj.push("<a onmouseover=\"descripcion('otros')\" style='position: fixed;' class='btn-floating btn-large waves-effect waves-light  <?=$color?>' onclick='changeSubMenu(7)'><i class='material-icons'>info</i></a>\n");
		var distancia = (200);
		var angulo = 0.1;
		var region = 4;
		var select = $($('.ss')[0]);
		$($('.mfondo')[0]).css('transform','scale(2)');
		$($('.mfpulse')[0]).css('transform','scale(2)');
		ArrayPolar(distancia,angulo,region,obj,select);
		$($('.ss')[0]).css('transform','scale(1)');
	}
}
</script>