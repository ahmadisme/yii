<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiLdk */

$this->title = 'Update Notulensi Ldk: ' . $model->idnotldk;
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Ldks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnotldk, 'url' => ['view', 'id' => $model->idnotldk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notulensi-ldk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
