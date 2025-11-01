<?php

namespace App\Services\Pricing\Legacy;

class LegacyDiscountCalculator
{
    public function calculatePrice(float $basePrice, ?float $discountPercent): float
    {
        $discountPercent = $discountPercent ?? 0.0;
        if ($discountPercent < 0) {
            $discountPercent = 0.0;
        }
        if ($discountPercent > 100) {
            $discountPercent = 100.0;
        }
        $final = $basePrice - ($basePrice * ($discountPercent / 100));
        return max(0.0, round($final, 2));
    }
}





