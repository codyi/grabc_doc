<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
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