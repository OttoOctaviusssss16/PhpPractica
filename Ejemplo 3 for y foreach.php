<?php
//Ciclo For
//Ciclo que se recorre constantemente mostrando el cambio dado dentro del ciclo, hasta que la condicion se altera
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i <br>";
}

//Ciclo foreach
//Ciclo que recorre una Arraylist elemento por elemento, devolviendo un resultado por cada elemento
$frutas = ["manzana", "banana", "pera"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}
?>
