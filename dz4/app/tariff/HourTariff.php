<?php

namespace dz4\app\tariff;

abstract class HourTariffAbstr
{
    abstract public function hourFun($varKlm, $varHur, $varMin, $varAge);
}

class HourTariff extends HourTariffAbstr
{
    public function hourFun($varKlm, $varHur, $varMin, $varAge)
    {
        if ($varMin <= 60 && $varMin > 0) {
            $varMin = 1;
        }
        $sum = $varKlm * 0 + $varHur * 200 + $varMin * 200;

        if ($varAge>=18 && $varAge<=21) {
            $sum = $sum*1.1;
        }
        return $sum;
    }
}
