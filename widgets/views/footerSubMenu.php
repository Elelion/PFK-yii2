<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="container footer__subscribe">
    <div class="latter">
        <h6>Рассылка</h6>
        <div class="sub-left-right">

            <?php $form = ActiveForm::begin([
                'action' => ['home/subscribe'],
                'method' => 'post',
                'options' => [
                    'class' => 'latter__form-wrapper',
                ],

                'validateOnChange' => true,
            ]); ?>
                  <?= $form->field($subscribe, 'email',
                      [
                          'labelOptions' => ['style' => 'display: none;'],
                          'options' => ['class' => ''],
                      ])
                      ->textInput([
                          'class' => '',
                          'placeholder' => 'Введите свой eMail',
                      ]); ?>

                  <?= Html::submitButton('Подписаться', ['class' => 'subscribe__button on-get']); ?>
            <?php ActiveForm::end(); ?>

        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="latter-right">
        <p>Медиа</p>
        <ul class="face-in-to">
            <li>
                <a href=<?= Url::to('https://www.instagram.com/elitkomplekt.ru/'); ?>>
                    <span class="latter-right__instagram"> </span>
                </a>
            </li>
            <li>
                <a href=<?= Url::to('https://api.whatsapp.com/send?phone=79107429007'); ?>>
                    <span class="latter-right__whatsapp"> </span>
                </a>
            </li>

            <div class="clearfix"> </div>
        </ul>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>