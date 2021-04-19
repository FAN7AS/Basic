<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №3';?>
	<link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />	
</head>
<body>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\widgets\LinkPager;
	use yii\jui\DatePicker;
	?> 
	<h2><i>Поиск по стране и дате пребывания:</i></h2>
		<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($modelOb1, 'country')-> label('Выберите страну:')->dropDownList($QueryFind1)?>
		<?= $form->field($modelOb1, 'date1')->label('C:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>

		<?= $form->field($modelOb1, 'date2')-> label('По:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date2,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
		<div class="form-group">
			<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
		</div>
		<?php ActiveForm::end(); ?>
		<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
			<hr><h3><i>В стране: <i><b><?= $valueC; ?></i></b> побывало Людей: <i><b><?= count($QueryResult); ?> <i/></b> </i></h3> 
		<?php }?>

		<hr><h2><i>Поиск по заданой категории:</i></h2>
		<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($modelOb2, 'category2')-> label('Выберите категорию:')->dropDownList([1=>'Пол',2=>'Возраст'])?>
		<div class="form-group">
			<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success',  'name' => 'button2','value' => 'button2']) ?>
		</div>
		<?php ActiveForm::end(); ?>
		<?php   if ($modelOb2->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button2') == 'button2'){ ?> 
			<?php  $form = ActiveForm::begin(); ?>
			<?= $form->field($modelOb3, 'values2')-> label('Введите значение:')->dropDownList($Query)?>
			<div class="form-group">
				<?= Html::submitButton('Отправить', ['class' => 'butextend1 btn btn-success','name' => 'button3','value' => 'button3']) ?>
			</div>
			<?php ActiveForm::end(); ?>
		<?php }?>
<?php if($modelOb3->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button3') == 'button3') { ?> 
			<hr><h3><i>Количество туристов :   <i><b><?= count($QueryCAT); ?> <i/></b> </i></h3> 
		<?php }?>


	<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query3'], ['class' => 'butextend1 btn btn-primary block']) ?>

</body>
</html>