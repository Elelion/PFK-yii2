<?php
use yii\helpers\Html;
?>

<div class="row contacts">
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="contacts-phone__wrapper">
            <?= Html::img("@web/images/contacts-phone.png", [
                'class' => 'img-responsive contacts-phone__img',
                'alt' => 'Номер телефона',
                'title' => 'Телефон',
            ]); ?>

            <div class="contacts-phone__wrapper-phone">
                <a class="contacts__link" href="tel:&nbsp;+ +7 (4742) 559 925">
                    +7 (4742) 559 925
                </a>
                <div class="clearfix"></div>
                <a class="contacts__link" href="tel:&nbsp;+ +7 (4742) 559 924">
                    +7 (4742) 559 924
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="contacts-map__wrapper">
            <?= Html::img("@web/images/contacts-map-marker.png", [
                'class' => 'img-responsive contacts-map__img',
                'alt' => 'Адрес компании',
                'title' => 'Адрес',
            ]); ?>

            <div class="contacts-map__wrapper-map">
                <p>
                    399140, Липецкая область, Добровский район,
                    Доброе село, Советский переулок, дом № 6 А, кабинет 1
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <?= Html::img("@web/images/contacts-mail.png", [
            'class' => 'img-responsive contacts-mail__img',
            'alt' => 'Почта компании',
            'title' => 'Почта',
        ]); ?>

        <div class="contacts-phone__wrapper-phone">
            <a class="contacts__link" href="mailto: <?= \Yii::$app->params['adminEmail']; ?>">
                <?= \Yii::$app->params['adminEmail']; ?>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-12 contacts-coordinates">
        <script type="text/javascript"
                charset="utf-8"
                async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac45bb7501191d4d0636163c628538d63144f91e72ee6327ef8483243334de076&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false">
        </script>
    </div>
</div>