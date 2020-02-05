<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Porudzbina */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="porudzbina-form">

    <?php $form = ActiveForm::begin(); ?>

    <label>Glavno jelo:</label>
    <?= Html::activeDropDownList($model, 'id_glavno_jelo', $_glavno_jelo) ?> 
    <label>Prilog:</label>
    <?= Html::activeDropDownList($model, 'id_prilog', $_prilog) ?> 
    <label>Salata:</label>
    <?= Html::activeDropDownList($model, 'id_salata', $_salata) ?> 
    <label>Hleb:</label>
    <?= Html::activeDropDownList($model, 'id_hleb', $_hleb) ?> 
  

    <div class="form-group">
        <?= Html::submitButton('Naruci', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
