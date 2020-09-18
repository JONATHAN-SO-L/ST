<?php 

	$host="localhost";	//Servidor al que se accede para usar la base de datos
	$user="root";	//Usuario con acceso a la base de datos
	$pass="";	//Contraseña del usuario
	$database="st";	//Base de datos

	$table1="estudio_personal";	//Tabla de la base de datos
	$table2="meta_libros";	//Tabla de la base de datos
	$table3="adoracion_familia";	//Tabla de la base de datos

	$conexion = new mysqli ($host, $user, $pass, $database);	//Conexion sencilla a la base de datos MariaDB mediante mysqli

	//Condicional de conexión en caso de error
	if ($conexion->connect_errno) {

		die("Conexión Fallida: " . $conexion->connect_errno);	//Si falla la conexión, se cierra la conexión y muestra el error

	}

 ?>
