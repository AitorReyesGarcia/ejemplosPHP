<!-- Transformamos el siguiente for en un bucle 
WHILE: tiene la condición antes de entrar en el bucle, por lo tanto, CUIDADO! PUEDE QUE NUNCA SE LLEGUE A ENTRAR.
WHILE es un bucle que se ejecuta mientras se cumpla una condición. No lleva inicialización, por lo tanto hay que hacerlo fuera del bucle.
WHILE no lleva incremento/decremento, hay que hacerlo dentro del bucle.
-->

<?php
// for ($i = 1; $i <= 100; $i++) {
//     echo $i." ";
//}

$i = 1;
while ($i <= 100) {
    echo $i." ";
    $i++;
}
    

// DO ... WHILE: la condición se ejecuta al final. !OJO¡ AL MENOS SE EJECUTA UNA VEZ EL BUCLE.
echo "<br>Con bucle DO <br>";
$j = 1;
do {
    echo $j." ";
    $j++;
} while ($j <= 100);

echo "<br>Con bucle DO e incremento antes de imprimir. Ojo con la condición<br>";
$j = 0;
do {
    $j++;
    echo $j." ";
} while ($j < 100);