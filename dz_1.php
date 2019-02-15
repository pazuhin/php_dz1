<?php
/**Задание 1*/
$name = 'Andrey';
$age = '28';
echo 'My name is : ' . $name . '<br>';
echo "Мне $age лет <br>";
echo "\"!|\/'\"\\";
echo "<hr>";
/**Задание 2*/
const TOTAL_COUNT_PIC = 80;
const PEN_PIC = 23;
const PENCIL_PIC = 40;
const PAINT_PIC = TOTAL_COUNT_PIC - PEN_PIC - PENCIL_PIC;
echo 'Рисунков, выполненных красками : ' . PAINT_PIC . '<br>';
echo "<hr>";
/**Задание 3*/
$age = rand(-50, 100);
echo $age . "<br>";
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}
echo "<hr>";
/**Задание 4*/
$day = rand(0, 10);
echo $day . "<br>";
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}
echo "<hr>";
/**Задание 5*/
$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
$toyota = ['model' => 'corolla', 'speed' => 150, 'doors' => 5, 'year' => 2017];
$opel = ['model' => 'astra', 'speed' => 130, 'doors' => 3, 'year' => 2012];
$array = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
foreach ($array as $name => $item) {
    echo 'Car ' . $name . "<br>";
    echo $item['model'] . ' ' . $item['speed'] . ' ' . $item['doors'] . ' ' . $item['year'] . "<br>";
}
echo "<hr>";
?>
/**Задание 6*/
<table style="border-collapse: collapse;">
    <?php
    $row = 11;
    $col = 11;
    for ($i = 1; $i < $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j < $col; $j++) {
            if (($i % 2) == 0 && ($j % 2) == 0) {
                echo '<td style="border: 1px solid; text-align: center; padding: 5px">' . "(" . $j * $i . ")" . '</td>';
            } elseif (($i % 2) != 0 && ($j % 2) != 0) {
                echo '<td style="border: 1px solid; text-align: center; padding: 5px">' . "[" . $j * $i . "]" . '</td>';
            } else {
                echo '<td style="border: 1px solid; text-align: center; padding: 5px">' . $j * $i . '</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>

