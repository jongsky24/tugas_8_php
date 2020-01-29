<?php
echo "<table>";
for ($i = 1; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        echo "<td>";
        for ($a = 0; $a <= 10; $a++) {
            for ($b = 10; $b > $a; $b--) {
                echo '_';
            }
            for ($c = 0; $c < 2 * $a; $c++) {
                echo 'x';
            }
            echo "<br/>";
        }
        for ($a = 1; $a <= 10; $a++) {
            for ($b = 0; $b < $a; $b++) {
                echo '_';
            }
            for ($c = 20; $c > 2 * $a; $c--) {
                echo 'x';
            }
            echo "<br/>";
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
