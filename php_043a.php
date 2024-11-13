<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edades de las personas</h2>
    <?php
    //Declaramos un array que almacene las edades de tres personas
    $edad = ["Pedro" => 35, "Juan" => 37, "Ana" => "25"];

    foreach ($edad as $nombre => $anos) {
        echo "Nombre: ".$nombre.". Edad: ". $anos . " años.<br>";

    }
    //imprimir todo el array
    echo "<h3> Array completo </h3>";
    echo "<pre>";
    print_r($edad);
    echo "<pre>";
    ?>
</body>
</html>

