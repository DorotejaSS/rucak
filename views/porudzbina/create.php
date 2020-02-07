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
        'glavno_jelo' => $glavno_jelo,
        'prilog' => $prilog,
        'salata' => $salata,
        'hleb' => $hleb,
        'cena' => $cena,
        'id' => $user_id
        ]) ?>
       
</div>
