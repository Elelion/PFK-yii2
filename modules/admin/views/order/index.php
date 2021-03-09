<?php


use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Список заказов';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Добавить заказ', ['create'], ['class' => 'btn btn-success']) ?>
            </div>

            <div class="box-body">
                <div class="order-index">

                    <?php
                    /**
                     * @note
                     * SerialColumn - for #numeric column
                     * ActionColumn - for actions - view/edit/del
                     * set datetime format - web/formatter
                     */
                    ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            //'order_product_id',
                            //'created_at',
                            [
                                'attribute' => 'created_at',

                                //'format' => 'datetime',
                                'format' => ['datetime', 'php:d M Y H:i:s'],
                            ],
                            //'updated_at',
                            'price',
                            'status',
                            'name',
                            'email:email',
                            'phone',
                            //'note:ntext',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Действия',
                            ],
                        ],
                    ]); ?>
                  
                </div>
            </div>
        </div>
    </div>
</div>
