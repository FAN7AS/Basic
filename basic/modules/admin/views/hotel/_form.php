<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */
/* @var $form yii\widgets\ActiveForm */
?>
 <link href="../../../styles1/date.css" rel="stylesheet" type="text/css" />
<div class="hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput() ?>
    <?= $form->field($model, 'CheckInDate')->widget(DatePicker::classname(),[
        'language' => 'ru',
        'value' => $model->CheckInDate,
        'dateFormat' => 'yyyy-MM-dd',
    ])?> 
    <?= $form->field($model, 'DateOfEviction')->widget(DatePicker::classname(),[
        'language' => 'ru',
        'value' => $model->DateOfEviction,
        'dateFormat' => 'yyyy-MM-dd',
    ])?> 
   <!--  <?= $form->field($model, 'CheckInDate')->textInput() ?>

    <?= $form->field($model, 'DateOfEviction')->textInput() ?> -->

    <?= $form->field($model, 'OccupiedPlaces')->textInput() ?>

    <?= $form->field($model, 'Rent')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
