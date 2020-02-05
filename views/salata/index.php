<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SalataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Salata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_salata',
            'ime_salate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
