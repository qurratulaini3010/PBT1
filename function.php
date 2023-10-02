<?php

function calculateRoomTotal($roomtypes, $roomDays, $membershipType, $price)
{
// Calculate room total
    $roomTotal = $price * $roomDays;

// Initialize the discount amount
    $discountAmount = 0;
    $discount = "0";
    $prices = 0.00;

// Apply membership discounts
    if ($membershipType === 'vip') {
        $discountAmount = $roomTotal * 0.15; // 15% discount for VIP
        $discount = "15%";
        $prices = $roomTotal - $discountAmount;
    } elseif ($membershipType === 'gold') {
        $discountAmount = $roomTotal * 0.10; // 10% discount for Gold
        $prices = $roomTotal - $discountAmount;
        $discount = "10%";
    } elseif ($membershipType === 'regular') {
        $discount = "0%";
        $prices = $roomTotal;
    }

    return [$prices, $roomTotal, $price, $discountAmount, $discount];

}

