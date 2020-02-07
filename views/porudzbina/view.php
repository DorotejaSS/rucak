<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Porudzbina */

$this->title = $model->id_porudzbina;
$this->params['breadcrumbs'][] = ['label' => 'Porudzbinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="porudzbina-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_porudzbina], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
            ]) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_porudzbina',
            [
                'attribute' => 'Glavno jelo',
                'value' => function($model) {
                    return $model->glavnoJelo[0]->ime_jela;
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
            'cena',
            'created_on',
        ],
        ]) ?>

</div>
