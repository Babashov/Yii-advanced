<?php


namespace frontend\models;


use yii\base\Model;

class Test extends Model
{
    public $name;
    public $surname;
    public $age;


    public function attributeLabels()
    {
        return [
            "name"=>"Enter your name",
            "surname"=>"Enter Your Surname",
            "age"=>"Enter Your Age"
        ];
    }
    public function rules()
    {
        return [
          [["age","surname"],"required","message"=>"Please enter your age its my custom message","message"=>"Surname Error"]
        ];
    }

}