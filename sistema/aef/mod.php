<?php

    // Si se presionó el botón "GUARDAR" se inicia el código
if (isset($_POST['guardar'])) {

    include "../../funciones/conexion.php"; // Se incluye la conexión a la DDBB

      // Se reciben los nuevos datos del formulario y se almacenan en variables
    $hour = $_POST['hora'];
    $horary = $_POST['horario'];
    $day = $_POST['dia'];
    $title1 = $_POST['titulo1'];
    $title2 = $_POST['titulo2'];
    $title3 = $_POST['titulo3'];
    $title4 = $_POST['titulo4'];

      // Se insertan los nuevos datos en la base de datos
    $conexion->query("UPDATE $table3 SET hora='$hour', am_pm='$horary', dia='$day', titulo1='$title1', titulo2='$title2', titulo3='$title3', titulo4='$title4'");

    echo "<script>alert('PROGRAMA DE ADORACIÓN EN FAMILIA MODIFICADO CORRECTAMENTE')</script>";

  }

      include "../../funciones/close.php";  // Se cierra la conexión a la DDBB

        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/aef'>";  // Se redirecciona al index del apartado mediante HTML5
        ?>