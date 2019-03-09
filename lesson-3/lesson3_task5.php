<?
echo "<h3>Задание №5</h3>";
echo "<p><b>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</b></p>";
echo "<h4>Ответ</h4>";
function translit($text){
$spacing= [
    ' '];
$line=[
    '_'];
    return str_replace($spacing, $line, $text);
    }
echo translit('произвольный текст');


