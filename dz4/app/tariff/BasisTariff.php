<?php

//namespace tariff;
//
//abstract class Tariff
//{
//    abstract public function basisFun();
//}


namespace dz4\app\tariff;

class BasisTariff
{
    public function basisFun($varKlm, $varMin)
    {
        $sum = $varKlm*10 + $varMin*3;
        return $sum;
    }
}
