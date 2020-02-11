<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OsobaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Osobas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="osoba-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Osoba', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           
            [
                'attribute' => 'dugovanja',
                'value' => function($model) {
                    return $model->porudzbinas;
                }
            ],
            'id_user',
            'username',
            'email:email',
            'password_hash',
            'auth_key',
            //'confirmed_at',
            //'unconfirmed_email:email',
            //'blocked_at',
            //'registration_ip',
            //'created_at',
            //'updated_at',
            //'flags',
            //'last_login_at',

            [
                
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update}{view}'
            ],
        ],
    ]); ?>


</div>
