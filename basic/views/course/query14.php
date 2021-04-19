<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №14';?>
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
	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($modelOb1, 'period11')->label('C:')->widget(DatePicker::classname(),[
		'language' => 'ru',
		'value' => $modelOb1->date1,
		'dateFormat' => 'yyyy-MM-dd',
	])?>
	<?= $form->field($modelOb1, 'period12')->label('По:')->widget(DatePicker::classname(),[
		'language' => 'ru',
		'value' => $modelOb1->date1,
		'dateFormat' => 'yyyy-MM-dd',
	])?>
	<div class="form-group">
		<?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
		<h3>Процентное отношение отдыхающих туристов к туристам SHOP-туров за заданный период: </h3>
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
					'attribute'=>'Всего туристов',
					'value'=>'CTO',

				],
						[ 
					'attribute'=>'Отдыхающих туристов (%)',
					'value'=>'CT',

				],
					
						[ 
					'attribute'=>'Туристов шоп-туров (%)',
					'value'=>'CA',

				],
		


			],
		]); 
	   ?>
	<?php } ?>
	<h3>Процентное отношение отдыхающих туристов к туристам SHOP-туров в целом: </h3>

		<?php 
		echo GridView::widget([
			'dataProvider' => $dataProvider2,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			 'options' => [
         'class' => 'table',
              ],
			'columns' => 
			[
				[ 
					'attribute'=>'Всего туристов',
					'value'=>'CTO',

				],
						[ 
					'attribute'=>'Отдыхающих туристов (%)',
					'value'=>'CT',

				],
					
						[ 
					'attribute'=>'Туристов шоп-туров (%)',
					'value'=>'CA',

				],
		


			],
		]); 
	   ?>
	<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query14'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>