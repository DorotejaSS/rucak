<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PorudzbinaS */

$this->title = 'Update Porudzbina S: ' . $model->id_porudzbina;
$this->params['breadcrumbs'][] = ['label' => 'Porudzbina Ss', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_porudzbina, 'url' => ['view', 'id' => $model->id_porudzbina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="porudzbina-s-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
