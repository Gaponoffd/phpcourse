<?php
namespace dz4\app\tariff;

trait TraitGps
{

    public function gpsFunBasis($varKlm, $varHur, $varMin, $varAge)
    {
        $sum = $varKlm*10 + $varHur*60*3 + $varMin*3*15;
        if ($varAge>=18 && $varAge<=21) {
            $sum = $sum*1.1;
        }

        return $sum;
    }
}
