<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiBemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notulensi-bem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idnotbem') ?>

    <?= $form->field($model, 'tema') ?>

    <?= $form->field($model, 'tanggal_rapat') ?>

    <?= $form->field($model, 'notulensi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
