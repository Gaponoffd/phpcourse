<?php

namespace dz4\app\tariff;

class StudentTariff
{
    public function studentFun($varKlm, $varHur, $varMin, $varAge)
    {
        if (!is_numeric($varAge)) {
            $sum = 'Введите ваш возраст';
        } elseif ($varAge>25) {
            $sum = 'Возраст водителя не может быть более 25 лет';
        } elseif ($varAge<=25) {
            $sum = $varKlm*4 + + $varHur*60*1 + $varMin*1;
        }
        return $sum;
    }
}
