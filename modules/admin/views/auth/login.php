<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>


<div class="login-box">
  <div class="login-logo">
      <p><b>ПФК</b> ЛК</p>
  </div>

  <div class="login-box-body">
      <a href="<?= Url::to(Yii::$app->homeUrl); ?>" class="close">×</a>

      <p class="login-box-msg">Для корпоративного использования</p>

      <?php $form = ActiveForm::begin(); ?>

          <?= $form->field($model, 'username',
              [
                  'template' => "<div class='form-group has-feedback'> {input}
                      <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
                      <div>{error}</div>
                      </div>"
              ])
              ->textInput(['placeholder' => 'Login']); ?>

          <?= $form->field($model, 'password',
              [
                  'template' => "<div class='form-group has-feedback'> {input}
                      <span class='glyphicon glyphicon-lock form-control-feedback'></span>
                      <div>{error}</div>
                      </div>"
              ])
              ->passwordInput(['placeholder' => 'Password']); ?>

          <div class="row">
              <div class="col-xs-8">
                  <div class="checkbox icheck">
                      <?= $form->field($model, 'rememberMe')
                          ->checkbox([
                              'template' => "{label} {input}"
                          ]); ?>
                  </div>
              </div>

              <div class="col-xs-4">
                  <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block btn-flat']); ?>
              </div>
          </div>

    <?php ActiveForm::end(); ?>

  </div>
</div>
