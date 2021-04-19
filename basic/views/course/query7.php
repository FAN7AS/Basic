<!DOCTYPE html>
<html>
<head>
<?php $this->title = 'Запрос №7';?>
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
<h2>Самая популярная экскурсия и самое качественное экскурсионное агентство. </h1>
<?php	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			
				[ 
					'attribute'=>'Экскурсия',
					'value'=>'Title',
				],
				[ 
					'attribute'=>'Агенство',
					'value'=>'Agency',
				],
				[ 
					'attribute'=>'Рейтинг популярности',
					'value'=>'PopularityRating',
				],
			],
		]); 
		?>
<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query7'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</body>
</html>