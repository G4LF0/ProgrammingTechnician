<?php
	//conectamos Con el servidor
	$conectar=@mysqli_connect("localhost","id3647013_francisco","Leonid1604");
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar, "id3647013_clientes");
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$cliente=$_POST['cliente'];
	$correo=$_POST['correo'];
	$telefono=$_POST['num'];
	$asunto=$_POST['asun'];
	$comentario=$_POST['comentario'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO nuevos VALUES('', '$cliente', '$correo', '$telefono', '$asunto', '$comentario')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conectar, $sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='https://leonidinc.000webhostapp.com'>Volver</a>";
	}
?>