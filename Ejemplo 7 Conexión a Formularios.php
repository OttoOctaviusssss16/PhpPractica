<!DOCTYPE HTML>
<html>
<head>
    <title>Conexión a Formularios</title>
</head>
<body>
<!--Formulario con get, el get muestra lo ingresado en la url, por ende es ineficaz para sistemas de login o donde se tenga
que ingresar información sensible, es ideal para sistemas de búsqueda, filtro, etc. El action redirige a la dirección donde se
procesa el form-->
<form action="procesar_get.php" method="get">
  <input type="text" name="nombre" placeholder="Tu nombre">
  <input type="submit" value="Enviar">
</form>

</body>
<?php
/**/
?>