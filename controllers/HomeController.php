<?php

namespace app\controllers;

use app\models\Banner;
use app\models\Jumbotron;
use app\models\Subscribe;
use app\models\Product;
use app\models\ServiceCategory;
use app\models\Vacancy;
use yii\web\NotFoundHttpException;

/**
 * @note
 * actions for home(main) page
 */
class HomeController extends AppController
{
    public function actionIndex()
    {
        $this->setMeta(\Yii::$app->name,
            'Компания ПФК предлагает купить сертифицированную продукцию: 
            подоконники ПВХ, комплектующие и фурнитуры для окон, оптом, от 
            производителя по выгодной цене',
            'пластиковые окна, производитель, купить, цены, пвх, 
            рольставни, жалюзи, пластиковые, оптом, розница, подоконники, оптом, 
            оптом от производителя'
        );

        $jumbotron = Jumbotron::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->limit(7)
            ->all();

        $banners = Banner::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->limit(2)
            ->all();

        $productHits = Product::find()
            ->where(['hit' => 1])
            ->orderBy('RAND()')
            ->limit(3)
            ->all();

        $productSales = Product::find()
            ->where(['sale' => 1])
            ->orderBy('RAND()')
            ->limit(3)
            ->all();

        return $this->render('index', compact(
            'jumbotron',
            'banners',
            'productSales',
            'productHits'
        ));
    }

    public function actionServices(int $id)
    {
        $servicesCategory = ServiceCategory::findOne($id);

        if (empty($servicesCategory)) {
            throw new NotFoundHttpException('Такой категории услуг нет...');
        }

        $this->layout = 'withoutCategory';

        $this->setMeta("{$servicesCategory->title}. " . \Yii::$app->name,
            $servicesCategory->description,
            $servicesCategory->title
        );

        return $this->render('services', compact(
            'servicesCategory'
        ));
    }

    public function actionJumbotron(int $id)
    {
        $jumbotron = jumbotron::findOne($id);

        if (empty($jumbotron)) {
            throw new NotFoundHttpException('Такого слайда нет...');
        }

        $this->layout = 'withoutCategory';

        $this->setMeta("{$jumbotron->title}. " . \Yii::$app->name,
            $jumbotron->title,
            $jumbotron->full_description
        );

        return $this->render('jumbotron', compact(
            'jumbotron'
        ));
    }

    public function actionBanner(int $id)
    {
        $banner = Banner::findOne($id);

        if (empty($banner)) {
            throw new NotFoundHttpException('Такого раздела нет...');
        }

        $this->layout = 'withoutCategory';

        $this->setMeta("{$banner->title}. " . \Yii::$app->name,
            $banner->mini_description,
            $banner->title
        );

        return $this->render('banner', compact(
            'banner'
        ));
    }

    public function actionContacts()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('Наши контакты ' . \Yii::$app->name,
            'Компания ПФК распологается по адресу: 
            г. Липецк, ул Клары Цеткин, 1а',
            'контакты, ПФК контакты, адрес, ПФК адрес, расположение, город'
        );

        return $this->render('contacts');
    }

    public function actionAbout()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('О компании ' . \Yii::$app->name,
            'Юридическая информация',
            'интернет-магазин, заказать, купить, каталог товаров, ПФК'
        );

        return $this->render('about');
    }

    public function actionVacancy()
    {
        $vacancy = Vacancy::find()
            ->where(['active' => true])
            ->all();

        $this->layout = 'withoutCategory';

        $this->setMeta('Вакансии ' . \Yii::$app->name,
            'Вакансии в компании ПФК',
            'найти работу, работа, вакансия, вакансии, карьера, резюме, должность'
        );

        return $this->render('Vacancy', compact(
            'vacancy'
        ));
    }

    public function actionVacancyDetail(int $id)
    {
        $vacancy = Vacancy::find()
            ->where(['id' => $id, 'active' => true])
            ->one();

        $this->layout = 'withoutCategory';

        $this->setMeta('Вакансии ' . \Yii::$app->name,
            'Вакансии компании',
            'Вакансия, вакансии, работа, поиск работы, трудоустройство, 
                деньги, зарплата, заработать деньги'
        );

        return $this->render('vacancy-detail', compact(
            'vacancy'
        ));
    }

    public function actionPayment()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('Оплата ' . \Yii::$app->name,
            'Условия оплаты',
            'оплата, оплатить, Альфа Банк, visa, мир, mastercard'
        );

        return $this->render('payment');
    }

    public function actionDelivery()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('Доставка ' . \Yii::$app->name,
            'Условия доставки',
            'доставка, доставка ПВХ, доставка окон, монтаж, демонтаж, 
            монтаж окон, демонтаж окон'
        );

        return $this->render('delivery');
    }

    public function actionRefundPolicy()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('Политика возврата ' . \Yii::$app->name,
            'Условия возврата',
            'возврат, вернуть деньги, деньги, возврат денежных средств'
        );

        return $this->render('refund-policy');
    }

    public function actionNews()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta('Новости ' . \Yii::$app->name,
            'Новости',
            'новости, новости компании'
        );

        return $this->render('news');
    }

    public function actionSubscribe()
    {
        $post = \Yii::$app->request->post();
        if (!$post) {
            return $this->goHome();
        }

        $email = htmlspecialchars(trim($post['Subscribe']['email']));
        $subscribe = Subscribe::find()
            ->where(['email' => $email])
            ->one();

        if (!$subscribe) {
            $subscribeNew = new Subscribe();
            $subscribeNew->email = $email;
            $subscribeNew->save();

            return \Yii::$app->response->redirect(['alert/index', 'id' => 'SubscribeOk']);
        } else {
            return \Yii::$app->response->redirect(['alert/index', 'id' => 'SubscribeBusy']);
        }
    }

    /**
     * @note
     * action for import from SCV to DB
     * ... web/index.php?r=home/import
     */
    public function actionImport()
    {
        $product = new Product;

        if ($product->validate() && $product->createProduct()) {
            return $this->goHome();
        };
    }
}