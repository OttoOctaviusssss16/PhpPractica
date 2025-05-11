<?php
//ArrayList Básico
//Almacena información en una lista
//Ejemplo
$colores = ["rojo", "verde", "azul"];


//Arraylist Relacional
//Almacena información en una lista y hace que hagamos una clave para identificar cada atributo de la lista
//Ejemplo
$persona = [
    "nombre" => "Toto",
    "edad" => 30,
    "pais" => "Uruguay"
];


//Arraylist Multidimensional
//Arraylist que contiene múltiples Arraylist dentro de si
//Ejemplo
<?php
$personas = [
    ["nombre" => "Toto", "edad" => 30],
    ["nombre" => "Ana", "edad" => 25],
    ["nombre" => "Luis", "edad" => 40]
];

foreach ($personas as $persona) {
    echo "Nombre: " . $persona["nombre"] . ", Edad: " . $persona["edad"] . "<br>";
}
?>

?>


