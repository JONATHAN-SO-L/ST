<?php
  
    // Si se presiona el botón "GUARDAR" se inicia el código
    if (isset($_POST['guardar'])) {

    include "../../funciones/conexion.php"; // Se incluye la conexión a la DDBB

      // Se reciben los datos del formulario y se almacenan en variables
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

      // Se insertan los datos en la DDBB
    $conexion->query("INSERT INTO $table2 (libro1, libro2, libro3, libro4, libro5, libro6, libro7, libro8, libro9, libro10, libro11, libro12) VALUES ('$book1', '$book2', '$book3', '$book4', '$book5', '$book6', '$book7', '$book8', '$book9', '$book10', '$book11', '$book12')");
  }

    include "../../funciones/close.php";  // Se cierra la conexión con la DDBB

    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='0;URL=/st/sistema/ml'>";  // Se redirecciona al index del apartado mediante HTML5

?>