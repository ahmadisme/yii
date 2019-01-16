<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiLdk */

$this->title = 'Create Notulensi Ldk';
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Ldks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notulensi-ldk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
