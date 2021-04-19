<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №12';?>
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
<?php 
?>
<h2>Статистика по грузооборту склада: </h2>
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
					'attribute'=>'Количество в общем грузопотке',
					'value'=>'C',

				],
					
						[ 
					'attribute'=>'Удельная доля груза (%)',
					'value'=>'Share',

				],
		


			],
		]); 
	   ?>
<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query12'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>