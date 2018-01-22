<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

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
    <title>GRABC 文档</title>
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
        ['label' => '开发文档', 'url' => ['/docs']],
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
    <div class="container content bs-docs-container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <nav class="docs_menu bs-js-navbar-scrollspy affix" id="docs_menu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#introduction">GRABC 简介</a>
                        </li>
                        <li>
                            <a href="#install">安装</a>
                        </li>
                        <li>
                            <a href="#config">配置</a>
                        </li>
                        <li>
                            <a href="#interface">用户接口</a>
                        </li>
                        <li>
                            <a href="#layout">设置GRABC的layout</a>
                        </li>
                        <li>
                            <a href="#menu">使用GRABC的菜单</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10 col-sm-9">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
<script>
    $(function () {
        $("#docs_content").css("height", $(document).height() - 80);
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
