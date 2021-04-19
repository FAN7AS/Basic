<!DOCTYPE html>
<html>
<head>
		<?php $this->title = 'Запрос №11';?>
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
<h3>Данные о доходах и расхохдах за определенный период</h3>
<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($modelOb1, 'period8')->label('C:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
	<?= $form->field($modelOb1, 'period9')->label('По:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
	<div class="form-group">
	    <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>

<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
	<h3>Расходы по таблице Самолёты</h3>
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
					'attribute'=>'Расходы',
					'value'=>'Service',


				],
					
			


			],
		]); 
	   ?>
<h3>Расходы по таблице Гостиницы</h3>
	<?php	echo GridView::widget([
			'dataProvider' => $dataProvider2,
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
					'attribute'=>'Доходы',
					'value'=>'TotalAdd',
				

				],
					[ 
					'attribute'=>'Расходы',
					'value'=>'TotalExp',
				

				],
					
			


			],
		]); 
	   ?>
<h3>Расходы по таблице Экскурсии</h3>
	<?php	echo GridView::widget([
			'dataProvider' => $dataProvider3,
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
					'attribute'=>'Доходы',
					'value'=>'TotalAdd',
				

				],
					[ 
					'attribute'=>'Расходы',
					'value'=>'TotalExp',
				

				],
					
			


			],
		]); 
	   ?>
	<?php } ?>
<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query11'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>