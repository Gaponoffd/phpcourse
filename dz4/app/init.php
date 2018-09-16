<?php

use dz4\app\tariff\BasisTariff;
use dz4\app\tariff\HourTariff;
use dz4\app\tariff\StudentTariff;

echo '<pre>';
require_once "./tariff/HourTariff.php";
require_once "./tariff/BasisTariff.php";
require_once "./tariff/StudentTariff.php";

$varMin = $_POST['minutes'];
$varKlm = $_POST['kilometers'];
$varAge = $_POST['age'];
$varTrf = $_POST['tariff'];

print_r($_POST);
echo '<br/>';

//function implementTariff($fig)
//{
//    if ($fig instanceof Figure) {
//        $fig->draw();
//    } else {
//        echo 'Неизвестная фигура';
//    }
//    echo PHP_EOL;
//}

if ($varTrf=='base') {
    $basisTariff = new BasisTariff();
    echo $basisTariff -> basisFun($varKlm, $varMin);
} elseif ($varTrf=='hourly') {
    $hourTariff = new HourTariff();
    echo $hourTariff -> hourFun($varKlm, $varMin);
} elseif ($varTrf=='student') {
    $studentTariff = new StudentTariff();
    echo $studentTariff -> studentFun($varKlm, $varMin, $varAge);
} else {
    echo 'Неизвестный тариф';
}
