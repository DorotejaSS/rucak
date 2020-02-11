<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CounterPorudzbinaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Counter Porudzbinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="counter-porudzbina-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          
            [
            'attribute' => 'glavno_jelo',
            'value' => function($model) {
                return $model->glavnoJelo[0]->ime_jela;
            },
            ],
            [
                'attribute' => 'brojac',
                'value' =>function($model) {
                        return $model->brojac;
                }
            ],
        ],
    ]); 
    ?>


</div>
