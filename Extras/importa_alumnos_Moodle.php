<?php
header("Content-Type: text/html;charset=utf-8");
session_start();

$_SESSION['rol_usuario'] = 'profesor';

//si hay sesión iniciada cargamos código
if ( $_SESSION['rol_usuario'] == 'profesor')
{
///////////////////////////  conecto con MySQL  ///////////////////////////
$servidor = 'localhost';
$bd = 'Histologia';
$usuario_mysql = 'root';
$clave_mysql = '';
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $mysqli -> query("SET NAMES utf8");
///////////////////////////  fin conecto con MySQL  ///////////////////////////

    
////////////////////////copio el archivo que he subido  a la carpeta Jorge ////////////////
    $destino = './alumnosMoodleHistologia.csv';
    unlink($destino);
    $origen = $_FILES['fichero']['tmp_name'];
    $nombre=$_FILES['fichero']['name'];

    if (move_uploaded_file($origen,$destino)) {
        echo "El archivo es válido .\n<br/>";
        //echo "Pulsa el boton back de tu navegador \n";
    } else {
        echo "¡no se ha copiado correctamente!\n";
    }
    
    
    
//abro el archivo

	$fp=fopen('alumnosMoodleHistologia.csv',"r") or die("Error al abrir el fichero");
	$line = fgets( $fp,1024 );  //quita la fila de la cabecera
	$contador = 0;
	while(!feof($fp))
	{
            /*OJO: el excel hay que exportarlo como texto plano en Moodle*/
            $line = fgets( $fp,1024 );           
	    list($nombre,$apellidos,$nada1,$nada2,$nada3,$email,$resto) =explode( ",", $line);		
            echo $nombre .' '.$apellidos.' '.$email .'<br/>';
            
	}
	//cerramos el archivo
	fclose($fp);
	
	echo 'TOTAL '.$contador.'	alumnos insertados NUEVOS';
}//fin hay sesión
?>













