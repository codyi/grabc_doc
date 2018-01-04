<?=$this->render("_header");?>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?=$this->render("_nav");?>
    <div class="container content">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <?=$this->render("_doc_left_menu");?>
            </div>
            <div class="col-md-10 col-sm-9">
                <div class="box">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->render("_footer");?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
