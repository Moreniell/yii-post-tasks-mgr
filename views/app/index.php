<?php

use app\widgets\AjaxForm;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Post Tasks Manager';
$this->registerCssFile(Yii::$app->request->baseUrl . "/css/pages/post.css");
?>

<div class="container">
    <?php
        echo AjaxForm::widget([
            'forms' => [
                new \app\models\forms\Form1(),
                new \app\models\forms\Form2()
            ],
            'submit' => [
                'content' => 'Подтвердить',
                'class' => 'btn btn-primary'
            ],
            'formPicker' => [
                'label' => 'Выбор формы',
                'class' => 'form-control'
            ]
        ]);
    ?>
</div>