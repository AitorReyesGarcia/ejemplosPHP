<?php
//CADENAS. Su posición inicial es 0
//FUNCIONES:
//strlen(): Devuelve la posición de una cadena
//strtolower(): Convierte toda la cadena a minúsculas
//strtoupper(): Convierte toda la cadena a mayúsculas
//strcmp(): Compara dos cadenas (sensible a mayúsculas y minúsculas). Devuelve 0 si son iguales
//strcasecmp(): Compara dos cadenas (insensible a mayúsculas y minúsculas). Devuelve 0 si son iguales
//substr(): Extraer una parte de la cadena
//str_repeat(): Repite una cadena el número de veces que se le expecifica
//trim(): eliminar los espacios en blanco al principio y al final de una cadena
//str_word_count()
//strrev(): Invierte una cadena
//strpos(): Busca un texto dentro de una cadena y devuelve su posición
//str_replace(): Reemplaza unos caracteres por otros

//Asignar "Hola Mundo!" a una variable
$texto = "Hola Mundo";

//Contar el número de palabras
echo "Número de palabras de $texto: ".str_word_count($texto)."<br>";

//Buscar el texto "Mundo" dentro de la cadena
echo "Posición de 'Mundo': ".strpos($texto, 'Mundo')."<br>";

//Reemplazar 'Mundo' por 'Dolly'
echo "Reemplazo de 'Mundo' por 'Dolly' => ".str_replace("Mundo", "Dolly", $texto)."<br>";

//Longitud de una cadena
echo "Longitud de la cadena '$texto': ".strlen($texto)."<br>";

//Pasar a minúsculas
echo "Cadena en minúsculas es: ".strtolower($texto)."<br>";

//Pasar a mayúsculas
echo "Cadena $texto en mayúsculas: ".strtoupper($texto)."<br><br>";

//Comparar cadenas sensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ".strcmp("Hola", "hola")."<br>";

//Comparar cadenas insensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ".strcmp("Hola", "hola")."<br>";

//Extraer cinco caracteres a partir del carácter 5
echo "Subcadena de tres '$texto' a partir del quinto: ".substr($texto, 5, 3)."<br>";
echo "Subcadena de '$texto' a partir del quinto carácter:  ".substr($texto, 5, 3)."<br>";

//repetir una cadena
echo "repetir 'Hola' tres veces: ".str_repeat("Hola ", 3)."<br>";

//Invertir la cadena
echo "La cadena $texto invertida es: ".strrev($texto)."<br>";

//Eliminar espacios en blanco
$texto2= "              Hola Mundo       ";
echo "Cadena con espacios eliminados: " .trim($texto2)."<br>";


