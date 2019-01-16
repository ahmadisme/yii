<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotulensiLdkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notulensi Ldks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notulensi-ldk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notulensi Ldk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idnotldk',
            'tema:ntext',
            'tanggal_rapat',
            'notulensi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
