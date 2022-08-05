<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

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
        //round to 2 decimal places
        $totalP = round($totalP, 2);
        return $totalP;
    }
}

class ExampleTest extends TestCase
{
    public function testPricing1() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 1;
        $state = 'TX';
        $historyDiscount = .01;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(1.71, $totalP);
    }
    public function testPricing2() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 12342;
        $state = 'TX';
        $historyDiscount = .01;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(20919.69, $totalP);
    }
    public function testPricing3() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 3277;
        $state = 'TX';
        $historyDiscount = 0;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(5603.67, $totalP);
    }
    public function testPricing4() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 327712;
        $state = 'TX';
        $historyDiscount = 0;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(560387.52, $totalP);
    }
    public function testPricing5() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 3277;
        $state = 'CA';
        $historyDiscount = 0;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(5701.98, $totalP);
    }
    public function testPricing6() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 327712;
        $state = 'CA';
        $historyDiscount = 0;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(570218.88, $totalP);
    }
    public function testPricing7() {
        $pricingMOD = new pricingMOD();
        $gallonsReq = 327712;
        $state = 'CA';
        $historyDiscount = .01;
        $totalP = $pricingMOD->PricingModule($gallonsReq, $state, $historyDiscount);
        $this->assertEquals(565303.20, $totalP);
    }
}
