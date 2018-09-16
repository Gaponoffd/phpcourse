<?php

namespace dz4\app\tariff;

class StudentTariff
{
    public function studentFun($varKlm, $varMin, $varAge)
    {
        if (!is_numeric($varAge)) {
            $sum = 'Введите число';
        } elseif ($varAge>25) {
            $sum = 'Возраст водителя не может быть более 25 лет';
        } elseif ($varAge<=25) {
            $sum = $varKlm*4 + $varMin*1;
        }
        return $sum;
    }
}
