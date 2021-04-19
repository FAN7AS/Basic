<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'AutID')->textInput() ?>

    <?= $form->field($model, 'GenID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
