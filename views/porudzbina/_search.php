<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PorudzbinaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="porudzbina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_porudzbina') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_glavno_jelo') ?>

    <?= $form->field($model, 'id_prilog') ?>

    <?= $form->field($model, 'id_salata') ?>

    <?php // echo $form->field($model, 'id_hleb') ?>

    <?php // echo $form->field($model, 'cena') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
