<!--Hacer un programa que muestre las tablas de multiplicar. Debe haber un encabezado h3 como título de cada tabla (html dentro de php: echo "<h3>"). Si quiero insertar HTML dentro de PHP uso echo o print-->

<?php
//BUCLES ANIDDOS: FOR dentro de otro FOR. 
for ( $i = 1 ; $i <= 10 ; $i++ ) {
    $almacont = "";
    echo "<h3>Tabla del $i</h3>";
    for ( $j = 0 ; $j <= 10 ; $j++ ) {
        $cont = "$i por $j da ".($i*$j)."<br>";
        $almacont = "$almacont $cont";
    }
    echo $almacont;
    echo "<br>";
}