<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PorudzbinaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'U ponudi imamo:';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porudzbina-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Napravi Porudzbinu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider_glavno_jelo,
        'filterModel' => $searchModel_glavno_jelo,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ime_jela',
            'nedelja', 
         
            [
                'attribute' => 'dan',
                'value' => function($model) {
                    dump($model->iddana);
                    die;
                }
            ],
    
        ],
    ]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider_prilog,
        'filterModel' => $searchModel_prilog,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ime_priloga',
        ],
    ]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider_salata,
        'filterModel' => $searchModel_salata,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ime_salate',
        ],
    ]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider_hleb,
        'filterModel' => $searchModel_hleb,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ime_hleba',
        ],
    ]); ?>


</div>
