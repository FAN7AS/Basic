<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Hotel;
use app\models\Stock;
use app\models\Tour;
use app\models\Flight;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tourists */
/* @var $form yii\widgets\ActiveForm */
?>
<?php ?>
<div class="tourists-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCARG')->dropDownList(ArrayHelper::map(Stock::find()->all(),'idCA','Title'),['prompt'=>'']) ?>
 
    <?= $form->field($model, 'idTOU')->dropDownList(ArrayHelper::map(Tour::find()->all(),'idTOUR','Title'),['prompt'=>'']) ?>
    <?= $form->field($model, 'idHOT')->dropDownList(ArrayHelper::map(Hotel::find()->all(),'idHOT','Title')) ?>

    <?= $form->field($model, 'idFLIG')->dropDownList(ArrayHelper::map(Flight::find()->all(),'idFLIG','NumberOfFlight')) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Age')->textInput() ?>

    <?= $form->field($model, 'Children')->dropDownList([0=>'Нет',1=>'Есть']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
