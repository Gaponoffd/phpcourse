<?php

namespace dz4\app\tariff;

class HourTariff
{
    public function hourFun($varKlm, $varMin)
    {
        if ($varMin <= 60) {
            $varMin = 1;
        } elseif ($varMin > 60 && $varMin <= 120) {
            $varMin = 2;
        }
        $sum = $varKlm * 0 + $varMin * 200;
        return $sum;
    }
}
