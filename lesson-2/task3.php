<?php
echo "<h3>Задание №3</h3>";
echo "<p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.<br></p>";
function sum($a,$b) {
return $a+$b;
}
function res($a,$b) {
    return $a-$b;
}
function gen($a,$b) {
    return $a*$b;
}
function seg($a,$b) {
    return $a/$b;
}
echo "<h4>Ответ</h4>";
$a = 10;
$b = 20;
echo 'Пусть $a=' . $a . ', $b=' . $b . ', тогда <br>';
echo '$a+$b= ' . sum($a,$b) . ', $a-$b= ' . res($a,$b) . ', $a*$b= ' . gen($a,$b) . ', $a/$b= ' . seg($a,$b) . '<br>';
