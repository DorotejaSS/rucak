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

    <p>
        <?= Html::a('Create Counter Porudzbina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'value' => function($model) {
               $model->glavnoJelo;
              
            }
            ],

            'id_porudzbina',
            'glavnoJelo.id_glavno_jelo',
            'id_prilog',
            'id_salata',
            'id_hleb',
            //'cena',
            //'created_on',
            //'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    ?>


</div>
