<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        './vendor/bootstrap/css/bootstrap.min.css',
        './vendor/fontawesome-free/css/all.min.css',
        './vendor/simple-line-icons/css/simple-line-icons.css',
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        './css/landing-page.min.css'
    ];
    public $js = [
        './vendor/jquery/jquery.min.js',
        './vendor/bootstrap/js/bootstrap.bundle.min.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
