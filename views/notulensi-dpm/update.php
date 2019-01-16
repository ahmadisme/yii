<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiDpm */

$this->title = 'Update Notulensi Dpm: ' . $model->idnotdpm;
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Dpms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnotdpm, 'url' => ['view', 'id' => $model->idnotdpm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notulensi-dpm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
