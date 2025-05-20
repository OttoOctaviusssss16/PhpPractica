<!DOCTYPE HTML>
<html>
<head>
    <title>Conexión a Formularios</title>
</head>
<body>
<!--Formulario con get, el get muestra lo ingresado en la url, por ende es ineficaz para sistemas de login o donde se tenga
que ingresar información sensible, es ideal para sistemas de búsqueda, filtro, etc. El action redirige a la dirección donde se
procesa el form-->
<form action="" method="get">
  <input type="text" name="nombre" placeholder="Tu nombre">
  <input type="submit" value="Enviar">
</form>

<form action="" method="post">
  <input type="text" name="nombre2" placeholder="Tu nombre">
  <input type="submit" value="Enviar2">
</form>
</body>
<?php
/*Este condicional muestra el contenido de la variable nombre, que se envía mediante el método get, y como el action está vacío
el resultado se procesa en el mismo archivo*/
if (isset($_GET["nombre"])) {
  echo "Hola " . $_GET["nombre"];
}

if (isset($_POST["nombre2"])) {
 echo "Hola " . $_POST["nombre2"];
}
?>