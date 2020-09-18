<?php

if (isset($_POST['qns'])){

	include "conexion.php";

	$name = $_POST['nombre'];
	$msj = $_POST['mensaje'];

	$conexion -> query ("INSERT INTO q_n_s (nombre, q_or_S) VALUES ('$name', '$msj')");

	echo "<script>alert('MENSAJE ENVIADO EXITOSAMENTE')</script>";

	include "close.php";
}

	echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/'>";

?>