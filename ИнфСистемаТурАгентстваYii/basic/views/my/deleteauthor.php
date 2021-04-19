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
      <?php $form = ActiveForm::begin()?>
	<?= $form->field($model, 'ID')-> label('ID:')?>
    <?= Html::submitButton('Удалить', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end() ?>
    <?php if ($model->load(Yii::$app->request->post())) { 
    	$id=$model->ID;
    	$addform->deleteAll(['=','AuID',$id]); 
    	      header("Refresh:0");
    	      }?>
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/lab2'], ['class' => 'btn btn-primary block']) ?></div>

</body>
</html>