<?php
echo "<h3>Задание №4</h3>";
echo "<p>Реализовать функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, \$operation), где \$arg1, \$arg2 – значения аргументов, \$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).<br></p>";
function mathOperation($arg1,$arg2,$operation) {
    $result=true;
    switch ($operation) {
        case '+':
            $result=$arg1+$arg2;
            break;
        case '-':
            $result=$arg1-$arg2;
            break;
        case '*':
            $result=$arg1*$arg2;
            break;
        case '/':
            $result=$arg1/$arg2;
            break;
    }
    return $result;
}
$arg1=5;
$arg2=2;
$operation='+';
echo 'Первый аргумент: ' . $arg1 . '<br>';
echo 'Второй аргумент: ' . $arg2 . '<br>';
echo 'Выбранная операция: ' . $operation . '<br>';
echo "<h4>Ответ</h4>";
echo mathOperation(5, 2, '+');