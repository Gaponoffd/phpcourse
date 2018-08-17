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
$day = -4;
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
    case $day<1:
    case $day<7:
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

echo 'Car: BMW <br>';
print_r($auto[0]["model"].' '.$auto[0]["speed"].' '.$auto[0]["doors"].' '.$auto[0]["year"]);
echo '<br>';
echo 'Car: toyota <br>';
print_r($auto[1]["model"].' '.$auto[1]["speed"].' '.$auto[1]["doors"].' '.$auto[1]["year"]);
echo '<br>';
echo 'Car: opel <br>';
print_r($auto[2]["model"].' '.$auto[2]["speed"].' '.$auto[2]["doors"].' '.$auto[2]["year"]);
echo '<br>','<br>';

//Задание 6
for ($i=1; $i<=10; $i++) {
    echo'<tr>';
    echo '<br>';
    for ($j=1; $j<=10; $j++) {
        $s=$j*$i;
        if (($s)%2==0) {
            echo'<td>'."($s)".'</td>';
        } elseif (($s)%2!=0) {
            echo'<td>'."[$s]".'</td>';
        }
    }
}
