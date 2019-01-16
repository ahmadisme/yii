<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiDpm */

$this->title = 'Create Notulensi Dpm';
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Dpms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notulensi-dpm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
