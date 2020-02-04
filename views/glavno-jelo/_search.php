<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlavnoJeloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="glavno-jelo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_glavno_jelo') ?>

    <?= $form->field($model, 'ime_jela') ?>

    <?= $form->field($model, 'nedelja') ?>

    <?= $form->field($model, 'dan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
