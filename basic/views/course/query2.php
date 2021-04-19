<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №2';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />	

</head>
<body>

<?php
    use yii\grid\GridView;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
    use yii\widgets\LinkPager;
?> 
	<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($modelOb1, 'values1')-> label('Выберите Отель:')->dropDownList($QueryFind)?>
	

	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success']) ?>
	    </div>
	<?php ActiveForm::end(); ?>
	 <?php   if ($modelOb1->load(Yii::$app->request->post() )) {  ?> 
	<h3><i>Список туристов на расселение по заданной Гостинице: </i></h3> 

<?php	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			[ 
					'attribute'=>'Гостиница',
					'value'=>'Title',
				],
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
<h3><i>Список туристов на расселение по  Гостиницам в целом : </i></h3> 
<?php 	echo GridView::widget([
			'dataProvider' => $dataProvider2,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			[ 
					'attribute'=>'Гостиница',
					'value'=>'Title',
				],
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
<?php echo Html::a(' Обновить ' , ['/course/query2'], ['class' => 'butextend1 btn btn-primary block']) ?>

</body>
</html>