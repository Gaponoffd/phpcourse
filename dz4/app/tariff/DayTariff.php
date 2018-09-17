<?php

namespace dz4\app\tariff;

class DayTariff
{
    public function dayFun($varKlm, $varHur, $varMin)
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
        return $sum;
    }
}
