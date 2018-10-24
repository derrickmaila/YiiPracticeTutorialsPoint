<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/13
 * Time: 21:57
 */

namespace app\components;
use yii\base\Action;

class GreetingAction extends Action{
    public function run(){
        return "Greeting";
    }
}
?>