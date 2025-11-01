<?php

namespace App\Services\Pricing;

use App\Services\Pricing\Contracts\PricingStrategyInterface;

class DefaultPricingStrategy implements PricingStrategyInterface
{
    public function compute(float $basePrice, ?float $discount): float
    {
        $discount = $discount ?? 0.0;
        $discounted = $basePrice - ($basePrice * ($discount / 100));
        return max(0.0, round($discounted, 2));
    }
}



