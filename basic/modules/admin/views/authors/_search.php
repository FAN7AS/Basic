<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\authorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AuID') ?>

    <?= $form->field($model, 'FIO') ?>

    <?= $form->field($model, 'POL') ?>

    <?= $form->field($model, 'DR') ?>

    <?= $form->field($model, 'DS') ?>

    <?php // echo $form->field($model, 'count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
