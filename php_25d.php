<?php
//Variable centinela y variable contador
//Programa que escribe números del uno al 500 y se repite hasta que aparece un múltiplo de 7. Pero como mucho se repite 8 veces.

$salir = false; //variable centinela
$i = 1; //contador

while ($salir == false && $i<8) {
    $num = rand(1,500);
    echo ($num. "<br>");
    $i++;
    $salir = ($num%7 == 0);
    // if (($num%7) == 0) {
    //     $salir = true;
    // }
}