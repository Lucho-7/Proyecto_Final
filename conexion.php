<?php
$servidor="localhost";
$usuario="root";
$contra="";
$base="proyecto";
$conexion=mysqli_connect($servidor,$usuario,$contra,$base);
if(!$conexion)
{
	die("Algo salio ".mysqli_connect_error());
}
else{
	echo("tuani");
}

?>