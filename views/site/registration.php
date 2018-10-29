<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 08:43
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>

<div class="row">
        <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'registration-form',
                    'enableAjaxValidation' => true]); ?>
                <?= $form->field($model,'username') ?>
                <?= $form->field($model,'password')->passwordInput() ?>
                <?= $form->field($model,'email')->input('email') ?>
                <?= $form->field($model,'country') ?>
                <?= $form->field($model,'city')?>
                <?= $form->field($model,'phone') ?>
                <?= $form->field($model,'photos[]')->fileInput(['multiple' => 'multiple']) ?>
                <?= $form->field($model,'subscriptions[]')->checkboxList(['a' => 'Item A',
                                 'b' => 'Item B', 'c' => 'Item C' ]) ?>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary',
                    'name' => 'registration-button'])?>
            </div>
            <?php ActiveForm::end();?>


        </div>
</div>
