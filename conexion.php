<?php

$server="localhost";
$user="root";
$passwd="";
$db_name="Adcesa";

$conex = mysqli_connect($server,$user, $passwd,$db_name);
if ($conex->connect_error) {
    die("Error al conectar con la base de datos: " . $conex->connect_error);
}
if (!$conex) {
    die("Error en la conexiÃ³n a la base de datos: " . mysqli_connect_error());
}
?>