<?php
echo "<h3>Задание №1</h3>";
echo "<p>Объявить две целочисленные переменные \$a и \$b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: <br>
<br>
если \$a и \$b положительные, вывести их разность;<br>
если \$а и \$b отрицательные, вывести их произведение;<br>
если \$а и \$b разных знаков, вывести их сумму;<br>
<br>
ноль можно считать положительным числом.</p>";
$a = -16;
$b = -10;
echo 'Текущие значения: $a=' . $a . ', $b=' . $b . '<br>';
echo 'Результат: ';
    if (($a < 0 && $b >= 0) || ($b < 0 && $a >= 0)) {
        echo $a + $b ;
        }
    else
        if ($a >= 0 && $b >= 0) {
            echo $a - $b;
            }
        else {
            echo $a * $b;
            }
