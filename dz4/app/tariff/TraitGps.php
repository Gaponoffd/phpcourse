<?php
namespace dz4\app\tariff;

trait TraitGps
{
    public function gpsFun($varGps)
    {
        if ($varGps=='on') {
            $gpsPrice = 15;
            return $gpsPrice;
        }
    }
}
