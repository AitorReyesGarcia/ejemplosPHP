<!-- Si se colocase sobre un tablero de ajedrez, lo suficientemente grande, un grano de trigo en el primer casillero, dos en el segundo, cuatro en el tercero y así sucesivamente, doblando la cantidad de granos en cada castilla ¿cuántos granos de trigo habría en el tablero al final -->
<?php
$pot = 2;
for ($i=1;$i<=64;$i++) {
    echo "<h3>Casilla $i</h3>";
    if ($i>=3) {
        (double)$pot = $pot*$pot;
        echo $pot;
    } elseif ($i>=2) {
        echo $pot;
    } else {
        echo $i;
    }
}