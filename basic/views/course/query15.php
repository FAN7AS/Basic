<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №15';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\jui\DatePicker;
	use yii\grid\GridView;
	?>
	<h3>Сведения о туристах по заданному рейсу: </h3>
	<?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($modelOb1, 'Number')->label('Номер рейса:')->dropDownList($QueryNumber)?>
	<div class="form-group">
		<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
		
		<?php 
		echo GridView::widget([
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
					'attribute'=>'Гостиница',
					'value'=>'hotel.Title',

				],
				[ 
					'attribute'=>'Груз',
					'value'=>'stock.Title',

				],
				[ 
					'attribute'=>'Экскурсия',
					'value'=>'tour.Title',

				],


			],
		]); 
	   ?>
	<?php } ?>
	<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query15'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>