<?php
/** @var integer $amount */

use app\helpers\ProductPriceFormatHelper;

?>

<?= ProductPriceFormatHelper::formatPrice($amount) . ' ₽'; ?>