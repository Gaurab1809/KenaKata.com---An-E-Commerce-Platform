<?php

namespace App\Services\Pricing;

use App\Services\Pricing\Contracts\PricingStrategyInterface;
use App\Services\Pricing\Legacy\LegacyDiscountCalculator;

class LegacyPricingAdapter implements PricingStrategyInterface
{
    private LegacyDiscountCalculator $calculator;

    public function __construct(LegacyDiscountCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function compute(float $basePrice, ?float $discount): float
    {
        return $this->calculator->calculatePrice($basePrice, $discount);
    }
}





