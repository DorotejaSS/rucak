<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PorudzbinaSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Porudzbina Ss';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porudzbina-s-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Porudzbina S', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_porudzbina',
            [
                'attribute' => 'Glavno jelo',
                'value' => function($model) {
                   return $model->glavnoJelo->ime_jela;
                }
            ],
            [
                'attribute' => 'Prilog',
                'value' => function($model) {
                   return $model->prilog->ime_priloga;
                }
            ],
            [
                'attribute' => 'Salata',
                'value' => function($model) {
                   return $model->salata->ime_salate;
                }
            ],
            [
                'attribute' => 'Hleb',
                'value' => function($model) {
                   return $model->hleb->ime_hleba;
                }
            ],
            [
                'attribute' => 'Cena',
                'value' => function($model) {
                   return $model->cena;
                }
            ],
            'created_on',
            [
                'attribute' => 'User',
                'value' => function($model) {
                   return $model->id_user;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
