<!DOCTYPE html>
<html>
<head>
	<title></title>
				<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;
	  ?>
	   <table class="table table-dark">
          	<tr><th>ID</th><th>ФИО</th><th>ПОЛ</th><th>Дата рождения</th><th>Дата смерти</th><th>Количество книг автора</th></tr>

          	<?php foreach ($Authors as $Auth)  { ?> 
          		<tr>
          			<td><?php echo $Auth->AuID; ?></td>
          			<td><?php echo $Auth->FIO; ?></td>
          			<td><?php echo $Auth->POL; ?></td>
          			<td><?php echo $Auth->DR; ?></td>
          			<td><?php echo $Auth->DS; ?></td>
          			<td><?php echo $Auth->count; ?></td>
          		</tr>
         
      
 
    <?php }     ?>

      </table>

<?php	 $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'FIO')-> label('ФИО:')->textInput(['style'=>'width:400px'])?>
	<?= $form->field($model, 'POL')->label('ПОЛ:')->textInput(['style'=>'width:400px'])?>

	<?= $form->field($model, 'DR')->label('Дата рождения:')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99.99.9999',])->textInput(['style'=>'width:400px'])?>
	<?= $form->field($model, 'DS')->label('Дата смерти:')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99.99.9999',])->textInput(['style'=>'width:400px'])?>
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>

	<?php ActiveForm::end(); ?>
<?php if ($model->load(Yii::$app->request->post())) {
      $addform->FIO=$model->FIO;
      $addform->POL=$model->POL;
      $addform->DR=$model->DR;
      $addform->DS=$model->DS;
      $addform->count=0;
      $addform->save();
      header("Refresh:0");
} ?>
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/lab2'], ['class' => 'btn btn-primary block']) ?></div>

</body>
</html>