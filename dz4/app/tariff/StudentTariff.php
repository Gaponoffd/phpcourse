<?php

namespace dz4\app\tariff;

abstract class StudentTariffAbstr
{
    abstract public function studentFun($varKlm, $varHur, $varMin, $varAge);
}
class StudentTariff extends StudentTariffAbstr
{
    public function studentFun($varKlm, $varHur, $varMin, $varAge)
    {
        if ($varAge>25) {
            $sum = 'Возраст водителя не может быть более 25 лет';
            return $sum;
        } elseif ($varAge<=25) {
            $sum = $varKlm*4 + + $varHur*60*1 + $varMin*1;
        }

        if ($varAge>=18 && $varAge<=21) {
            $sum = $sum*1.1;
        }
        return $sum;
    }
}
