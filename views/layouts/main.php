<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\FooterMenuWidget;
use app\widgets\FooterSubMenuWidget;
use app\widgets\HeaderMenuWidget;
use app\widgets\HeaderSubMenuWidget;
use app\widgets\ServiceCategoryWidget;

// TODO: not used ?
//use common\widgets\Alert;

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

    <!-- NOTE: catalog menu - begin -->
    <div class="sub-cate">
        <div class="top-nav rsidebar span_1_of_left">
            <h3 class="cate">
                Каталог
                <div class="catalog__menu">

                    <!-- NOTE: id used for JS -> Catalog.Menu.js -->
                    <input class="catalog__menu-checkbox" id="catalogMenu" type="checkbox">
                    <label class="catalog__menu-label" for="catalogMenu">
                        <?= Html::img("@web/images/arrow0.png", [
                            'class' => 'catalog__arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </label>
                </div>
            </h3>
            <ul class="menu">
                <ul class="kid-menu">
                    <li class="item0 kid-menu__single kid-menu__title">
                        <a href="product.html"><span></span>Детская безопасность</a>
                    </li>
                </ul>
                <li class="item1 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Доборы, расширители
                      <?= Html::img("@web/images/arrow1.png", [
                          'class' => 'arrow-img',
                          'alt' => 'развернуть',
                          'title' => 'развернуть список',
                      ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Соединители, расширители </a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Пилястровый профиль </a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Расширители </a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Соединители </a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Соединители Н / закладные </a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Соединители угловые </a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Соединитель 90° </a></li>
                    </ul>
                </li>
                <li class="item2 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Изделия по размерам
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Под размеры заказчика</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Москитки (изделия/шт/кв.м)</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Подоконники</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Профиль F и  L распил</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Расширители разные 60мм</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Расширители КВЕ 58мм</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Расширители КВЕ 70мм</a></li>
                        <li class="subitem8 kid-menu__subtitle"><a href="product.html">Соединители 58мм (Н)</a></li>
                        <li class="subitem9 kid-menu__subtitle"><a href="product.html">Соединители 60мм (Н)</a></li>
                        <li class="subitem10 kid-menu__subtitle"><a href="product.html">Соединители 70мм (Н) </a></li>
                        <li class="subitem11 kid-menu__subtitle"><a href="product.html">Соединители КВЕ 58мм</a></li>
                        <li class="subitem12 kid-menu__subtitle"><a href="product.html">Соединители КВЕ 70мм</a></li>
                        <li class="subitem13 kid-menu__subtitle"><a href="product.html">Соединители угловые 58мм</a></li>
                        <li class="subitem14 kid-menu__subtitle"><a href="product.html">Соединители угловые 70мм</a></li>
                        <li class="subitem15 kid-menu__subtitle"><a href="product.html">Соединители угловые 90°</a></li>
                        <li class="subitem16 kid-menu__subtitle"><a href="product.html">Сэндвич панели распил</a></li>
                        <li class="subitem17 kid-menu__subtitle"><a href="product.html">ШТ</a></li>
                    </ul>
                </li>
                <li class="item3 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Москитные сетки
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Все для вставных сеток</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Все для изготовления М/С</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Комплектующие для М/С</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Все для сеток плиссе</a></li>
                    </ul>
                </li>
                <li class="item4 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Монтаж окон
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Анкерные пластины</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Клины монтажные</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Все для монтажа окон</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Крепеж</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Нащельники ПВХ</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Пена монтажная</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Псул, ленты монтаж по ГОСТу</a></li>
                    </ul>
                </li>
                <li class="item5 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Алюминиевые изделия
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">KRAUSS</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">PROVEDAL</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Комплектующие для сборки</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Фурнитура</a></li>
                    </ul>
                </li>
                <li class="item6 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Сборка дверей
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Балконные дверные гарнитуры</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Расширитель площади сварки</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Дверные гарнитуры</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Дверные замки</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Дверные петли</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Дверные пороги</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Дверные прямые ручки</a></li>
                        <li class="subitem8 kid-menu__subtitle"><a href="product.html">Дверные ручки-скобы</a></li>
                        <li class="subitem9 kid-menu__subtitle"><a href="product.html">Доводчики</a></li>
                        <li class="subitem10 kid-menu__subtitle"><a href="product.html">Все для сборки дверей</a></li>
                        <li class="subitem11 kid-menu__subtitle"><a href="product.html">Многозапорные замки</a></li>
                        <li class="subitem12 kid-menu__subtitle"><a href="product.html">Накладки на замковый цилиндр</a></li>
                        <li class="subitem13 kid-menu__subtitle"><a href="product.html">Ответные планки</a></li>
                        <li class="subitem14 kid-menu__subtitle"><a href="product.html">Ручки балконные</a></li>
                        <li class="subitem15 kid-menu__subtitle"><a href="product.html">Соединитель порога</a></li>
                        <li class="subitem16 kid-menu__subtitle"><a href="product.html">Уплотнитель  порога и рамы</a></li>
                        <li class="subitem17 kid-menu__subtitle"><a href="product.html">Фиксаторы двери</a></li>
                        <li class="subitem18 kid-menu__subtitle"><a href="product.html">Цилиндры дверные</a></li>
                        <li class="subitem19 kid-menu__subtitle"><a href="product.html">Шаблоны для петель</a></li>
                        <li class="subitem20 kid-menu__subtitle"><a href="product.html">Шпингалеты дверные</a></li>
                        <li class="subitem21 kid-menu__subtitle"><a href="product.html">Прочие механизмы для дверей</a></li>
                    </ul>
                </li>
                <li class="item7 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Сборка окон
                        <?= Html::img("@web/images/arrow1.png", [
                            'class' => 'arrow-img',
                            'alt' => 'развернуть',
                            'title' => 'развернуть список',
                        ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Армирующий профиль</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Все для производства окон</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Все для сборки окон</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Пластины рихтовочные</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Подставочный профиль</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Профиль ПВХ</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Ручки оконные</a></li>
                        <li class="subitem8 kid-menu__subtitle"><a href="product.html">Слайдос ПВХ профиль</a></li>
                        <li class="subitem9 kid-menu__subtitle"><a href="product.html">Фурнитура</a></li>
                    </ul>
                </li>
                <li class="item8 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Сборка стеклопакетов
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Бутиловый герметик</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Декаротивные переплеты</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Дистационная рамка</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Сборка стеклопакетов</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Ленты для герметизации</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Полисульфидный герметик</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Пробковые прокладки</a></li>
                        <li class="subitem8 kid-menu__subtitle"><a href="product.html">Сито молекулярное</a></li>
                        <li class="subitem9 kid-menu__subtitle"><a href="product.html">Материалы для сборки</a></li>
                        <li class="subitem10 kid-menu__subtitle"><a href="product.html">Уголки для рамок</a></li>
                        <li class="subitem11 kid-menu__subtitle"><a href="product.html">Фальш-переплет</a></li>
                    </ul>
                </li>
                <li class="item9 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Оконная вентиляция
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Оконная вентиляция</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Приточные клапана</a></li>
                    </ul>
                </li>
                <li class="item10 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Отливы и прочие изделия
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Листы</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Нащельники из оцинк. стали</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Отливы</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Изделия из оцинк. стали с ЛКП</a></li>
                    </ul>
                </li>
                <li class="item11 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Подоконники, монтаж
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Материалы для установки</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">FineDek 6,4м</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">FineDek 6м</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Elex</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">LD</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Витраж</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Подоконники, монтаж</a></li>
                        <li class="subitem8 kid-menu__subtitle"><a href="product.html">Мастерпласт</a></li>
                        <li class="subitem9 kid-menu__subtitle"><a href="product.html">Торцевы накладки</a></li>
                    </ul>
                </li>
                <li class="item12 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Расходные материалы
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Ограничители открывания</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Перчатки, мешки</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Сопутствующие материалы</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Термометры оконные</a></li>
                    </ul>
                </li>
                <li class="item13 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Стеклопакеты
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Двухкамерные</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Производство стеклопакетов</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Материалы</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Однокамерные</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Стекло</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Стеклопакеты</a></li>
                    </ul>
                </li>
                <li class="item14 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Сэндвичи, откосы, монтаж
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Cristallit, F и L</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Кронштейн для откосов</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">Панели ПВХ</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">Профиль F и  L</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Сэндвич-панели</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Сэндвичи, откосы, монтаж</a></li>
                        <li class="subitem7 kid-menu__subtitle"><a href="product.html">Углы ПВХ с защ. пленкой</a></li>
                    </ul>
                </li>
                <ul class="kid-menu">
                    <li class="item15 kid-menu__single kid-menu__title">
                        <a href="product.html"><span></span>Упаковочные материалы</a>
                    </li>
                </ul>
                <li class="item16 kid-menu__multi kid-menu__title">
                    <a href="#"><span></span>Химия
                        <?= Html::img("@web/images/arrow1.png", [
                        'class' => 'arrow-img',
                        'alt' => 'развернуть',
                        'title' => 'развернуть список',
                    ]); ?>
                    </a>
                    <ul class="cute">
                        <li class="subitem1 kid-menu__subtitle"><a href="product.html">Cosmofen</a></li>
                        <li class="subitem2 kid-menu__subtitle"><a href="product.html">Tytan</a></li>
                        <li class="subitem3 kid-menu__subtitle"><a href="product.html">WIKO</a></li>
                        <li class="subitem4 kid-menu__subtitle"><a href="product.html">ГЕРМЕТИКИ</a></li>
                        <li class="subitem5 kid-menu__subtitle"><a href="product.html">Набор по уходу за окнами</a></li>
                        <li class="subitem6 kid-menu__subtitle"><a href="product.html">Химия</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <!-- NOTE: additional block -->
<!--        				<div class=" chain-grid menu-chain">-->
<!--        					<a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>-->
<!--        					<div class="grid-chain-bottom chain-watch">-->
<!--        						<span class="actual dolor-left-grid">300$</span>-->
<!--        						<span class="reducedfrom">500$</span>-->
<!--        						<h6><a href="single.html">Lorem ipsum dolor</a></h6>-->
<!--        					</div>-->
<!--        				</div>-->
    </div>

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
