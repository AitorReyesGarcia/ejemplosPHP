<!-- Poner bordes a las tablas anteriores -->
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<table style='border : 2px solid green; border-collapse:collapse; margin: 3px auto'><tr><th colspan= '5'>Tabla del $i</th></tr>";
    for ($j = 1; $j <= 10; $j++) {
        $res = $i * $j;
        echo "<tr>";
            echo "<td style='border : 1px solid green; width : 2.5vw;'>$i</td>";
            echo "<td style='border : 1px solid green; width : 2.5vw;'>x</td>";
            echo "<td style='border : 1px solid green; width : 2.5vw;'>$j</td>";
            echo "<td style='border : 1px solid green; width : 2.5vw;'>=</td>";
            echo "<td style='border : 1px solid green; width : 2.5vw;'>$res</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

