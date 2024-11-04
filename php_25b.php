<!-- Imprimir del 10 al 200 de 10 en 10 con for, do y while -->
<?php
echo "Bucle for <br>";
for ($i = 1;$i <= 200; $i++) {
    if ($i%10 == 0) {
        echo $i. "<br>";
    }
}

echo "<br> Bucle do while <br>";
$j = 1;
do {
    if ($j%10 == 0) {
        echo $j. "<br>";
    }
    $j++;
} while ($j <= 200);