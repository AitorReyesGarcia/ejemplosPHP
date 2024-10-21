<?php 
    //(int)var: convertir una variable a entero
    // el operador "=" es asignar
    // el operador "==" es igual
    $var1 = 5.9;
    $var2 = (int)$var1;
    //echo $var1."<br>";
    echo '$var1 <br>'; //las comillas simples no detectan el valor de una variable
    echo "$var1 <br>"; //las comillas dobles si detectan el valor de la variable
    echo $var2;
?>