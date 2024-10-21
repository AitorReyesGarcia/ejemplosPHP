<?php 
    //define("CIUDAD");
    if (defined("CIUDAD")) {
        print ("La ciudad es: ".CIUDAD);
    } else {
        print ("La constante ciudad no está definida");
    }
?>