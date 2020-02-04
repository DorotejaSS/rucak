<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Glavno Jelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glavno-jelo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Glavno Jelo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'ime jela',
                'value' => 'ime_jela'
            ],
            'nedelja',
            'dan'
        ],
    ]); ?>


</div>
