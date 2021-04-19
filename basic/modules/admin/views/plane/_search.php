<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PlaneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plane-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPlane') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'idAirport') ?>

    <?= $form->field($model, 'idCargo') ?>

    <?= $form->field($model, 'NumberOfSeat') ?>

    <?php // echo $form->field($model, 'WolumeWeight') ?>

    <?php // echo $form->field($model, 'Service') ?>

    <?php // echo $form->field($model, 'Type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
