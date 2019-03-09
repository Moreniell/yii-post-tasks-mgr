<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="site__header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="header__contacts">
                    <tr>
                        <td>Phone:</td>
                        <td><a href="tel:+380956522355">+38 (095) 652-23-55</a></td>
                    </tr>
                    <tr>
                        <td>E-mail & Skype:</td>
                        <td><a href="mailto:ivanchenko.andrey.d@ukr.net">ivanchenko.andrey.d@ukr.net</a></td>
                    </tr>
                    <tr>
                        <td>LinkedIn:</td>
                        <td><a href="https://www.linkedin.com/in/moreniell" target="_blank">https://www.linkedin.com/in/moreniell</a></td>
                    </tr>
                    <tr>
                        <td>GitHub:</td>
                        <td><a href="https://github.com/moreniell" target="_blank">https://github.com/moreniell</a></td>
                    </tr>
                    <tr>
                        <td>Twitter:</td>
                        <td><a href="https://twitter.com/moreniell" target="_blank">https://twitter.com/moreniell</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <div class="align-right">
                    <h1 class="header__title"><?= Html::encode($this->title) ?></h1>
                    <h2 class="header__autor">By Andrey Ivanchenko</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
