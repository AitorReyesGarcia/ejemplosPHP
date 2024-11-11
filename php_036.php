<!-- Agregar elementos a un array en cualquier orden.
Al usar [] sin un índice específico, PHP asigna el siguiente índice mayor disponible automáticamente -->

<?php
$semana[] = "lunes";
$semana[] = "martes";
$semana[] = "miércoles";
$semana[] = "jueves";
$semana[] = "viernes"; 
$semana[] = "sábado";
$semana[] = "domingo"; 

echo "<pre>";
print_r($semana);
echo "</pre>";

for ($i=0; $i < count($semana); $i++) {
    echo $semana[$i]."<br>";
}
echo "<br>";
foreach ($semana as $dia) {
    echo $dia. "<br>";
}