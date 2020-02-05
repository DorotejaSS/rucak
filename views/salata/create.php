<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Salata */

$this->title = 'Create Salata';
$this->params['breadcrumbs'][] = ['label' => 'Salatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
