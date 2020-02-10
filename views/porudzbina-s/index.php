<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PorudzbinaSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Porudzbine';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porudzbina-s-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_porudzbina',
            [
                'attribute' => 'glavno_jelo',
                // 'value' => function($model) {
                //    return $model->glavnoJelo->ime_jela;
                // }
                'value' => 'glavnoJelo.ime_jela'
            ],
            [
                'attribute' => 'prilog',
                'value' => function($model) {
                   return $model->prilog->ime_priloga;
                }
            ],
            [
                'attribute' => 'salata',
                'value' => function($model) {
                   return $model->salata->ime_salate;
                }
            ],
            [
                'attribute' => 'hleb',
                'value' => function($model) {
                   return $model->hleb->ime_hleba;
                }
            ],
            [
                'attribute' => 'cena',
                'value' => function($model) {
                   return $model->cena;
                }
            ],
            'created_on',
            [
                'attribute' => 'user',
                'value' => function($model) {
                   return $model->id_user;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
