<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GlavnoJeloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Glavno Jelo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glavno-jelo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Glavno Jelo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'ime_jela',
            
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>


</div>
