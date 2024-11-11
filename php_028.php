<!-- Haz una tabla con las 5 primeras potencias de los diez primeros números -->
<?php
for ($i=1;$i<=10;$i++) {
    echo "Potencias del $i<br>";
    $pont = $i*$i;
    echo $pont. "<br>";
    for ($j=1;$j<=4;$j++) {
       (double)$pont = $pont*$pont;
       echo $pont."<br>";
    }
    echo "<br>";
}