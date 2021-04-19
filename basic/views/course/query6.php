<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №6';?>
	<link href="../../../styles1/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\jui\DatePicker;
?>
<?php $form = ActiveForm::begin(); ?>
	<h1><b><i>Поиск информации по Экскурсиям: </i></b></h1>
	<?= $form->field($modelOb1, 'period3')->label('C:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
	<?= $form->field($modelOb1, 'period4')->label('По:')->widget(DatePicker::classname(),[
			'language' => 'ru',
			'value' => $modelOb1->date1,
			'dateFormat' => 'yyyy-MM-dd',
		])?>
	<div class="form-group">
	    <?= Html::submitButton('Отправить', ['class' => 'butextend1 blocked btn btn-success','name' => 'button1','value' => 'button1']) ?>
	</div>
<?php ActiveForm::end(); ?>
<?php if($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1') {?> 
<h3><i>Общее количество туристов, заказавших экскурсии с <b> <?= $valuePeriod1; ?></b> по <b><?= $valuePeriod2; ?></b> : <b><?= count($QueryResult); ?></b></i></h2>
<?php } ?>	


 <?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
 <?php echo Html::a(' Обновить ' , ['/course/query6'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>