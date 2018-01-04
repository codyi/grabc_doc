<?=$this->render("_header");?>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?=$this->render("_nav");?>
    <div class="container content">
        <?= $content ?>
    </div>
</div>
<?=$this->render("_footer");?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
