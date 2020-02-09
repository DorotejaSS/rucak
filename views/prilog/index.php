<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrilogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prilog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prilog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prilog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prilog',
            'ime_priloga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
