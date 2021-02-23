<?php


Yii::$app->on(\yii\base\Application::EVENT_AFTER_REQUEST,function($event){
    var_dump("Hello World");
});

Yii::$app->on(\yii\base\Application::EVENT_BEFORE_REQUEST,function($event){
   var_dump("Before Request");
});

