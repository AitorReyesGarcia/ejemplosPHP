<!-- Igual que el anterior pero comprobando que existe la ciudad en dicha posición -->
 <?php
 $ciudades = ["Talavera de la Reina", "Toledo", "Ciudad Real", "Albacete", "Guadalajara"];
 if (isset($ciudades[8])) { //ver php_012.php
    echo "$ciudades[1]";
 } else {
    echo "La ciudad está en el índice especificado";
 }