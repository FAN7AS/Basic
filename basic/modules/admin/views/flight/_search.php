<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FlightSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flight-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFLIG') ?>

    <?= $form->field($model, 'idPL') ?>

    <?= $form->field($model, 'NumberOfFlight') ?>

    <?= $form->field($model, 'DestinationCountry') ?>

    <?= $form->field($model, 'DepartureDate') ?>

    <?php // echo $form->field($model, 'ReturnDate') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
