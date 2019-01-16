<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NotulensiDpm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notulensi-dpm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_rapat')->textInput() ?>

    <?= $form->field($model, 'notulensi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
