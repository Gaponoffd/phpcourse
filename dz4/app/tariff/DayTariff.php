<?php

namespace dz4\app\tariff;

abstract class DayTariffAbstr
{
    abstract public function dayFun($varKlm, $varHur, $varMin, $varAge);
}
class DayTariff extends DayTariffAbstr
{
    public function dayFun($varKlm, $varHur, $varMin, $varAge)
    {
        if ($varHur<24 && $varHur>0) {
            $varHur=1;
        } elseif ($varHur>=25) {
            $varHur=2;
        } elseif ($varHur==24 && $varMin<=30) {
            $varHur = 1;
        } elseif ($varHur==24 && $varMin>30) {
            $varHur = 2;
        }
        $sum = $varKlm*1 + $varHur*1000 + $varMin*0;

        if ($varAge>=18 && $varAge<=21) {
            $sum = $sum*1.1;
        }
        return $sum;
    }
}
