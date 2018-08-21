<?php
//Задание 1
$name = 'Dima';
$age = '29';
echo 'Меня зовут: '.$name;
echo '<br>';
echo 'Мне '.$age.' лет';
echo '<br>';
echo '“!|\/’”\\';
echo '<br>','<br>';

//Задание 2
const PICTURES = 80;
const MARKER = 23;
const PENCIL = 40;
const COLOR = PICTURES-MARKER-PENCIL;
echo 'Всего рисунков: ' . PICTURES;
echo '<br>';
echo 'Фломастером: ' . MARKER;
echo '<br>';
echo 'Карандашом: ' . PENCIL;
echo '<br>';
echo 'Красками: ' . COLOR;
echo '<br>','<br>';

//Задание 3
$age = 50;
if ($age>=18 & $age<=65) {
    echo 'Вам еще работать и работать';
} elseif ($age>65) {
    echo 'Вам пора на пенсию';
} elseif ($age>=1 & $age<=17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}
echo '<br>','<br>';

//Задание 4
$day = 8;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
echo '<br>','<br>';

//Задание 5
$auto = [
    $bmw = [
        "model" => "X5",
        "speed" => 120,
        "doors" => 5,
        "year" => "2015"
    ],
    $toyota  = [
        "model" => "corola",
        "speed" => 130,
        "doors" => 5,
        "year" => "2014"
    ],
    $opel  = [
        "model" => "astra",
        "speed" => 110,
        "doors" => 3,
        "year" => "2013"
    ]
];

foreach ($auto as $car) {
    echo "Car: " .$car["model"]. "<br>";
    echo $car["model"].' '.$car["speed"].' '.$car["doors"].' '.$car["year"];
    echo "<br>";
}

//Задание 6
echo '<table cellspacing="0" border="1">';
for ($i=1; $i<=10; $i++) {
    echo'<tr>';
    for ($j=1; $j<=10; $j++) {
        $s=$j*$i;
        if ($s % 2 == 0) {
            echo "<td>".$i."x".$j."="."($s)"."</td>";
        } else {
            echo "<td>".$i."x".$j."="."[$s]"."</td>";
        }
    }
    echo'</tr>';
}
echo '</table>';
