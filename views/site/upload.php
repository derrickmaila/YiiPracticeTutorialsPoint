<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 14:50
 */
   use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
<?= $form->field($model, 'image')->fileInput() ?>
    <button>Submit</button>
<?php ActiveForm::end() ?>