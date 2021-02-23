<?php
/* @var $this \yii\web\View */
/* @var $content string */

\backend\assets\AppAsset::register($this) // Bunu anlamadim
?>
<?php $this->beginContent('@app/views/layouts/clear.php'); ?>
<?= $content; ?>
<?php $this->endContent() ?>
