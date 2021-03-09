<?php


namespace app\helpers;


/**
 * NOTE:
 *
 * Helper for the division of the numbers in the octets
 *
 * @package app\helpers
 */
class ProductPriceFormatHelper
{
    public static function formatPrice($currentPrice)
    {
        $price = number_format($currentPrice, 2, ',', ' ');

        return $price;
    }
}