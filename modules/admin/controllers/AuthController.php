<?php


namespace app\modules\admin\controllers;


use app\models\LoginForm;
use Yii;
use yii\web\Response;


/**
 * @note
 * general controller for all others controllers in the current module - admin
 * link for action - ...web/admin/auth/login
 *
 * @package app\modules\admin\controllers
 */
class AuthController extends AppController
{
    /*
     * @note
     * setting a template for the current controller (modules/admin/views/layouts/auth.php
     */
    public $layout = 'auth';

    /**
     * @note
     * Login action.
     *
     * @return string|Response
     * @throws \yii\base\Exception
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['control/index']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * @note
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
