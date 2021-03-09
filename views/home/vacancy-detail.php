<?php

use app\helpers\ProductPriceFormatHelper;
use yii\helpers\Html;
?>

<div class="row">
    <div class="clearfix"></div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="general__title"><?= $vacancy->title; ?></h1>

            <p class="vacancy__subtitle">Зарплата:</p>
            <p>От <b><?= ProductPriceFormatHelper::formatPrice($vacancy->salary) . ' ₽'; ?></p></b>
            <br>

            <p class="vacancy__subtitle">Требования:</p>
            <p><?= $vacancy->requirements; ?></p>
            <br>

            <p class="vacancy__subtitle">Образование:</p>
            <p><?= $vacancy->education; ?></p>
            <br>

            <p class="vacancy__subtitle">Опыт:</p>
            <p><?= $vacancy->experience; ?></p>
            <br>

            <p class="vacancy__subtitle">Обязанности:</p>
            <p><?= $vacancy->responsibilities; ?></p>
            <br>

            <p class="vacancy__subtitle">Условия:</p>
            <p><?= $vacancy->conditions; ?></p>
            <br>
        </div>
</div>
