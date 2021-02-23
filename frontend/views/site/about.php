<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <?php
    echo \common\widgets\Button::widget([
       "content"=>"bura cikkildat",
        "href"=>"https://google.com"
    ]);
    ?>

    <?php \common\widgets\BgWidget::begin([
            "textColor"=>"red",
            "bgColor"=>"black"
    ]); ?>
        Hello World
    <?php \common\widgets\BgWidget::end(); ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>


<?php $this->beginBlock('about'); ?>

<h1>Here is our About Block Place</h1>

<?php $this->endBlock(); ?>
