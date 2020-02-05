<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prilog */

$this->title = 'Update Prilog: ' . $model->id_prilog;
$this->params['breadcrumbs'][] = ['label' => 'Prilogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prilog, 'url' => ['view', 'id' => $model->id_prilog]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prilog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
