<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CounterPorudzbina */

$this->title = 'Update Counter Porudzbina: ' . $model->id_porudzbina;
$this->params['breadcrumbs'][] = ['label' => 'Counter Porudzbinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_porudzbina, 'url' => ['view', 'id' => $model->id_porudzbina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="counter-porudzbina-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
