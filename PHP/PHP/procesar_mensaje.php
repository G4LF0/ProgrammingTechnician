<?php

$conexion = mysql_connect("servidor de la base de datos", "usuario de la base de datos", "contraseña del usuario");
mysql_select_db("base de datos", $conexion);

if ($conexion)
{
	mysql_query("INSERT INTO comentarios (usuario, mensaje) VALUES ('".$_POST["usuario"]."', '".$_POST["mensaje"]."')", $conexion);
	header("Location: comentarios.php");
}

mysql_close($conexion);

?>