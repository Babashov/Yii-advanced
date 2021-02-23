<?php


namespace frontend\controllers;
use yii\rest\ActiveController;

class CommentController extends ActiveController
{
    public $modelClass = \frontend\resource\Comment::class;
}