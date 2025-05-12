<?php
//Arrays dentro de un una función
//Ingresamos un array con información de diversos individuos
$personas = [
    ["nombre" => "Toto", "edad" => 30],
    ["nombre" => "Luli", "edad" => 17],
    ["nombre" => "Mario", "edad" => 21],
    ["nombre" => "Cami", "edad" => 15]
];

//Función de filtro
/*La función de filtro recibe la variable personas con el array multidimensional y crea otra vacía que se llama "mayores", con el
ciclo foreach recorre cada persona y con un if chequea si la edad es mayor o igual a 18 años, si la condición se devuelve true
se añade esa persona a la lista de mayores, y con el return nos devuelve la lista de mayores*/
function filtrarMayores($personas) {
    $mayores = [];

    foreach ($personas as $persona) {
        if ($persona["edad"] >= 18) {
            $mayores[] = $persona;
        }
    }

    return $mayores;
}

/*Por último, para hacer uso de la función, alojamos su resultado en una variable que se llama mayoresDeEdad, y después para verlo
en texto, citamos la variable para mostrar los mayores, con la correspondiente clave del arraylist relacional para que identifique
que mostrar*/ 
$mayoresDeEdad = filtrarMayores($personas);

foreach ($mayoresDeEdad as $p) {
    echo $p["nombre"] . " tiene " . $p["edad"] . " años.<br>";
}

?>