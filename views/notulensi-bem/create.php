<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiBem */

$this->title = 'Create Notulensi Bem';
$this->params['breadcrumbs'][] = ['label' => 'Notulensi Bems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notulensi-bem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
