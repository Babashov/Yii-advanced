<?php


namespace frontend\resource;


class Post extends \common\models\Post
{
    public function fields()
    {
        return ['id','title','body','comments'];
    }

    public function extraFields()
    {
        return ['created_at'];
    }
}