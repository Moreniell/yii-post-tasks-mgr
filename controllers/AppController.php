<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;


/**
 * Application Controller
 *
 * @author Ivanchenko Andrey <ivanchenko.andrey.d@ukr.net>
 * @since 1.0
 */
class AppController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage with forms.
     *
     * @return array|string
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return json_encode($_POST);
        }

        return $this->render('index');
    }
}
