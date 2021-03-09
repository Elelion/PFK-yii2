<?php


use app\helpers\PluralHelper;
use app\widgets\CatalogSortingWidget;
use app\widgets\ProductWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;


/** @var TYPE_NAME $products */
/** @var TYPE_NAME $productsCount */
/** @var TYPE_NAME $pagesPagination */
?>

<div class="container">

    <div class="women-product">
        <div class="w_content">
            <div class="women">
                <h4>
                    В каталоге: <span><?= $productsCount; ?></span>
                    <?= PluralHelper::format(
                        $productsCount, 'товар', 'товара', 'товаров'
                    ); ?>
                </h4>
                <div class="women__sort-wrapper">

                    <!-- TODO: sorting & filters - make in one form -->
                    <?php $form = ActiveForm::begin([
                        'action' => ['catalog/index'],
                        'options' => [
                            'method' => 'get',
                        ]
                    ]); ?>
                        <ul class="support support__sort w_nav">
                            <li class="support dropdown">
                                <a href="#" class="dropdown-toggle support__sort-title" data-toggle="dropdown">
                                    Сортировка <b class="caret"></b>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="<?= Url::to(['catalog/index', 'sort' => 'id']) ?>">Стандартная</a></li>
                                    <li><a href="<?= Url::to(['catalog/index', 'sort' => 'price']) ?>">Дешевые</a></li>
                                    <li><a href="<?= Url::to(['catalog/index', 'sort' => '-price']) ?>">Дорогие</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <!-- NOTE: output products -->
        <?php foreach ($products as $product): ?>
            <?= ProductWidget::widget(['currentProduct' => $product]); ?>
        <?php endforeach; ?>

        <div class="clearfix"> </div>

        <!-- NOTE: output pagination -->
        <?php if ($productsCount > 15): ?>
            <div class="catalog__pagination">
                <ul class="catalog__pagination-list">
                    <?= LinkPager::widget(['pagination' => $pagesPagination]); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <div class="clearfix"> </div>

</div>
