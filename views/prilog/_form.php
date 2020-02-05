<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prilog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prilog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime_priloga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
