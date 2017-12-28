<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\anket\models\AnketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ankets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Anket',
            'olumlu_yanit',
            'olumsuz_yanit',
            'sure',
            //'tarih_saat',
            //'sonuc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
