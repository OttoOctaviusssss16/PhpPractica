<!-- formulario.php -->
<form action="" method="post">
  <label for="nombre">Nombre:</label><br>
  <input type="text" name="nombre" id="nombre"><br>

  <label for="email">Email:</label><br>
  <input type="text" name="email" id="email"><br>

  <label for="edad">Edad:</label><br>
  <input type="number" name="edad" id="edad"><br><br>

  <input type="submit" value="Enviar">
</form>

<?php
// Validar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Inicializar errores
    $errores = [];

    // Validación de nombre
    if (empty($_POST["nombre"])) {
        $errores[] = "El nombre es obligatorio.";
    } else {
        $nombre = htmlspecialchars(trim($_POST["nombre"]));
    }

    // Validación de email
    if (empty($_POST["email"])) {
        $errores[] = "El email es obligatorio.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Validación de edad
    if (empty($_POST["edad"])) {
        $errores[] = "La edad es obligatoria.";
    } elseif (!is_numeric($_POST["edad"]) || $_POST["edad"] <= 0) {
        $errores[] = "La edad debe ser un número mayor a cero.";
    } else {
        $edad = intval($_POST["edad"]);
    }

    // Mostrar errores o datos
    if (count($errores) > 0) {
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
    } else {
        echo "<h2>Datos recibidos:</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Edad: $edad</p>";
    }
}
?>
