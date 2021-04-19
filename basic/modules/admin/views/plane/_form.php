<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Airport;
use app\models\Stock;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plane */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plane-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idAirport')->dropDownList(ArrayHelper::map(Airport::find()->all(),'idAir','Title')) ?>

     <?= $form->field($model, 'idCargo')->dropDownList(ArrayHelper::map(Stock::find()->all(),'idCA','Title')) ?>

    <?= $form->field($model, 'NumberOfSeat')->textInput() ?>

    <?= $form->field($model, 'WolumeWeight')->textInput() ?>

    <?= $form->field($model, 'Service')->textInput() ?>

   <?= $form->field($model, 'Type')->dropDownList([0=>'Грузопассажирский',1=>'Грузовой']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
