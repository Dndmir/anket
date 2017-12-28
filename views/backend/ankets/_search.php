<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\anket\models\AnketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Anket') ?>

    <?= $form->field($model, 'olumlu_yanit') ?>

    <?= $form->field($model, 'olumsuz_yanit') ?>

    <?= $form->field($model, 'sure') ?>

    <?php // echo $form->field($model, 'tarih_saat') ?>

    <?php // echo $form->field($model, 'sonuc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
