<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TouristsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tourists-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTO') ?>

    <?= $form->field($model, 'idCARG') ?>

    <?= $form->field($model, 'idTOU') ?>

    <?= $form->field($model, 'idHOT') ?>

    <?= $form->field($model, 'idFLIG') ?>

    <?php // echo $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'LastName') ?>

    <?php // echo $form->field($model, 'PD') ?>

    <?php // echo $form->field($model, 'Sex') ?>

    <?php // echo $form->field($model, 'Age') ?>

    <?php // echo $form->field($model, 'Children') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
