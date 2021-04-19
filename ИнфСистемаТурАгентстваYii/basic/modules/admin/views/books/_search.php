<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\booksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'BuID') ?>

    <?= $form->field($model, 'Names') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Author') ?>

    <?= $form->field($model, 'Genre') ?>

    <?php // echo $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'AutID') ?>

    <?php // echo $form->field($model, 'GenID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
