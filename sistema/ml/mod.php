<?php

    // Si se da clic en el botóń "GUARDAR" se inicia el código
    if (isset($_POST['guardar'])) {

    include "../../funciones/conexion.php"; // Se incluye la conexión a la DDBB

      // Se almacenan los nuevos datos del formulario en variables
      $book1 = $_POST['libro1'];
      $book2 = $_POST['libro2'];
      $book3 = $_POST['libro3'];
      $book4 = $_POST['libro4'];
      $book5 = $_POST['libro5'];
      $book6 = $_POST['libro6'];
      $book7 = $_POST['libro7'];
      $book8 = $_POST['libro8'];
      $book9 = $_POST['libro9'];
      $book10 = $_POST['libro10'];
      $book11 = $_POST['libro11'];
      $book12 = $_POST['libro12'];

      // Se insertan nuevos datos a la DDBB
      $conexion->query("UPDATE $table2 SET libro1='$book1', libro2='$book2', libro3='$book3', libro4='$book4', libro5='$book5', libro6='$book6', libro7='$book7', libro8='$book8', libro9='$book9', libro10='$book10', libro11='$book11', libro12='$book12'");

      }

      include "../../funciones/close.php";  // Se cierra la conexión a la DDBB

      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/ml'>";  // Se redirecciona al index del apartado mediante HTML5
      
?>