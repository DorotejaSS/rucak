<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Hleb;
use app\models\Prilog;
use kartik\export\ExportMenu;




/* @var $this yii\web\View */
/* @var $searchModel app\models\PorudzbinaSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Porudzbine';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porudzbina-s-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <?php
    $gridColumns = [
        'glavnoJelo.ime_jela',
        'prilog.ime_priloga',
        'salata.ime_salate',
        'hleb.ime_hleba',
        'created_on',
        'cena',
        'user.id_user'
    ];

    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'exportConfig' => [
            ExportMenu::FORMAT_PDF => false
        ]
    ]);
 ?>
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
                'value' => 'prilog.ime_priloga',
                'filter' => Html::activeDropDownList($searchModel, 
                    'id_prilog', ArrayHelper::map(Prilog::find()->asArray()->all(), 'id_prilog', 'ime_priloga'))
            ],
            [
                'attribute' => 'salata',
                'value' => function($model) {
                   return $model->salata->ime_salate;
                }
            ],
         
            [
                'attribute' => 'hleb',
                'value' => 'hleb.ime_hleba',
                'filter' => Html::activeDropDownList($searchModel, 
                    'id_hleb', ArrayHelper::map(Hleb::find()->asArray()->all(), 'id_hleb', 'ime_hleba'))
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
