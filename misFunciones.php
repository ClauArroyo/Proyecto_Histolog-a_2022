<?php

function conectaBBDD(){
    require('configuracion.php');
    $mysqli = new mysqli($server, $user,  $pass, $BBDD);
    $mysqli -> query("SET NAMES utf8");
    return $mysqli;
}

