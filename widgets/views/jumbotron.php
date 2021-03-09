<?php
/** @var int $jumbotron */

use yii\helpers\Html;
use yii\helpers\Url; ?>

<div class="wrap-in">
    <div class="wmuSlider example1 slide-grid">
        <div class="wmuSliderWrapper">

            <?php foreach ($jumbotron as $jumbotron): ?>
                <article
                    class="jumbotron__article"
                    style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-matter">
                        <div class="col-md-5 banner-bag">
                            <?= Html::img("@web/images/{$jumbotron->img}.jpg", [
                                'class' => 'img-responsive jumbotron__img',
                                'alt' => $jumbotron->title,
                                'title' => $jumbotron->title,
                            ]); ?>
                        </div>

                        <div class="col-md-7 banner-off">
                            <h2><?= $jumbotron->title; ?></h2>
                            <label><?= $jumbotron->slogan; ?></label>
                            <p><?= $jumbotron->description; ?></p>

                            <a href="<?= Url::to(['home/jumbotron', 'id' => $jumbotron->id]) ?>" class="">
                                <span class="on-get">Подробнее</span>
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
    </div>
</div>
