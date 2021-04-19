<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №8';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
	use yii\grid\GridView;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\jui\DatePicker;
	?>
	<h2>Период сдачи груза: </h2>
	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($modelOb1, 'period7')->label('C:')->widget(DatePicker::classname(),[
		'language' => 'ru',
		'value' => $modelOb1->date1,
		'dateFormat' => 'yyyy-MM-dd',
	])?>
	<?= $form->field($modelOb1, 'period8')->label('По:')->widget(DatePicker::classname(),[
		'language' => 'ru',
		'value' => $modelOb1->date1,
		'dateFormat' => 'yyyy-MM-dd',
	])?>
	<div class="form-group">
		<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
		<?php	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
				[ 
					'attribute'=>'Название',
					'value'=>'Title',

				],
				[ 
					'attribute'=>'Цена',
					'value'=>'Price',


				],
				[ 
					'attribute'=>'Вес',
					'value'=>'Weight',


				],
					[ 
					'attribute'=>'Количество самолётов, вывозивших этот груз',
					'value'=>'C',


				],





			],
		]); 
		?>

		<h2>Грузовых самолётов: <?php foreach ($QueryResult2 as $Query) { echo  $Query['CT'] ;} ?></h2>
		<h2>Грузопассажирских самолётов: <?php foreach ($QueryResult3 as $Query) { echo  $Query['CT'] ;} ?></h2>

	<?php }?>
	<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query9'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>