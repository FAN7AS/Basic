<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №4';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />	
</head>
<body>

<?php
	use yii\grid\GridView;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
?>
	<?php $form = ActiveForm::begin(); ?>
	<h1><b><i>Поиск информации по туристу: </i></b></h1>
	<?= $form->field($modelOb1, 'touristName')-> label('Имя:')->dropDownList($QueryTouristsName)?>
	<?= $form->field($modelOb1, 'touristLastName')-> label('Фамилия:')->dropDownList($QueryTouristsLastName)?>
	<div class="form-group">
	    <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>
<?php if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')	 { ?>


<?php	echo GridView::widget([
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
					'attribute'=>'Паспортные данные',
					'value'=>'PD',
				],
				[ 
					'attribute'=>'Дата прибытия',
					'value'=>'DepartureDate',
				],
				[ 
					'attribute'=>'Дата возвращения',
					'value'=>'ReturnDate',
				],
					[ 
					'attribute'=>'Посещенные гостиницы',
					'value'=>'HT',
				],
				[ 
					'attribute'=>'Сданный груз',
					'value'=>'ST',
				],
				[ 
					'attribute'=>'Агенства',
					'value'=>'Agency',
				],
				[ 
					'attribute'=>'Посещенные экскурсии',
					'value'=>'TT',
				],
				
			],
		]); 
		?>
<h3>Посещений страны: <?php echo count($count) ?></h3>
<?php } ?>
<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query4'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>