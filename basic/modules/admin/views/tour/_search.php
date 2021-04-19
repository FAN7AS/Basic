<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TourSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTOUR') ?>

    <?= $form->field($model, 'Agency') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'TourDate') ?>

    <?= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Tax') ?>

    <?php // echo $form->field($model, 'PopularityRating') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
