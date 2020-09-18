<!DOCTYPE html>	<!-- Inicio del documento identificado como HTML5 -->
<html lang="es">	<!-- Lenguaje español -->
<head>	<!-- Cabeza de la aplicación web -->
	<title>ST</title>	<!-- Título de la aplicación web -->
	<link rel="icon" href="/st/img/favicon.ico" type="image/icon">	<!-- Ícono de la aplicación web -->
	<meta charset="utf-8">	<!-- Aceptación de carácteres espciales -->
	<meta name="viewport" content="width=device-width, initial-scale=1">	<!-- Visualización "Responsive" en dispositivos móviles" -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/st/css/index.css">	<!-- Se enlaza nuestro archivo de diseño en CSS -->
</head>

<body>	<!-- Cuerpo de la aplicación web -->

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
 <!-- Logo -->
  <a class="navbar-brand" href="#">
    <img src="/st/img/logo.png" alt="logo" style="width:40px;">
  </a>

<!-- Menú -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">SEGUIMIENTO TEOCRÁTICO</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/st/sistema/qns/qns.php">Q&S</a>
    </li>
  </ul>
</nav>

<br>

<!-- Apartados -->
<div class="botones">

	<!-- Botones de acceso -->
<!-- Sección 1 -->
	<div class="container" align="center">
		<a class="boton" href="/st/sistema/ep"><button style="margin: 10px" type="sumbit" class="btn btn-primary active btn-lg"><img id="ep" src="/st/img/ep.png">ESTUDIO PERSONAL</button></a>	<!--Separación entre botones -->

		<a class="boton" href="/st/sistema/lb"><button style="margin: 10px" type="sumbit" class="btn btn-primary active btn-lg"><img id="lb" src="/st/img/lb.png">LECTURA DE LA BÍBLIA</button></a>

		<a class="boton" href="/st/sistema/ml"><button style="margin: 10px" type="sumbit" class="btn btn-primary active btn-lg"><img id="ml" src="/st/img/ml.png">META DE LIBROS</button></a>
	</div>

<!-- Sección 2 -->
	<div class="container" align="center">
		<a class="boton" href="/st/sistema/im"><button style="margin: 10px" type="sumbit" class="btn btn-primary active btn-lg"><img id="im" src="/st/img/im.png">INFORME MENSUAL</button></a>
    <a class="boton" href="/st/sistema/aef"><button style="margin: 10px" type="sumbit" class="btn btn-primary active btn-lg"><img id="im" src="/st/img/ep.png">ADORACIÓN EN FAMILIA</button></a>
	</div>
</div>
<br>

<div class="container contenedor-modal" align="center">
	<span name="flotante" id="flotante" class="flotante" data-toggle="modal" data-target="#miModal" ><img class="qns2" src="/st/img/qns2.png" alt="Q&S"></span>
</div>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-contenido modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
        <br>
        <div class="container">

          <div class="container">
            <form class="form-inline"><img id="qns" src="/st/img/qns2.png" style="margin-top: 5px" ><h2 class="form-title" style="margin: 10px">Quejas & Sugerencias</h2></form>

            <form method="POST" action="/st/funciones/q&s.php">
              <div>
                <br>
                <div class="form-group">
                  <label><strong>NOMBRE :</strong></label>
                  <input required="#" type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre aquí">
                </div>

                <div class="form-group">
                  <label><strong>MENSAJE :</strong></label>
                  <textarea required="#" class="form-control" rows="3" id="mensaje" name="mensaje" placeholder="Redacta tu mensaje aquí"></textarea>
                </div>

                <div class="form-group" align="center">
                  <input type="submit" class="btn qns1" id="enviar" name="qns" value="Enviar Mensaje">
                </div><br>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pie de página -->
<footer class="pie1">
	<!-- Imágenes redireccionables -->
	<div class="container" align="center">
		<a style="margin: 20px" href="https://jw.org/es" target="_blank"><img id="jw" src="https://movilsagt.com/jw/files/2016/01/JW-NUEVO.jpg">SITIO OFICIAL DE LOS TESTIGOS DE JEHOVÁ</a>	<!-- Apertura en otra pestaña -->
		<a style="margin: 20px" href="https://my.jw.org/home/es" target="_blank"><img id="apps" src="https://assets1.jw.org/images/siteMarkApps_mobile.svg">DOMINIO DE LA CONGREGACIÓN</a>
		<a style="margin: 20px" href="https://wol.jw.org/es" target="_blank"><img id="wol" src="https://pbs.twimg.com/media/EFglz6RWoAAmj_P.jpg">BIBLIOTECA EN LÍNEA</a>
	</div>

<br>

<!-- Texto de derechos de autor -->
	<div class="container" align="center">
		<p id="foot">All rights reserved. Copyrights by Jonathán Sánchez ©</p>	<!-- Etiqueta de comentario -->
		<p id="foot">Versión 1.0.0</p>
		<p id="foot">Last release 2020</p>
	</div>
</footer>

</body>	<!-- Cierre del cuerpo de la aplicación web -->
</html>	<!-- Fin del documento -->