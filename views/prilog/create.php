<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prilog */

$this->title = 'Create Prilog';
$this->params['breadcrumbs'][] = ['label' => 'Prilogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prilog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
