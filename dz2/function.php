<?php

///Задание 1
function task1($paragraph, $bool = false)
{
    $var = "";
    if ($bool) {
        foreach ($paragraph as $string) {
            $var .= $string . " ";
        }
    } else {
        foreach ($paragraph as $string) {
            $var .= "<p>$string</p>";
        }
    }
    return $var;
}

///Задание 2
function task2()
{
    $var_array = func_get_args();
    $num = count($var_array);
    $res = null;
    for ($i=1; $i<$num; $i++) {
        switch ($var_array[0]) {
            case "+":
                if (empty($res)) {
                    $res =  $var_array[1];
                } else {
                    $res += $var_array[$i];
                }
                break;
            case "-":
                if (empty($res)) {
                    $res =  $var_array[1];
                } else {
                    $res -= $var_array[$i];
                }
                break;
            case "*":
                if (empty($res)) {
                    $res =  $var_array[1];
                } else {
                    $res *= $var_array[$i];
                }
                break;
            case "/":
                if (empty($res)) {
                    $res =  $var_array[1];
                } elseif ($var_array[$i] == 0) {
                    echo "На ноль делить нельзя";
                    $res = null;
                    return;
                } else {
                    $res /= $var_array[$i];
                }
                break;
        }
    }
    echo $res;
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

function task4_1($date)
{
    echo strtotime($date);
}

///Задание 5
function task5()
{
    $string = "Карл у Клары украл Кораллы";
    echo str_replace("К", "", $string);
}

function task5_1()
{
    $str = "Две бутылки лимонада";
    echo str_replace("Две", "Три", $str);
}

///Задание 6
function task6($name)
{
    $string = "Hello again!";
    $test = fopen($name, "w+");
    fwrite($test, $string);
    echo file_get_contents($name);
}
