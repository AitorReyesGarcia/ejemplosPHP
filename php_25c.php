<!-- ejercicio con BUCLE CENTINELA. Hay una variable que me dice si nos salimos del bucle al cumplirse una condición
 
Programa que escriba números aleatorios entre uno y quinientos y se pare cuando el número sea múltiplo de 7-->

<?php
$salir = false;

while (!$salir) {
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num%7 == 0); //el centinela vale verdadero si el múltiplo de 7.
}