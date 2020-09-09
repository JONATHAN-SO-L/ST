<!DOCTYPE html> <!-- Inicio del documento identificado como HTML5 -->
<html lang="es">    <!-- Lenguaje español -->
<head>  <!-- Cabeza de la aplicación web -->
    <title>PROCESO</title>   <!-- Título de la aplicación web -->
    <link rel="icon" href="/st/img/favicon.ico" type="image/icon">  <!-- Ícono de la aplicación web -->
    <meta charset="utf-8">  <!-- Aceptación de carácteres espciales -->
    <meta name="viewport" content="width=device-width, initial-scale=1">    <!-- Visualización "Responsive" en dispositivos móviles" -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<br>

<div class="container">
<center>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-danger"></div>
</center>
</div>

<?php
  
  // Se abre la conexión con la DDBB
  include "../../funciones/conexion.php";

    // Se elimina comletamente todo registro que existe en la tabla, dejándola en un estado de fábrica
    $conexion->query("TRUNCATE TABLE enero");
    $conexion->query("TRUNCATE TABLE febrero");
    $conexion->query("TRUNCATE TABLE marzo");
    $conexion->query("TRUNCATE TABLE abril");
    $conexion->query("TRUNCATE TABLE mayo");
    $conexion->query("TRUNCATE TABLE junio");
    $conexion->query("TRUNCATE TABLE julio");
    $conexion->query("TRUNCATE TABLE agosto");
    $conexion->query("TRUNCATE TABLE septiembre");
    $conexion->query("TRUNCATE TABLE octubre");
    $conexion->query("TRUNCATE TABLE noviembre");
    $conexion->query("TRUNCATE TABLE diciembre");

    // Mensaje de eliminación exitosa
    echo "<script>alert('INFORMES BORRADOS Y REINICIADOS CORRECTAMENTE')</script>";

    // Redireccionamiento al index del apartado mediante HTML5
    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/im'>";

    // Se cierra la conexión con la DDBB
    include "../../funciones/close.php";

?>

</body>
</html>