<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/08
 * Time: 14:42
 */
    namespace app\controllers;
    use yii\web\Controller;

    class ExampleController extends Controller{
        public function actions(){
            return [
                'greeting' => 'app\components\GreetingAction',
            ];
        }
        public function actionIndex(){
            $message = "index action of the ExampleController";
            return $this->render("example",["message" => $message]);
        }
        public function actionHelloWorld(){
            return "Hello world!";
        }
        public function actionOpenGoogle(){
            //redirect the user browser to http://google.com
            $google = "http://google.com";
            return $this->redirect($google);
        }
        public function actionTestParams(String $first,String $second){

            $message = "My name is " . $first. " and surname is ".$second;

            return $message;
        }
    }

?>