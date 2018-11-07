<script type="text/javascript">
$(window).load(function(){
	$('.load').fadeOut(500);
	<?php
		if($checkMail==1){
			echo "$('#mailOk').modal('open');";
		}
		else if($checkMail==0 && !is_null($checkMail)){
			echo "$('#mailFail').modal('open');";
		}
	?>
});
/*******************************/
$(window).ready(function(){

	$('.modal').modal();
	rCenter();
	responsiveCalc();
	var body = ($('body').width())/2;
	var plaga1 = ($('.plaga1').width()/1.25);
		
	$('.plaga1').css("left", (body-plaga1)+"px");
	$('.plaga2').css("left", (body-plaga1)+"px");
	$('.plaga3').css("left", (body-plaga1)+"px");
	$('.plaga4').css("left", (body-plaga1)+"px");
	$('.plaga5').css("left", (body-plaga1)+"px");
	$('.plaga6').css("left", (body-plaga1)+"px");
	$('.plaga7').css("left", (body-plaga1)+"px");
	//height logo
	$('.masInfo').hide();
	$('.plaga1').hide();
	$('.plaga2').hide();
	$('.plaga3').hide();
	$('.plaga4').hide();
	$('.btnMasInfoCuca').hide();
	$('.plaga5').hide();
	$('.plaga6').hide();
	$('.plaga7').hide();
	$(".button-collapse").sideNav();
	$('.parallax').parallax();
	$('.carousel.carousel-slider').carousel({fullWidth: true});

	$('.album_2').hide();
	$('.album_3').hide();
	$('.album_4').hide();
	$('.album_5').hide();
	$('.album_6').hide();
	$('.subCategoria_2').hide();
	$('.subCategoria_3').hide();
	$('.subCategoria_4').hide();
	$('.subCategoria_5').hide();
	$('.subCategoria_6').hide();
	$('.subCategoria_7').hide();

	$('.galeria').hide();
	$('.subCat').hide();
	/*******************************/
	$(window).resize(function() {
		//botones galeria
		var body = ($('body').width())/2;
		rCenter();
		var plaga1 = ($('.plaga1').width()/2);

		$('.plaga1').css("left", (body-plaga1)+"px");
		$('.plaga2').css("left", (body-plaga1)+"px");
		$('.plaga3').css("left", (body-plaga1)+"px");
		$('.plaga4').css("left", (body-plaga1)+"px");
		$('.plaga5').css("left", (body-plaga1)+"px");
		$('.plaga6').css("left", (body-plaga1)+"px");
		$('.plaga7').css("left", (body-plaga1)+"px");
		responsiveCalc();
	});
	/*******************************/
	$(window).scroll(function(){
		winScrollTop = $(window).scrollTop();
		positon =[
		 ($( "#section_1" ).offset().top),
		 ($( "#section_5" ).offset().top),
		 ($($('.parallax-container')[3]).offset().top) - ($( "#section_5" ).height()/2),
		 ($("#section_6").offset().top),
		 ($($('.parallax-container')[4]).offset().top) - ($( "#section_6" ).height()/2)
		];

		if(winScrollTop >= (positon[0]-1) ){
			var Width = $(window).width();
			$('.btnNav').css("left", (Width-(28+/*width scrollbar-y*/56))+"px");
		}
		else{
			$('.btnNav').css("left","28px");					
		}

		if(winScrollTop >= (positon[1]-1) ){
			$('#menu').css({"transform": "scale(1)"});

		}
		else{
			$('#menu').css({"transform": "scale(0)"});
			$($('.mfondo')[0]).css('transform','scale(0)');
			$($('.mfpulse')[0]).css('transform','scale(0)');
			$($('.ss')[0]).css('transform','scale(0)');		
		}

		if(winScrollTop >= (positon[2]-1)){
			$('#menu').css({"transform": "scale(0)"});
			$($('.mfondo')[0]).css('transform','scale(0)');
			$($('.mfpulse')[0]).css('transform','scale(0)');
			$($('.ss')[0]).css('transform','scale(0)');	
		}
		if(winScrollTop >= (positon[3]-1) ){
			$('#menu2').css({"transform": "scale(1)"});
		}
		else{
			$('#menu2').css({"transform": "scale(0)"});		
			$($('.mfondo')[1]).css('transform','scale(0)');
			$($('.mfpulse')[1]).css('transform','scale(0)');
			$($('.ss')[1]).css('transform','scale(0)');
		}
		if(winScrollTop >= (positon[4]-1)){
			$('#menu2').css({"transform": "scale(0)"});
			$($('.mfondo')[1]).css('transform','scale(0)');
			$($('.mfpulse')[1]).css('transform','scale(0)');
			$($('.ss')[1]).css('transform','scale(0)');

		}
	});
	/*******************************/
	$('body').click(function(event){
		$('.plaga1').hide(200);
		$('.plaga2').hide(200);
		$('.plaga3').hide(200);
		$('.plaga4').hide(200);
		$('.plaga5').hide(200);
		$('.plaga6').hide(200);
		$('.plaga7').hide(200);
		/*
		$('#menu').css({"transform": "scale(0)"});
		$($('.mfondo')[0]).css('transform','scale(0)');
		$($('.mfpulse')[0]).css('transform','scale(0)');
		$($('.ss')[0]).css('transform','scale(0)');
		$('#menu2').css({"transform": "scale(0)"});
		$($('.mfondo')[1]).css('transform','scale(0)');
		$($('.mfpulse')[1]).css('transform','scale(0)');
		$($('.ss')[1]).css('transform','scale(0)');
		*/
	});
	$('.btnMasInfoCuca').clickToggle(

		function(){
			//console.log ($($('.subCategoria_4')[0].children[3]) );
			$($('.subCategoria_4')[0].children[3].children).show(300);
			$(this.lastChild).text('arrow_drop_up');
		},
		function(){
			$($('.subCategoria_4')[0].children[3].children).hide(300);
			$(this.lastChild).text('arrow_drop_down');
		}
	);
	$('.btnMasInfoBichoTaladro').clickToggle(
		function(){
			$($('.bichoTaladro')[0].children[3].children).show(300);
			$(this.lastChild).text('arrow_drop_up');
		},
		function(){
			$($('.bichoTaladro')[0].children[3].children).hide(300);
			$(this.lastChild).text('arrow_drop_down');
		}
	);
	$('.btnMasInfo').clickToggle(
		function(){
			if ($('.subCategoria_1').is(":visible")){
				$($('.subCategoria_1')[0].children[3].firstElementChild).show(300);
			}
			else if ($('.subCategoria_2').is(":visible")){
				$($('.subCategoria_2')[0].children[3].firstElementChild).show(300);
			}
			else if ($('.subCategoria_4').is(":visible")){
				$($('.subCategoria_4')[1].children[2].firstElementChild).show(300);
			}
			else if ($('.subCategoria_5').is(":visible")){
				$($('.subCategoria_5')[0].children[3].firstElementChild).show(300);
			}
			else if ($('.subCategoria_6').is(":visible")){
				$($('.subCategoria_6')[0].children[3].firstElementChild).show(300);
			}
			else if ($('.subCategoria_7').is(":visible")){
				$($('.subCategoria_7')[0].children[3].firstElementChild).show(300);
			}
			//$($('.subCategoria_4')[0].children[3].children).show(300);
			$(this.lastChild).text('arrow_drop_up');
		},
		function(){
			$($('.subCategoria_1')[0].children[3].firstElementChild).hide(300);
			$($('.subCategoria_2')[0].children[3].firstElementChild).hide(300);
			$($('.subCategoria_4')[1].children[2].firstElementChild).hide(300);
			$($('.subCategoria_5')[0].children[3].firstElementChild).hide(300);
			$(this.lastChild).text('arrow_drop_down');
		}
	);
	/*******************************/
	$('.navBtn').click(function(){
	 	scrollAnimation(this);
	});
	$("button[name='EnviarMail']").click(function(k) {
		var countIsComplete = 0;
		$('.isComplete').each(function(i, j) {
			if ($(j).val()==""){
				countIsComplete++;
			}
		});
		if(countIsComplete>0){
			$('#formFail').modal('open');
		}else{
			$("button[name='EnviarMail']").attr('type','submit');
			$('.formContacto').submit();
		}
	});
});
</script>