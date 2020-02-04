<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OdrediCenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="odredi-cenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trenutna_cena')->textInput()->label('Trenutna cena: '.$model->trenutna_cena) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
