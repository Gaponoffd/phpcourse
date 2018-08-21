<?php

///Задание 1
function task1($paragraph1, $paragraph2 = false)
{
    $var = "";
    if ($paragraph2) {
        foreach ($paragraph1 as $string) {
            $var .= $string . " ";
        }
    } else {
        foreach ($paragraph1 as $string) {
            $var .= "<p>$string</p>";
        }
    }
    return $var;
};

///Задание 2
function task2($arg, $numbers)
{
    $data = null;
    foreach ($numbers as $value) {
        switch ($arg) {
            case "+":
                if (empty($data)) {
                    $data = $value;
                } else {
                    $data += $value;
                }
                break;
            case "-":
                if (empty($data)) {
                    $data = $value;
                } else {
                    $data -= $value;
                }
                break;
            case "*":
                if (empty($data)) {
                    $data = $value;
                } else {
                    $data *= $value;
                }
                break;
            case "/":
                if (empty($data)) {
                    $data = $value;
                } else {
                    $data /= $value;
                }
                break;
        }
    }
    return $data;
}

///Задание 3
function task3($columns, $rows)
{
    echo '<table cellspacing="0" border="1">';
    if (!is_int($columns) || !is_int($rows)) {
        echo "Задайте целое число";
        return null;
    }
    if ($columns == 0 && $rows == 0) {
        echo "Число не должно равняться нулю";
        return null;
    }
    for ($i=1; $i<=$columns; $i++) {
        echo'<tr>';
        for ($j=1; $j<=$rows; $j++) {
            $s=$j*$i;
            echo "<td>".$i."x".$j."=".$s."</td>";
        }
        echo'</tr>';
    }
    echo '</table>';
}

///Задание 4
function task4()
{
    echo date("d.m.Y H:i");
}

function task5($date)
{
    echo strtotime($date);
}

///Задание 5
function task6()
{
    $string = "Карл у Клары украл Кораллы";
    echo str_replace("К", "", $string);
}

function task7()
{
    $str = "Две бутылки лимонада";
    echo str_replace("Две", "Три", $str);
}

///Задание 6
function task8($name)
{
    $string = "Hello again!";
    $test = fopen($name, "w+");
    fwrite($test, $string);
    echo file_get_contents($name);
}
