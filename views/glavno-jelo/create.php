<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GlavnoJelo */

$this->title = 'Create Glavno Jelo';
$this->params['breadcrumbs'][] = ['label' => 'Glavno Jelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glavno-jelo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
