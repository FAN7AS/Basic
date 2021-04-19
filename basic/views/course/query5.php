<!DOCTYPE html>
<html>
<head>
<?php $this->title = 'Запрос №5';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" /></head>
<body>
<?php
	use yii\grid\GridView;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\jui\DatePicker;
?>
<?php $form = ActiveForm::begin(); ?>
	<h1><b><i>Поиск информации по Гостиницам: </i></b></h1>
	<?= $form->field($modelOb1, 'period1')->label('C:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
	<?= $form->field($modelOb1, 'period2')->label('По:')->widget(DatePicker::classname(),[
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
					'attribute'=>'Гостиница',
					'value'=>'Title',
				],
				[ 
					'attribute'=>'Количество занимаемых номеров',
					'value'=>'count',
				],
				[ 
					'attribute'=>'Проживающих человек',
					'value'=>'OccupiedPlaces',
				],
			],
		]); 
		?>
<?php } ?>	
    <?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
	<?php echo Html::a(' Обновить ' , ['/course/query5'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>