<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hleb */

$this->title = 'Create Hleb';
$this->params['breadcrumbs'][] = ['label' => 'Hlebs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hleb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
