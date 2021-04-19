	<!DOCTYPE html>
<html>
<head>
		<?php $this->title = 'Запрос №10';?>
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
	
	<?= $form->field($modelOb1, 'CategoryRaport')->label('Выбор категории:')->dropDownList([1=>'Гостиницы',2=>'Склад',3=>'Рейсы',4=>'Экскурсии'])?>
		<div class="form-group">
	    <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
	<?php ActiveForm::end(); ?>
<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
	<h1><i>Финансовый отчёт по категории <b><?=$CategoryRap ?></b> в целом</i></h1>
<?php	if ($CategoryRap == 'Рейсы') { ?>
<?php	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			[ 
					'attribute'=>'Номер рейса',
					'value'=>'NumberOfFlight',
				],
				
				[ 
					'attribute'=>'Итог( ₽)',
					'value'=>'TotalTot',
				],
				
				
				
			],
		]); 
		?>
<?php } ?>
<?php	if ($CategoryRap == 'Гостиницы' || $CategoryRap == 'Склад'|| $CategoryRap == 'Экскурсии') { ?>
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
					'attribute'=>'Доходы( ₽)',
					'value'=>'TotalAdd',
				],
				[ 
					'attribute'=>'Расходы( ₽)',
					'value'=>'TotalExp',
				],
				[ 
					'attribute'=>'Итог( ₽)',
					'value'=>'TotalTot',
				],
				
				
				
			],
		]); 
		?>
<?php }?>
<?php } ?>
<?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($modelOb1, 'CategoryRaport2')->label('Выбор категории:')->dropDownList([1=>'Гостиницы',2=>'Склад',3=>'Рейсы',4=>'Экскурсии'])?>
	<?= $form->field($modelOb1, 'CategoryRaport3')->label('Выбор пола:')->dropDownList($QuerySex)?>
		<div class="form-group">
	    <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button2','value' => 'button2']) ?>
	</div>
	<?php ActiveForm::end(); ?>
	<?php if($modelOb2->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button2') == 'button2') {?> 
	<h1><i>Финансовый отчёт по категории - пол:  <b><?=$CategoryRap3 ?> </b></i></h1>
<?php	if ($CategoryRap == 'Рейсы') { ?>
<?php	echo GridView::widget([
			'dataProvider' => $dataProvider,
			'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '---'],
			'options' => [
				'class' => 'table',
			],
			'columns' => 
			[
			[ 
					'attribute'=>'Номер рейса',
					'value'=>'NumberOfFlight',
				],
				
				[ 
					'attribute'=>'Итог( ₽)',
					'value'=>'TotalTot',
				],
				
				
				
			],
		]); 
		?>
<?php } ?>
<?php	if ($CategoryRap == 'Гостиницы' || $CategoryRap == 'Склад'|| $CategoryRap == 'Экскурсии') { ?>
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
					'attribute'=>'Доходы( ₽)',
					'value'=>'TotalAdd',
				],
				[ 
					'attribute'=>'Расходы( ₽)',
					'value'=>'TotalExp',
				],
				[ 
					'attribute'=>'Итог( ₽)',
					'value'=>'TotalTot',
				],
				
				
				
			],
		]); 
		?>
<?php }?>
<?php } ?>
<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query10'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>