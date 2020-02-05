<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hleb */

$this->title = 'Update Hleb: ' . $model->id_hleb;
$this->params['breadcrumbs'][] = ['label' => 'Hlebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hleb, 'url' => ['view', 'id' => $model->id_hleb]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hleb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
