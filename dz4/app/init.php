<?php

use dz4\app\tariff\BasisTariff;
use dz4\app\tariff\DayTariff;
use dz4\app\tariff\HourTariff;
use dz4\app\tariff\StudentTariff;

echo '<pre>';
require_once "./tariff/HourTariff.php";
require_once "./tariff/BasisTariff.php";
require_once "./tariff/DayTariff.php";
require_once "./tariff/StudentTariff.php";

require_once "./tariff/TraitGps.php";

$varHur = $_POST['hour'];
$varMin = $_POST['minutes'];
$varKlm = $_POST['kilometers'];
$varAge = $_POST['age'];
$varTrf = $_POST['tariff'];

$varGps = $_POST['gps'];
$varDrv = $_POST['driver'];

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

if ($varAge>=18 && $varAge<=65) {
    if ($varTrf == 'base') {
        $basisTariff = new BasisTariff();
        echo $basisTariff->basisFun($varKlm, $varHur, $varMin, $varAge);

        echo $basisTariff->gpsFun($varGps);

    } elseif ($varTrf == 'hourly') {
        $hourTariff = new HourTariff();
        echo $hourTariff->hourFun($varKlm, $varHur, $varMin, $varAge);
    } elseif ($varTrf == 'dayli') {
        $dayTatiff = new DayTariff();
        echo $dayTatiff->dayFun($varKlm, $varHur, $varMin, $varAge);
    } elseif ($varTrf == 'student') {
        $studentTariff = new StudentTariff();
        echo $studentTariff->studentFun($varKlm, $varHur, $varMin, $varAge);
    } else {
        echo 'Неизвестный тариф';
    }
} else {
    echo 'Возраст водителя должен быть от 18 до 65';
}


