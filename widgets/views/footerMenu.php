<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container">
    <div class="footer-bottom-cate">
        <h6>ПФК</h6>
        <ul>
            <li><a href="<?= Url::to(['home/about']) ?>">О компании</a></li>
            <li><a href="<?= Url::to(['home/vacancy']) ?>">Вакансии</a></li>
            <li><a href="<?= Url::to(['home/contacts']) ?>">Контакты</a></li>
        </ul>
    </div>
    <div class="footer-bottom-cate bottom-grid-cat">
        <h6>Информация</h6>
        <ul>
            <li><a href="<?= Url::to(['home/news']) ?>">Новости</a></li>
            <li>
                <?= Html::a(
                    'Публичная оферта',
                    ['/docs/oferta.pdf'],
                    ['target'=>'_blank']
                ); ?>
            </li>
        </ul>
    </div>
    <div class="footer-bottom-cate">
        <h6>Покупателям</h6>
        <ul>
            <li><a href="<?= Url::to(['home/payment']) ?>">Оплата</a></li>
            <li><a href="<?= Url::to(['home/delivery']) ?>">Доставка</a></li>
            <li><a href="<?= Url::to(['home/refund-policy']) ?>">Правила возврата</a></li>
        </ul>
    </div>
    <div class="footer-bottom-cate cate-bottom">
        <h6>Адрес</h6>
        <ul>
            <li><a href="mailto: <?= \Yii::$app->params['adminEmail']; ?>"><?= \Yii::$app->params['adminEmail']; ?></a></li>
            <li><a href="tel:&nbsp;+ +7 (4742) 559-925">+7 (4742) 559-925</a></li>
            <li><a href="tel:&nbsp;+ +7 (4742) 559-924">+7 (4742) 559-924</a></li>
            <li>г.Липецк, улица Клары Цеткин, 1а</li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>