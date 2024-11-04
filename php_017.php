<?php
//Operadores lógicos
//TRUE equivale a 1 y FALSE equivale a 0
//AND (&& 0 and): devuelve true si ambas expresiones on verdaderas.
//OR (|| o or): devuelve true si al menos una de las expresiones es verdadera.
//NOT (!): Invierte el valor lógico de una expresión.

$a = 5; //true porque es distinta de 0
$b = 0; //false
$c = 10; //true

//AND lógico (%%). Devuelve true si ambos operadores son ciertos
echo "AND lógico (&&): <br>";
//echo (int)($a && $b) ."<br>";
//echo ($a && $c) ."<br>";
if ($a && $b) {
    echo "Verdadero <br>";
} else {
    echo "Falso <br>";
}

$result = ($a && $b) ? "Es true <br><br>" : "Es false <br><br>";
echo $result;

//OR (||). Es true si al menos uno de los operandos es true
echo "OR lógico (||): <br>";
echo ($a || $b) . "<br>";
echo ($a || $c) . "<br>";
echo (int)($b || 0) ."<br>";

//NOT (!). Invierte el valor lógico
echo "NOT lógico (!): <br>";
echo $a."<br>";
echo (int)(!$a)."<br><br>";

//Para casa: utilizar if para || y para !.
if ($a || $b) {
    echo "Verdadero <br><br>";
} else {
    echo "Falso <br><br>";
}
($a || $b) ? "Es true <br><br>" : "Es false <br><br>";

if (!$a) {
    echo "Verdadero <br>";
} else {
    echo "Falso <br>";
}
(!$a) ? "Es true <br><br>" : "Es false <br><br>";