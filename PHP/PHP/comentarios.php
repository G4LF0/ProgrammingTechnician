<HTML>
<HEAD>
<TITLE>Deja un mensaje</TITLE>
</HEAD>
<BODY>

<FORM ACTION="procesar_mensaje.php" METHOD=POST>
<B>Nombre de usuario:</B>
<INPUT TYPE=text SIZE=20 NAME="usuario">
<BR>
<B>Escribe tu mensaje:</B>
<BR>
<TEXTAREA ROWS=10 COLS=70 NAME="mensaje"></TEXTAREA>
<BR>
<INPUT TYPE=submit VALUE="Enviar mensaje">
</FORM>

<HR>

<?PHP

$conexion = mysql_connect("servidor de la base de datos", "usuario de la base de datos", "contraseña del usuario");
mysql_select_db("base de datos", $conexion);

if ($conexion)
{
	$resultado = mysql_query("SELECT id, usuario, fecha, mensaje FROM comentarios ORDER BY id DESC", $conexion);
	while ($fila = mysql_fetch_row($resultado))
	{
		echo "<B>Mensaje</B> #" . $fila[0] . "; ";
		echo "<B>Escrito por:</B> " . $fila[1] . "; ";
		echo "<B>Fecha:</B> " . $fila[2] . "; ";
		echo "<BR>";
		echo $fila[3];
		echo "<HR>";
	}
}

mysql_close($conexion);

?>

</BODY>
</HTML>