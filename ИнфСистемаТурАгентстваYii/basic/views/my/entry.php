	<!DOCTYPE html>
	<html>
	<head>
		<title>	</title>
		<style type="text/css">
			.a
			{
outline: none;
 display: flex;
 width: 400px;
 height: 35px;
 border-radius: 5px;
 border-color: green;
 border:2px solid green;
			}
			.b {
outline: none;
 display: flex;
 width: 80px;
 height: 35px;
 border-radius: 5px;
 border-color: green;
 border:2px solid green;
 }
 			.c {
outline: none;
 display: flex;
 width: 20px;
 height: 25px;
 border-radius: 5px;
 border-color: green;
 border:1.5px solid green;	
 }

 			.d
			{
			color: red;
outline: none;
 display: flex;
 width: 200px;
 height: 35px;
 border-radius: 5px;
 border-color: green;
 border:2px solid green;
 font-size: 16px;
			}

			 option {
			
 color:blue;
 font-size: 16px;
 }
input[type=radio] {
  position: relative;
  height: 16px;
  width: 16px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
}
input[type='radio']::before {
	outline: none;
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 19px;
  height: 19px;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  border: 2px solid dodgerblue;
}

input[type='radio']:checked::after {
		outline: none;
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: dodgerblue;
  transform: translate(-50%, -50%);
  visibility: visible;
}
input[type="radio"]:focus {  
outline: none;
}
.e {
	outline: none;
 display: flex;
 width: 400px;
 height: 35px;
 border-radius: 5px;
 border-color: green;
 border:2px solid green;
 max-width: 500px;
 max-height: 150px;
 min-height: 40px;
}
		</style>
	</head>
	<body>
		 <div class="alert alert-success">
          Лабораторная работа №1.
        </div>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
		use yii\widgets\MaskedInput;
	?>
	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name')-> label('Имя')->textInput(['class'=>'a'])?>
	<?= $form->field($model, 'email')->label('Почта')->textInput(['class'=>'a'])?>
	<?= $form->field($model, 'date')->widget(MaskedInput::className(), ['mask' => '99/99/9999',])->textInput(['class'=>'b'])?>
	<?= $form->field($model, 'age')->label('Возраст')->widget(MaskedInput::className(), ['mask' => '99',])->textInput(['class'=>'c'])?>
	<?= $form->field($model, 'favkitchen')->label('Любимая кухня')->dropdownlist(['Русская','Армянская','Грузинская'],['class'=>'d'])?>
	<?= $form->field($model, 'choice')->label(' Порекомендуете друзьям?')->radiolist(['1'=>'Да','2'=>'Нет']) ?>
	<?= $form->field($model, 'textarea')-> label('Имя')->textarea(['class'=>'e']) ?>

	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	    </div>
	<?php ActiveForm::end(); ?>
	
	</body>
	</html>
	
