<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\anket\models\Anket */

$this->title = 'Update Anket: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ankets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
