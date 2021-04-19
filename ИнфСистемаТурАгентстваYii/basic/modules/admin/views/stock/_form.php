<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>
    <link href="../../../styles1/date.css" rel="stylesheet" type="text/css" />

<div class="stock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'Weight')->textInput() ?>

     <?= $form->field($model, 'DateOfDelivery')->widget(DatePicker::classname(),[
            'language' => 'ru',
            'value' => $model->DateOfDelivery,
            'dateFormat' => 'yyyy-MM-dd',
        ])?> 
    <!-- <?= $form->field($model, 'DateOfDelivery')->textInput() ?> -->

    <?= $form->field($model, 'Rent')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
