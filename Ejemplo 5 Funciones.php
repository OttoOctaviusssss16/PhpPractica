<?php
//Function
//Las funciones permiten recibir párametros y reciclar código sin necesidad de hacer la aplicación más pesada e ineficaz
function saludar4($nombre) {
    return "Hola, $nombre!";
}

echo saludar4("Toto");

//Function con valores por default
/*Las funciones con valores default tienen una contingencia en caso de que no se ingrese un valor al parametro, es decir que
tienen un valor por defecto, si se ingresa un valor, este se sobreescribe sobre el default*/
function saludar2($nombre = "invitado") {
    echo "Hola, $nombre!";
}

saludar2(); // Muestra: Hola, invitado!

//REGLA IMPORTANTE ¡RECORDAR!
//Los valores asignados en default tienen que ir al final de la lista de párametros, si no da error
function saludar3($nombre, $edad = 18) {
    echo "$nombre tiene $edad años.";
}

//En su defecto, puedo usar todos los parámetros con un default y ahí si no hay conflicto
function saludar1($nombre = "invitado", $edad = 18, $pais = "Uruguay") {
    echo "Hola, $nombre. Tenés $edad años y vivís en $pais.<br>";
}

saludar1();                             // Usa todos los valores por defecto
saludar1("Toto");                       // Cambia solo el nombre
saludar1("Ana", 25);                   // Cambia nombre y edad
saludar1("Luis", 35, "Argentina");     // Cambia todo

/*Se puede definir una función sin parametros si asignamos los valores dentro de la función, pero la variable va a vivir mientras
se ejecute la función, fuera de ella no existe*/
function saludar() {
    $nombre = "Toto";
    echo "Hola, $nombre!";
}

saludar(); // Muestra: Hola, Toto!

//También puedo hacer mixtas, que reciban parámetros externos y cree los suyos mismos
function saludarConHora($nombre) {
    $hora = date("H");
    echo "Hola $nombre, son las $hora horas.";
}

saludarConHora("Toto");

?>
