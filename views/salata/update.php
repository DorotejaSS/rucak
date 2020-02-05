<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Salata */

$this->title = 'Update Salata: ' . $model->id_salata;
$this->params['breadcrumbs'][] = ['label' => 'Salatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_salata, 'url' => ['view', 'id' => $model->id_salata]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
