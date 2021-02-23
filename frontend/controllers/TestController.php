<?php


namespace frontend\controllers;


use frontend\actions\TestAction;
use frontend\models\Test;
use yii\web\Controller;

class TestController extends Controller
{
    public function actions()
    {
        return [
          'tests'=>[
              "class"=>TestAction::class
          ]
        ];
    }

    public function actionModel()
    {
        echo "<br/>";

        $testModel = new Test();
        $testModel->name = "Mehemmed";
        $testModel['surname'] = 123456;
//        var_dump($testModel->surname);
//        var_dump($testModel->getAttributeLabel('name'));
//        foreach ($testModel as $key=>$value)
//        {
//            echo $key . " " . $testModel->getAttributeLabel($key) . " = " . $testModel->getAttributeLabel($value) . "<br/>";
//        }

        if($testModel->validate())
        {
            echo "Everything Ok";
        }else{
            var_dump($testModel->errors);
            echo "error happened";
        }

    }

    public function actionResponse()
    {
        $res = \Yii::$app->response;
        $res->format = \yii\web\Response::EVENT_BEFORE_SEND;
//        echo  $res->data = "Hello World";
//        return [
//            "msg"=>"hello world"
//        ];
    }

    public function actionLayout()
    {
        $this->layout = "basic";

        return $this->render('lay');
    }

    public function actionRequest()
    {
        $req = \Yii::$app->request;
        var_dump($req->get("id","40"));
    }

    public $layout = "admin";
    public $defaultAction = "test";
    public function beforeAction($action)
    {
//        echo "Controller Before Action";
        return parent::beforeAction($action);
    }

    public function actionTest($message = "Hello World")
    {
        return $this->render("test_view",[
            'a'=>1,
            'b'=>2,
            'msg'=>$message
        ]);
        return $this->renderContent("Test Render Content");
    }
}