<?php


namespace common\widgets;


use yii\base\Widget;
use yii\helpers\Html;

class BgWidget extends Widget
{
    public $textColor = "white";
    public $bgColor = "blue";
    public function init()
    {
        parent::init();
//        ob_start();
    }

    public function run()
    {
        parent::run();
//        $output = ob_get_clean();
        $output = $this->render('test',[
           "message"=>"Hello From Widget View File"
        ]);
        return Html::tag("div",$output,[
           "style"=>"background-color:".$this->bgColor.";color:".$this->textColor
        ]);
    }
}