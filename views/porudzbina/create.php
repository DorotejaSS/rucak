<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Porudzbina */

$this->title = 'Napravi Porudzbinu';
$this->params['breadcrumbs'][] = ['label' => 'Porudzbina', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="porudzbina-create">

    <h1><?= Html::encode($this->title) ?></h1>
   

    <?= $this->render('_form', [
        'model' => $model,
        '_glavno_jelo' => $_glavno_jelo,
        '_prilog' => $_prilog,
        '_salata' => $_salata,
        '_hleb' => $_hleb,
        'cena' => $cena,
        'id' => $user_id
        ]) ?>
       
</div>
