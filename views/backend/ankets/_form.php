<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\anket\models\Anket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Anket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'olumlu_yanit')->textInput() ?>

    <?= $form->field($model, 'olumsuz_yanit')->textInput() ?>

    <?= $form->field($model, 'sure')->textInput() ?>

    <?= $form->field($model, 'tarih_saat')->textInput() ?>

    <?= $form->field($model, 'sonuc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
