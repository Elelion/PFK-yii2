<?php

use app\widgets\CartAmountWidget;
use app\widgets\CartWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="bottom-header">
  <div class="container">
    <div class="header-bottom-left">
      <div class="logo">
        <a href="<?= Url::to(['home/index']) ?>">
            <?= Html::img("@web/images/logo.png", [
                'class' => 'logo-img',
                'alt' => 'Лого',
                'title' => 'Логотип компании',
            ]); ?>
          <div class="navbar-brand"><h1 class="navbar-brand__slogan">Гарантия <span>Качества</span></h1></div>
        </a>
      </div>

      <div class="search">
          <?php $form = ActiveForm::begin([
              'action' => ['catalog/search'],
              'method' => 'get',
          ]); ?>
              <input
                  type="text"
                  name="search"
                  class="search__field"
                  value=""
                  placeholder="Название товара..."
                  onfocus="this.value = '';"
                  onblur="if (this.value == '') {this.value = '';}" >
              <input type="submit"  value="Поиск" class="search__button">
          <?php ActiveForm::end(); ?>
      </div>
      <div class="clearfix"> </div>
    </div>

    <!-- NOTE: login, registry, cart -->
    <div class="header-bottom-right">
      <div class="account">
        <a href="login.html"><span class="account-img"> </span>Регистрация</a>
      </div>

      <!-- NOTE: cart -->
      <div class="cart">
        <a href="#" data-toggle="modal" data-target="#modalCart">
          <span class="cart-img">
              <?php if ($cartQuantity > 0): ?>
                  <p class="cart-amount">
                      <?= $cartQuantity; ?>
                  </p>
              <?php endif; ?>
          </span class="cart-sum">
          <?= CartAmountWidget::widget(['session' => \Yii::$app->session->get('cart', [])]) ?>
        </a>

        <!-- NOTE: cart modal -->
        <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
              </div>
              <div class="modal-body">
                <?= CartWidget::widget(['session' => \Yii::$app->session->get('cart', [])]); ?>
              </div>
              <div class="modal-footer">

                <!-- FIXME: change links to controller -->
                <a href="<?= Url::to(['cart/clear']) ?>" class="modal-footer__button">
                  <span class="on-get">Очистить корзину</span>
                </a>

                <a href="<?= Url::to(['cart/view']) ?>" class="modal-footer__button">
                  <span class="on-get">Оформить заказ</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- NOTE: end: cart modal -->
      </div>
      <!-- NOTE: end: cart -->



      <!-- NOTE: login -->
      <div class="login">
        <a href="<?= Url::to(['admin/auth/login']); ?>"><span class="login-img"> </span>Войти</a>
      </div>
      <!-- NOTE: endL login -->

      <div class="clearfix"> </div>

    </div>
    <!-- NOTE: end: login, registry, cart -->
    <div class="clearfix"> </div>
  </div>
</div>