<?php

  // Se inicia la conexión con la DDBB
  include "../../funciones/conexion.php";

  // Se hace la eliminación a la DDBB
  $conexion->query("DELETE FROM $table1");

  // Mensaje de eliminación exitosa en JS
  echo "<script>alert('ESTUDIO PERSONAL REINICIADO CORRECTAMENTE')</script>";

  // Redireccionamiento al index del apartado mediante HTML5
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/ep'>";

  // Se cierra la conexión con la DDBB
  include "../../funciones/close.php";

?>