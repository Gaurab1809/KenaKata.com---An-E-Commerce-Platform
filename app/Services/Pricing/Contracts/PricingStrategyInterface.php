<?php

namespace App\Services\Pricing\Contracts;

interface PricingStrategyInterface
{
    public function compute(float $basePrice, ?float $discount): float;
}



