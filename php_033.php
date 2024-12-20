<!-- función count($array): cuenta el número de elementos -->
<?php
$ciudades = ["Talavera de la Reina", "Toledo", "CR", "Albacete", "Guadalajara"];

// Imprimir el array con un for
echo "<br><trong>Impresión del array con bucle for: </strong></br>";
for ($i = 0; $i < count($ciudades); $i++) {
    if ($i >= 1) {
        echo "Posición ".$i. "º: ".$ciudades[$i]. "<br>";
    } else {
        echo "Posición $i: ". $ciudades[$i]. "<br>";
    }
}

//Imprimir el array con un bucle foreach
//Para cada elemento del vector ciudades, almacena su valor en la variable $nombre y en cada iteración icrementa la posición.
foreach ($ciudades as $nombre) { 
    echo $nombre. "<br>";
}

//imprimir el array con print_r
echo "<h3>Impresión del array completo con print_r</h3>";
print_r($ciudades);

//mostrar información del array con var_dump
echo "<h3>Información detallada con var_dump </h3>";
var_dump($i); //información de la variable contador del bucle for.
echo "<br>";
var_dump($ciudades);
echo "<br>";
