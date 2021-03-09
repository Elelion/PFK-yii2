<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\FooterMenuWidget;
use app\widgets\FooterSubMenuWidget;
use app\widgets\HeaderMenuWidget;
use app\widgets\HeaderSubMenuWidget;
use app\widgets\ServiceCategoryWidget;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>

        <!-- NOTE: Robots -->
        <meta name="yandex-verification" content="4e1811c12e0d83db"/>
        <meta name="google-site-verification" content="rPs9R9RLzplCtx2T1-OP63IM5tZFO-DGZ7HiLjYdHss"/>

        <!-- NOTE: SEO -->
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <?php $this->registerLinkTag([
            'rel' => 'shortcut icon',
            'type' => 'image/x-icon',
            'href' => '../../web/images/favicon.png',
        ]);?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!-- NOTE: header -->
    <div class="header">
        <?= HeaderMenuWidget::widget(); ?>

        <?= HeaderSubMenuWidget::widget(); ?>
    </div>

    <!---->

    <div class="container">
        <?= $content ?>
    </div>

    <!---->

    <div class="footer">
        <div class="footer-top">
            <?= FooterSubMenuWidget::widget(); ?>
        </div>
        <div class="footer-bottom">
            <?= FooterMenuWidget::widget(); ?>
        </div>
    </div>

    <script type="application/x-javascript">
      // TODO: find for is it?
      // addEventListener("load", function() {
      //   setTimeout(hideURLbar, 0);
      // }, false);
      // function hideURLbar() {
      //   window.scrollTo(0,1);
      // }
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>