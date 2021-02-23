<?php


namespace frontend\components;


use yii\base\ActionEvent;

class BeforeAction extends ActionEvent
{
    public function __construct($action, $config = [])
    {
        $this->test();
        parent::__construct($action, $config);
    }

    public function test()
    {
        echo "Salam";
    }
}