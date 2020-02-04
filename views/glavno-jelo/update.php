<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlavnoJelo */

$this->title = 'Update Glavno Jelo: ' . $model->id_glavno_jelo;
$this->params['breadcrumbs'][] = ['label' => 'Glavno Jelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_glavno_jelo, 'url' => ['view', 'id' => $model->id_glavno_jelo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="glavno-jelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
