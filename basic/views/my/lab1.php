	<!DOCTYPE html>
	<html>
	<head>
		<title>	</title>
<link href="../../../styles/first.css" rel="stylesheet" type="text/css" />	</head>
	<body>
		 <div class="alert alert-success">
          Лабораторная работа №1.
        </div>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
		use yii\widgets\MaskedInput;
	?>
	<div class="col col-lg-6">
	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name')-> label('Ваше Имя:')->textInput(['class'=>'a'])?>
	<?= $form->field($model, 'email')->label('Ваш e-mail:')->textInput(['class'=>'a'])?>

	<?= $form->field($model, 'age')->label('Ваш Возраст:')->textInput(['class'=>'c'])?>
		<?= $form->field($model, 'date')->label('Дата посещения:')->textInput(['class'=>'b'])?>
	<?= $form->field($model, 'favkitchen')->label('Любимая кухня')->dropdownlist(['Русская','Армянская','Грузинская'],['class'=>'d'])?>
	<?= $form->field($model, 'choice')->label(' Порекомендуете нас друзьям?')->radiolist(['1'=>'Да','2'=>'Нет'],['class'=>'b']) ?>
	<?= $form->field($model, 'textarea')-> label('Текст отзыва')->textarea(['class'=>'e']) ?>

	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
	    </div>
	<?php ActiveForm::end(); ?>
</div>
      <?php     if (Yii::$app->request->post() ) {  ?> 
      	<div class ="col col-lg-6"><h1 style='font-size: 28px'>Переданный отзыв:</h1><br>
<table class="table table-striped", style="border: 3px solid aqua">
    <tr>
      <th>Ваше имя:</th>
      <td><?php echo $model->name ?></td>
    </tr>
    <tr>
      <th >Ваш e-mail:</th>
      <td><?php echo $model->email ?></td>
    </tr>
    <tr>
      <th >Дата посещения :</th>
      <td><?php echo $model->date ?></td>
    </tr>
    <tr>
      <th>Ваш возраст:</th>
      <td><?php echo $model->age ?></td>
    </tr>
     <tr>
      <th>Любимая кухня:</th>
      <td><?php echo $model->favkitchen ?></td>
    </tr>
     <tr>
      <th>Порекомендуете нас друзьям?</th>
      <td><?php echo $model->choice ?></td>
    </tr>
     <tr>
      <th>Текст отзыва</th>
      <td><?php echo $model->textarea ;}  ?></td>
    </tr>
</table>


	</body>
	</html>
	
