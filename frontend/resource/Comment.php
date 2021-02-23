<?php


namespace frontend\resource;


class Comment extends \common\models\Comment
{
    public function extraFields()
    {
        return ['post'];
    }
}