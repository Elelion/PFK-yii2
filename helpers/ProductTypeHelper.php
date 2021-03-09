<?php


namespace app\helpers;


/**
 * NOTE:
 *
 * Helper for to determine the type of product (sale, hit)
 *
 * @package app\helpers
 */
class ProductTypeHelper
{
    public static function productType($sale, $hit)
    {
        if ($sale == true && $hit == false) {
            $type = 'Товар по акции';
        }

        if ($sale == false && $hit == true) {
            $type = 'Хит сезона';
        }

        if ($sale == true && $hit == true) {
            $type = 'Хит сезона, акция';
        }

        return $type;
    }
}