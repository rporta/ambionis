<?php
function colores_hex(){
	$colors= array();
	$rojo="#ffebee,#ffcdd2,#ef9a9a,#e57373,#ef5350,#f44336,#e53935,#d32f2f,#c62828,#b71c1c,#ff8a80,#ff5252,#ff1744,#d50000";
	$rosa="#fce4ec,#f8bbd0,#f48fb1,#f06292,#ec407a,#e91e63,#d81b60,#c2185b,#ad1457,#880e4f,#ff80ab,#ff4081,#f50057,#c51162";
	$violeta="#f3e5f5,#e1bee7,#ce93d8,#ba68c8,#ab47bc,#9c27b0,#8e24aa,#7b1fa2,#6a1b9a,#4a148c,#ea80fc,#e040fb,#d500f9,#aa00ff";	
	$violeta1="#ede7f6,#d1c4e9,#b39ddb,#9575cd,#7e57c2,#673ab7,#5e35b1,#512da8,#4527a0,#311b92,#b388ff,#7c4dff,#651fff,#6200ea";
	$azul="#e8eaf6,#c5cae9,#9fa8da,#7986cb,#5c6bc0,#3f51b5,#3949ab,#303f9f,#283593,#1a237e,#8c9eff,#536dfe,#3d5afe,#304ffe";
	$azul2="#e3f2fd,#bbdefb,#90caf9,#64b5f6,#42a5f5,#2196f3,#1e88e5,#1976d2,#1565c0,#0d47a1,#82b1ff,#448aff,#2979ff,#2962ff";	
	$celeste="#e1f5fe,#b3e5fc,#81d4fa,#4fc3f7,#29b6f6,#03a9f4,#039be5,#0288d1,#0277bd,#01579b,#80d8ff,#40c4ff,#00b0ff,#0091ea";
	$celeste2="#e0f7fa,#b2ebf2,#80deea,#4dd0e1,#26c6da,#00bcd4,#00acc1,#0097a7,#00838f,#006064,#84ffff,#18ffff,#00e5ff,#00b8d4";
	$verde1="#e0f2f1,#b2dfdb,#80cbc4,#4db6ac,#26a69a,#009688,#00897b,#00796b,#00695c,#004d40,#a7ffeb,#64ffda,#1de9b6,#00bfa5";
	$verde2="#e8f5e9,#c8e6c9,#a5d6a7,#81c784,#66bb6a,#4caf50,#43a047,#388e3c,#2e7d32,#1b5e20,#b9f6ca,#69f0ae,#00e676,#00c853";
	$verde3="#f1f8e9,#dcedc8,#c5e1a5,#aed581,#9ccc65,#8bc34a,#7cb342,#689f38,#558b2f,#33691e,#ccff90,#b2ff59,#76ff03,#64dd17";
	$amarillo1="#f9fbe7,#f0f4c3,#e6ee9c,#dce775,#d4e157,#cddc39,#c0ca33,#afb42b,#9e9d24,#827717,#f4ff81,#eeff41,#c6ff00,#aeea00";		
	$amarillo2="#fffde7,#fff9c4,#fff59d,#fff176,#ffee58,#ffeb3b,#fdd835,#fbc02d,#f9a825,#f57f17,#ffff8d,#ffff00,#ffea00,#ffd600";
	$amarillo3="#fff8e1,#ffecb3,#ffe082,#ffd54f,#ffca28,#ffc107,#ffb300,#ffa000,#ff8f00,#ff6f00,#ffe57f,#ffd740,#ffc400,#ffab00";
	$naranja="#fff3e0,#ffe0b2,#ffcc80,#ffb74d,#ffa726,#ff9800,#fb8c00,#f57c00,#ef6c00,#e65100,#ffd180,#ffab40,#ff9100,#ff6d00";
	$naranja2="#fbe9e7,#ffccbc,#ffab91,#ff8a65,#ff7043,#ff5722,#f4511e,#e64a19,#d84315,#bf360c,#ff9e80,#ff6e40,#ff3d00,#dd2c00";
	$azul_gris="#eceff1,#cfd8dc,#b0bec5,#90a4ae,#78909c,#607d8b,#546e7a,#455a64,#37474f,#263238";
	$marron="#efebe9,#d7ccc8,#bcaaa4,#a1887f,#8d6e63,#795548,#6d4c41,#5d4037,#4e342e,#3e2723";
	$gris="#fafafa,#f5f5f5,#eeeeee,#e0e0e0,#bdbdbd,#9e9e9e,#757575,#616161,#424242,#212121";
	$bnt="#000000,#ffffff,N/A";
	#arrays
	$rojo = explode(",", $rojo);
	$rosa = explode(",", $rosa);
	$violeta = explode(",", $violeta);
	$violeta1 = explode(",", $violeta1);
	$azul = explode(",", $azul);
	$azul2 = explode(",", $azul2);
	$celeste = explode(",", $celeste);
	$celeste2 = explode(",", $celeste2);
	$verde1 = explode(",", $verde1);
	$verde2 = explode(",", $verde2);
	$verde3 = explode(",", $verde3);
	$amarillo1 = explode(",", $amarillo1);
	$amarillo2 = explode(",", $amarillo2);
	$amarillo3 = explode(",", $amarillo3);
	$naranja = explode(",", $naranja);
	$naranja2 = explode(",", $naranja2);
	$azul_gris = explode(",", $azul_gris);
	$marron = explode(",", $marron);
	$gris = explode(",", $gris);
	$bnt = explode(",", $bnt);

	#colores 0-13
	$colors["rojo"]=$rojo; 	
	$colors["rosa"]=$rosa;
	$colors["violeta"]=$violeta;
	$colors["violeta1"]=$violeta1;
	$colors["azul"]=$azul;
	$colors["azul2"]=$azul2;
	$colors["celeste"]=$celeste;
	$colors["celeste2"]=$celeste2;
	$colors["verde1"]=$verde1;
	$colors["verde2"]=$verde2;
	$colors["verde3"]=$verde3;
	$colors["amarillo1"]=$amarillo1;
	$colors["amarillo2"]=$amarillo2;
	$colors["amarillo3"]=$amarillo3;
	$colors["naranja"]=$naranja;
	$colors["naranja2"]=$naranja2;
	#colores 0-9
	$colors["azul_gris"]=$azul_gris;
	$colors["marron"]=$marron;
	$colors["gris"]=$gris;
	#colores 0-2
	$colors["bnt"]=$bnt;

	return $colors;			
}
function colores(){
	$colors= array();
	$rojo="red lighten-5,red lighten-4,red lighten-3,red lighten-2,red lighten-1,red,red darken-1,red darken-2,red darken-3,red darken-4,red accent-1,red accent-2,red accent-3,red accent-4";
	$rosa="pink lighten-5,pink lighten-4,pink lighten-3,pink lighten-2,pink lighten-1,pink,pink darken-1,pink darken-2,pink darken-3,pink darken-4,pink accent-1,pink accent-2,pink accent-3,pink accent-4";
	$violeta="purple lighten-5,purple lighten-4,purple lighten-3,purple lighten-2,purple lighten-1,purple,purple darken-1,purple darken-2,purple darken-3,purple darken-4,purple accent-1,purple accent-2,purple accent-3,purple accent-4";	
	$violeta1="deep-purple lighten-5,deep-purple lighten-4,deep-purple lighten-3,deep-purple lighten-2,deep-purple lighten-1,deep-purple,deep-purple darken-1,deep-purple darken-2,deep-purple darken-3,deep-purple darken-4,deep-purple accent-1,deep-purple accent-2,deep-purple accent-3,deep-purple accent-4";
	$azul="indigo lighten-5,indigo lighten-4,indigo lighten-3,indigo lighten-2,indigo lighten-1,indigo,indigo darken-1,indigo darken-2,indigo darken-3,indigo darken-4,indigo accent-1,indigo accent-2,indigo accent-3,indigo accent-4";
	$azul2="blue lighten-5,blue lighten-4,blue lighten-3,blue lighten-2,blue lighten-1,blue,blue darken-1,blue darken-2,blue darken-3,blue darken-4,blue accent-1,blue accent-2,blue accent-3,blue accent-4"	;	
	$celeste="light-blue lighten-5,light-blue lighten-4,light-blue lighten-3,light-blue lighten-2,light-blue lighten-1,light-blue,light-blue darken-1,light-blue darken-2,light-blue darken-3,light-blue darken-4,light-blue accent-1,light-blue accent-2,light-blue accent-3,light-blue accent-4";
	$celeste2="cyan lighten-5,cyan lighten-4,cyan lighten-3,cyan lighten-2,cyan lighten-1,cyan,cyan darken-1,cyan darken-2,cyan darken-3,cyan darken-4,cyan accent-1,cyan accent-2,cyan accent-3,cyan accent-4";
	$verde1="teal lighten-5,teal lighten-4,teal lighten-3,teal lighten-2,teal lighten-1,teal,teal darken-1,teal darken-2,teal darken-3,teal darken-4,teal accent-1,teal accent-2,teal accent-3,teal accent-4";
	$verde2="green lighten-5,green lighten-4,green lighten-3,green lighten-2,green lighten-1,green,green darken-1,green darken-2,green darken-3,green darken-4,green accent-1,green accent-2,green accent-3,green accent-4";
	$verde3="light-green lighten-5,light-green lighten-4,light-green lighten-3,light-green lighten-2,light-green lighten-1,light-green,light-green darken-1,light-green darken-2,light-green darken-3,light-green darken-4,light-green accent-1,light-green accent-2,light-green accent-3,light-green accent-4";
	$amarillo1="lime lighten-5,lime lighten-4,lime lighten-3,lime lighten-2,lime lighten-1,lime,lime darken-1,lime darken-2,lime darken-3,lime darken-4,lime accent-1,lime accent-2,lime accent-3,lime accent-4";
	$amarillo2="yellow lighten-5,yellow lighten-4,yellow lighten-3,yellow lighten-2,yellow lighten-1,yellow,yellow darken-1,yellow darken-2,yellow darken-3,yellow darken-4,yellow accent-1,yellow accent-2,yellow accent-3,yellow accent-4";		
	$amarillo3="amber lighten-5,amber lighten-4,amber lighten-3,amber lighten-2,amber lighten-1,amber,amber darken-1,amber darken-2,amber darken-3,amber darken-4,amber accent-1,amber accent-2,amber accent-3,amber accent-4";
	$naranja="orange lighten-5,orange lighten-4,orange lighten-3,orange lighten-2,orange lighten-1,orange,orange darken-1,orange darken-2,orange darken-3,orange darken-4,orange accent-1,orange accent-2,orange accent-3,orange accent-4";
	
	$naranja2="deep-orange lighten-5,deep-orange lighten-4,deep-orange lighten-3,deep-orange lighten-2,deep-orange lighten-1,deep-orange,deep-orange darken-1,deep-orange darken-2,deep-orange darken-3,deep-orange darken-4,deep-orange accent-1,deep-orange accent-2,deep-orange accent-3,deep-orange accent-4";
	
	$azul_gris="blue-grey lighten-5,blue-grey lighten-4,blue-grey lighten-3,blue-grey lighten-2,blue-grey lighten-1,blue-grey,blue-grey darken-1,blue-grey darken-2,blue-grey darken-3,blue-grey darken-4";
	$marron="brown lighten-5,brown lighten-4,brown lighten-3,brown lighten-2,brown lighten-1,brown,brown darken-1,brown darken-2,brown darken-3,brown darken-4";
	$gris="grey lighten-5,grey lighten-4,grey lighten-3,grey lighten-2,grey lighten-1,grey,grey darken-1,grey darken-2,grey darken-3,grey darken-4";
	$bnt="black,white,transparent";
	
	#arrays
	$rojo = explode(",", $rojo);
	$rosa = explode(",", $rosa);
	$violeta = explode(",", $violeta);
	$violeta1 = explode(",", $violeta1);
	$azul = explode(",", $azul);
	$azul2 = explode(",", $azul2);
	$celeste = explode(",", $celeste);
	$celeste2 = explode(",", $celeste2);
	$verde1 = explode(",", $verde1);
	$verde2 = explode(",", $verde2);
	$verde3 = explode(",", $verde3);
	$amarillo1 = explode(",", $amarillo1);
	$amarillo2 = explode(",", $amarillo2);
	$amarillo3 = explode(",", $amarillo3);
	$naranja = explode(",", $naranja);
	$naranja2 = explode(",", $naranja2);
	$azul_gris = explode(",", $azul_gris);
	$marron = explode(",", $marron);
	$gris = explode(",", $gris);
	$bnt = explode(",", $bnt);

	#colores 0-13
	$colors["rojo"]=$rojo; 	
	$colors["rosa"]=$rosa;
	$colors["violeta"]=$violeta;
	$colors["violeta1"]=$violeta1;
	$colors["azul"]=$azul;
	$colors["azul2"]=$azul2;
	$colors["celeste"]=$celeste;
	$colors["celeste2"]=$celeste2;
	$colors["verde1"]=$verde1;
	$colors["verde2"]=$verde2;
	$colors["verde3"]=$verde3;
	$colors["amarillo1"]=$amarillo1;
	$colors["amarillo2"]=$amarillo2;
	$colors["amarillo3"]=$amarillo3;
	$colors["naranja"]=$naranja;
	$colors["naranja2"]=$naranja2;
	#colores 0-9
	$colors["azul_gris"]=$azul_gris;
	$colors["marron"]=$marron;
	$colors["gris"]=$gris;
	#colores 0-2
	$colors["bnt"]=$bnt;

	return $colors;
}
function xbug($arg,$arg2 = false){
	$arg3 = str_repeat("-", 60);
	echo "<pre style='color:#00ff00; background-color:black;' >\n";
	echo "\n";
	echo "<".$arg3."\tIn\t".$arg3.">\n";	
	if(is_array($arg) || is_object($arg)){
		if($arg2 == true){
			print_r(var_dump($arg));
		}
		else{
			print_r($arg);
		}
	}
	else{
		if($arg2 == true){
			var_dump($arg);
		}
		else{
			echo $arg."\n";
		}
	}
	echo "<".$arg3."\tOut\t".$arg3.">\n";
	echo "\n";
	echo "</pre>";
}
?>