<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
class pricingMOD {
    function PricingModule($gallonsReq, $state, $historyDiscount) {
        $gallonAmountCharge = .03;
        if ($gallonsReq > 1000) {
            $gallonAmountCharge = .02;
        }
        $locationFactor = .04;
        if ($state == 'TX')  {
            $locationFactor = .02;
        }
        $margin = ($locationFactor - $historyDiscount + $gallonAmountCharge + .1) * 1.5;
        $gallonP = 1.5 + $margin;
        $totalP = $gallonsReq * $gallonP;
        $totalP = $totalP.toFixed(2);
        return $totalP;
    }
}
