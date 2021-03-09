<?php


namespace app\controllers;


use app\helpers\RedirectHeaderHelper;
use app\models\AlertErrors;


class AlertController extends AppController
{
    /**
     * NOTE:
     *
     * Actions for events alerts
     */
    public function actionIndex($id)
    {
        $this->layout = 'withoutCategory';

        $alert = AlertErrors::find()
            ->where(['error_type' => $id])
            ->one();

        if (empty($alert)) {
            throw new NotFoundHttpException('Уведомление не найдено...');
        }

        RedirectHeaderHelper::redirect($alert->timeout, $this->getHomeUrl());

        return $this->render('index', compact('alert'));
    }
}