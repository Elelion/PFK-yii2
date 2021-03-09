<?php
use app\widgets\ServiceCategoryWidget;
use yii\helpers\Url;
?>
<div class="top-header">
    <div class="container top-header__wrapper">
        <div class="top-header-left">

            <ul class="support">
                <li><a href="<?= Url::to(['home/index']); ?>">Главная</a></li>
            </ul>
            <ul class="support">
                <li class="support dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        Услуги <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <?= ServiceCategoryWidget::widget(); ?>
                    </ul>
                </li>
            </ul>
<!--            <ul class="support">-->
<!--                <li><a href="#">Сервис</a></li>-->
<!--            </ul>-->

            <div class="clearfix"> </div>
        </div>

        <div class="top-header-right">
            <ul class="support">
                <li class="support dropdown">
                    <a href="<?= Url::to(['home/contacts']); ?>" >Контакты</a>
                    <a href="tel:&nbsp;+ +7 (4742) 559 925">+7 4742 559-925</a>
                </li>
            </ul>

            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>