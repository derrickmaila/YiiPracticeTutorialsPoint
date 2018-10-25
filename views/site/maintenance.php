<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/25
 * Time: 10:42
 */
use \yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
        <p>hello</p>
    <div class="alert alert-danger">

        <?= (Html::encode($msg)) ?>
        <h1><?= (Html::encode($msg)) ?></h1>
    </div>

</body>
</html>

