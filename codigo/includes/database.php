<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$database = 'tallerdos';

$conexion = mysql_connect($host, $user, $pass);// OR die("<p class='error'>Error de conexion</p>");
//echo "Ya me conecté";

$db = mysql_select_db($database);// OR die("<p class='error'>Error de base de datos</p>");
//echo "<br />Base de datos seleccionada";


?>