<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlavnoJelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="glavno-jelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nesto')
                ->dropDownList(
                    $model,
                    ['value' => 'ime_jela']

                ); ?>
        
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    
        <?php ActiveForm::end(); ?>


</div>