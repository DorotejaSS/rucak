<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlavnoJelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="glavno-jelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime_jela')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nedelja')->textInput() ?>

    <?= $form->field($model, 'id_dan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
