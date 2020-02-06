<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PorudzbinaS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="porudzbina-s-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_glavno_jelo')->textInput() ?>

    <?= $form->field($model, 'id_prilog')->textInput() ?>

    <?= $form->field($model, 'id_salata')->textInput() ?>

    <?= $form->field($model, 'id_hleb')->textInput() ?>

    <?= $form->field($model, 'cena')->textInput() ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
