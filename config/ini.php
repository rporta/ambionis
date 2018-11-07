<?php
include_once(RUTA.'/config/config.php');
include_once(RUTA.'/php/function.php');
$colores = colores();
$colores_hex = colores_hex();
$colorArray = explode(" ", $proyectColor);
$color = $colores[$colorArray[0]][$colorArray[1]];
$color_hex = $colores_hex[$colorArray[0]][$colorArray[1]];
$checkMail = NULL;
?>