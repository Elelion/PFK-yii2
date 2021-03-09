<?php

namespace app\controllers;

use app\models\Product;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

class CatalogController extends AppController
{
    /**
     * NOTE:
     *
     * Action for view all products
     */
    public function actionIndex($sort = 'id')
    {
        $sortDirection = substr($sort, 0, 1) === '-' ? SORT_DESC : SORT_ASC;
        $sort = ltrim($sort, '-');

        // FIXME: DRY!!!
        $countQuery = Product::find()
            ->orderBy('id');
        $pagesPagination = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 15]);
        $products = $countQuery->offset($pagesPagination->offset)
            ->limit($pagesPagination->limit)
            ->orderBy([$sort => $sortDirection])
            ->all();

        $productsCount = Product::find()->count();

        return $this->render('index', compact(
            'pagesPagination',
            'products',
            'productsCount'
        ));
    }

    public function actionSearch($sort = 'id')
    {
        $searchUser = \Yii::$app->request->get('search');

        if ($searchUser != null) {
            \Yii::$app->search->add(\Yii::$app->request->get('search'));
        }

        $getSearchFromSession = \Yii::$app->session->get('search');
        $search = $getSearchFromSession[0];

        $sortDirection = substr($sort, 0, 1) === '-' ? SORT_DESC : SORT_ASC;
        $sort = ltrim($sort, '-');

        $query = Product::find()
            ->orderBy([$sort => $sortDirection]);
        $pages = 25;

        if ($search) {
            $query->where(['like', 'title', $search]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $pages,
            ],
        ]);

        return $this->render('search', compact(
            'dataProvider'
        ));
    }
}