<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 13:46
 */

use yii\bootstrap\Alert;
echo Alert::widget([
    'options' => ['class' => 'alert-info'],
    'body' => Yii::$app->session->getFlash('greeting'),
]);
?>

