<?php

use yii\helpers\Url;

/**
 * @var integer $orders
 * @var integer $products
 */

/**
 * @note
 * any view that has a controller associated with another controller,
 * via a shared controller, passes data to the layout via this
 */
$this->title = 'Статистика магазина';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $orders; ?></h3>

                <p>Заказаов</p>
            </div>

            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>

            <a href="<?= Url::to(['order/index']); ?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $products; ?></h3>

                <p>Товаров</p>
            </div>

            <div class="icon">
               <i class="fa fa-cube"></i>
            </div>

            <a href="<?= Url::to(['product/index']); ?>" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>Категорий</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= Url::to(['category/index']); ?>" class="small-box-footer">
                 More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
