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
            'id_glavno_jelo',
            'id_prilog',
            'id_salata',
            'id_hleb',
            'cena',
            'created_on',
            'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
