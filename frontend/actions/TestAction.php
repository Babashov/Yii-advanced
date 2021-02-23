<?php


namespace frontend\actions;


use yii\base\Action;

class TestAction extends Action
{
    public function init()
    {
        echo "<br/>Init Funtion Runned in test Action";
    }

    public function run()
    {
        echo "<br/>Salam Run Function";
    }
}