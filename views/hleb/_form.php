<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hleb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hleb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime_hleba')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
