<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\HotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idHOT') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'Price') ?>

    <?= $form->field($model, 'CheckInDate') ?>

    <?= $form->field($model, 'DateOfEviction') ?>

    <?php // echo $form->field($model, 'OccupiedPlaces') ?>

    <?php // echo $form->field($model, 'Rent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
