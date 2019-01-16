<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiBem */

$this->title = 'Update Notulensi Bem: ' . $model->idnotbem;
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Bems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnotbem, 'url' => ['view', 'id' => $model->idnotbem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notulensi-bem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
