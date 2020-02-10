<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CounterPorudzbina */

$this->title = 'Create Counter Porudzbina';
$this->params['breadcrumbs'][] = ['label' => 'Counter Porudzbinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="counter-porudzbina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
