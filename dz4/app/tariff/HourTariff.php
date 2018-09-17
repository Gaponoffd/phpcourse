<?php

namespace dz4\app\tariff;

class HourTariff
{
    public function hourFun($varKlm, $varHur, $varMin)
    {
        if ($varMin <= 60 && $varMin > 0) {
            $varMin = 1;
        }
        $sum = $varKlm * 0 + $varHur * 200 + $varMin * 200;
        return $sum;
    }
}
