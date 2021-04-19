<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Plane;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Flight */
/* @var $form yii\widgets\ActiveForm */
?>
    <link href="../../../styles1/date.css" rel="stylesheet" type="text/css" />

<div class="flight-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'idPL')->dropDownList(ArrayHelper::map(Plane::find()->all(),'idPlane','Title')) ?>

   
    <?= $form->field($model, 'NumberOfFlight')->textInput() ?>

    <?= $form->field($model, 'DestinationCountry')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'DepartureDate')->widget(DatePicker::classname(),[
            'language' => 'ru',
            'value' => $model->DepartureDate,
            'dateFormat' => 'yyyy-MM-dd',
        ])?> 

     <?= $form->field($model, 'ReturnDate')->widget(DatePicker::classname(),[
            'language' => 'ru',
            'value' => $model->ReturnDate,
            'dateFormat' => 'yyyy-MM-dd',
        ])?> 
     <!-- <?= $form->field($model, 'DepartureDate')->textInput() ?>
    <?= $form->field($model, 'ReturnDate')->textInput() ?> -->

    <?= $form->field($model, 'Price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
