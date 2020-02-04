<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OdrediCenu */

$this->title = 'Odredi Cenu: ';
$this->params['breadcrumbs'][] = ['label' => 'Odredi Cenu', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Izmeni';
?>
<div class="odredi-cenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
