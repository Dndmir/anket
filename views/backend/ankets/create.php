<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\anket\models\Anket */

$this->title = 'Create Anket';
$this->params['breadcrumbs'][] = ['label' => 'Ankets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
