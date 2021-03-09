<?php

use app\helpers\ProductPriceFormatHelper;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="general__title vacancy__title">
            Вакансии
        </h1>
    </div>

    <div class="clearfix"></div>

    <?php if (count($vacancy) < 1): ?>
        <div class="col-lg-12">
            К сожалению на данный момент у нас нет открытых вакансий.
            <br>
            Загляните позже.
        </div>
    <?php else: ?>
        <?php foreach ($vacancy as $job): ?>
            <a href="<?= Url::to(['home/vacancy-detail', 'id' => $job->id]) ?>" class="col-lg-12 vacancy__block">
                <p class="vacancy__subtitle"><?= $job->title; ?></p>

                <p class="vacancy__subtitle">Зарплата:</p>
                <p>От <?= ProductPriceFormatHelper::formatPrice($job->salary) . ' ₽'; ?></p>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

