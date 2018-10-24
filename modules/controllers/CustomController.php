<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/22
 * Time: 10:01
 */

namespace app\modules\hello\controllers;
use yii\web\Controller;

class CustomController extends Controller{
    public function actionGreet(){
        return $this->render('greet');
    }
}