<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №1';?>
</head>
<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />	
</head>
<body>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\widgets\LinkPager;
	use yii\grid\GridView;
	?>
	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($modelOb1, 'category')-> label('Выберите категорию:')->dropDownList([1=>'Имя',2=>'Фамилия',3=>'Возраст	'])?>
	<div class="form-group">
		<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	<?php   if ($modelOb1->load(Yii::$app->request->post() )) {  ?> 
		<?php  $form = ActiveForm::begin(); ?>
		<?= $form->field($modelOb2, 'category')-> label('Введите значение:')-> dropDownList($Query)?>
		<div class="form-group">
			<?= Html::submitButton('Отправить', ['class' => 'butextend1 btn btn-success']) ?>
		</div>
		<?php ActiveForm::end(); ?>
	<?php }?>

	<?php   if ($modelOb2->load(Yii::$app->request->post() )) {  ?> 
		<h3><i>Список туристов по заданной категории: </i></h3>

	<?php 	echo GridView::widget([
			'dataProvider' => $dataProvider2,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			
				[ 
					'attribute'=>'Имя',
					'value'=>'Name',
				],
				[ 
					'attribute'=>'Фамилия',
					'value'=>'LastName',
				],
				[ 
					'attribute'=>'Пол',
					'value'=>'Sex',
				],
				[ 
					'attribute'=>'Возраст',
					'value'=>'Age',
				],
				
				
			],
		]); 
		?>
	<?php }?>
	<h3><i>Список туристов в целом</i></h3>
	<?php 	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			
				[ 
					'attribute'=>'Имя',
					'value'=>'Name',
				],
				[ 
					'attribute'=>'Фамилия',
					'value'=>'LastName',
				],
				[ 
					'attribute'=>'Пол',
					'value'=>'Sex',
				],
				[ 
					'attribute'=>'Возраст',
					'value'=>'Age',
				],
				
				
			],
		]); 
		?>
	<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query1'], ['class' => 'butextend1 btn btn-primary block']) ?>

</body>
</html>