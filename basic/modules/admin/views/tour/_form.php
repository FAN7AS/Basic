<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tour */
/* @var $form yii\widgets\ActiveForm */
?>
 <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />
<div class="tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Agency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'TourDate')->widget(DatePicker::classname(),[
        'language' => 'ru',
        'value' => $model->TourDate,
        'dateFormat' => 'yyyy-MM-dd',
    ])?> 
    <!--  <?= $form->field($model, 'TourDate')->textInput() ?> -->

    <?= $form->field($model, 'Price')->textInput() ?>

    <?= $form->field($model, 'Tax')->textInput() ?>

    <?= $form->field($model, 'PopularityRating')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
