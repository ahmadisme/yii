<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rapat */

$this->title = 'Create Rapat';
$this->params['breadcrumbs'][] = ['label' => 'Rapats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rapat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
