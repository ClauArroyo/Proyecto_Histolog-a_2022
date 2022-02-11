<?php
/*
 * cambia el color de la fuente en función del color del botón
 */
function colorClaro($color) {
    $r = hexdec(substr($color, 1, 2));
    $g = hexdec(substr($color, 3, 2));
    $b = hexdec(substr($color, 5, 2));
  $a = 1 - (0.299 * $r + 0.587 * $g + 0.014 * $b) / 255;
  if ($a < 0.5) { return '#000000';}
  else {return '#FFFFFF';}
  
}


function conecta()
	{
	require('configuracion.php');
 	$con_mysql=mysql_connect($servidor,$usuario_mysql,$clave_mysql)or die('ERROR:'.mysql_error());
	mysql_select_db($bd)or die('ERROR:'.mysql_error());
	}
        
function conectaLi()
{
    require('configuracion.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $mysqli -> query("SET NAMES utf8");
    return $mysqli;
}

?>
