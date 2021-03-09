<?php

/**
 * @var $order ActiveForm
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="order-registration">
    <div class="order-registration__title">
        <h1>Оформление заказа</h1>
    </div>

    <?php $form = ActiveForm::begin([
        'action' => ['cart/palace'],
        'options' => [
            'method' => 'post',
            'class' => 'order-registration__form'
        ]
    ]); ?>
        <div class="order-registration__wrapper">
            <?= $form->field($order, 'name')
                ->textInput([
                    'tabindex' => 1,
                    'class' => 'designed__input order-registration__name',
                    'placeholder' => 'Имя *'
                ])
                ->label(''); ?>

            <?= $form->field($order, 'phone')
                ->textInput([
                    'tabindex' => 2,
                    'class' => 'designed__input order-registration__phone',
                    'placeholder' => 'Мобильный телефон *'
                ])
                ->label(''); ?>

            <?= $form->field($order, 'email')
                ->textInput([
                    'tabindex' => 3,
                    'class' => 'designed__input order-registration__email',
                    'placeholder' => 'eMail *'
                ])
                ->label(''); ?>

            <?= $form->field($order, 'note')
                ->textArea([
                    'tabindex' => 4,
                    'rows' => 1,
                    'maxlength' => 1000,
                    'class' => 'designed__input order-registration__note',
                    'placeholder' => 'Ваш комментарий'
                ])
                ->label(''); ?>

              <?= Html::submitButton('Далее', [
                  'class' => 'on-get order__button order-registration__button'
              ]); ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>