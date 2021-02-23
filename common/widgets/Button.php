<?php


namespace common\widgets;


use yii\base\Widget;

class Button extends Widget
{
    public $content;
    public $href;
    public function init()
    {
        parent::init();
        $this->content = ucfirst($this->content);
    }

    public function run()
    {
        parent::run();
        return "<button href=".$this->href.">".$this->content."</button>";
    }
}