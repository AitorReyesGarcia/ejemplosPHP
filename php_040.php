<!-- ARRAYS ASOCIATIVOS: El índice (key) de cada elemento es una clave personalizada que no tiene por qué ser numérica -->

<?php
//ARRAY INDEXADO. Sus claves son 1 2 3 4 5 6
$semana = ["lunes", "martes", "miércoles", "jueves", "viernes"];

//muestro la clave y el valor de un array indexado
foreach ($semana as $clave => $valor) {
    echo "$clave => $valor<br>";
}

// ARRAY ASOCIATIVO de edades. Sus claves serán Juan, Ana, Luis y Marta.
$edades =  ["Juan" => 25, "Ana" => 30, "Luis" => 22, "Marta" => 28];
echo "<h3>Edades de las personas: </h3>";
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años. <br>";
}