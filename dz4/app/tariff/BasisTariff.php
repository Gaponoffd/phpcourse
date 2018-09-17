<?php

namespace dz4\app\tariff;

require_once "TraitGps.php";

abstract class BasisTariffAbstr
{
    abstract public function basisFun($varKlm, $varHur, $varMin, $varAge);
}

class BasisTariff extends BasisTariffAbstr
{
    use TraitGps;
    public function basisFun($varKlm, $varHur, $varMin, $varAge)
    {
        $sum = $varKlm*10 + $varHur*60*3 + $varMin*3;
        if ($varAge>=18 && $varAge<=21) {
            $sum = $sum*1.1;
        }

        return $sum;
    }
}
