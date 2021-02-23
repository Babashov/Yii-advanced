<?php


namespace frontend\components;


use yii\base\Component;

class Test extends Component
{

    public function sayHello($message = "Hello World")
    {
        echo $message;
    }
}