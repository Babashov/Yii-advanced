<?php
/* @var $this \yii\web\View */
/* @var $content string */

\backend\assets\AppAsset::register($this) // Bunu anlamadim
?>
<?php $this->beginPage(); ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Document</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="container">
            <?= $content ?>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Item 01</li>
            <li class="list-group-item">Item 02</li>
            <li class="list-group-item">Item 03</li>
        </ul>
    <?php if(isset($this->blocks['about'])): ?>
        <?= $this->blocks['about']; ?>
    <?php endif; ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>