<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "GRABC",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '开发文档', 'url' => ['/doc/index']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    ?>
    <ul id="w1" class="navbar-nav navbar-right nav">
        <li>
            <a href="https://github.com/codyi/grabc/network">
                <img src="https://img.shields.io/github/forks/codyi/grabc.svg?style=social&label=Forks"/>
            </a>
        </li>
        <li>
            <a href="https://github.com/codyi/grabc/stargazers">
                <img src="https://img.shields.io/github/stars/codyi/grabc.svg?style=social&label=Starss"/>
            </a>
        </li>
        <li>
            <a href="https://goreportcard.com/report/github.com/codyi/grabc">
                <img src="https://goreportcard.com/badge/github.com/codyi/grabc"/>
            </a>
        </li>
    </ul>
    <?php
    NavBar::end();
    ?>

    <div class="container" style="height: 1000px;">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">版权所有&copy; GCRAB <?= date('Y') ?></p>

        <p class="pull-right">开发者：codyi</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
