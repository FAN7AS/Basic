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
	<div class="center">

	<?php $form = ActiveForm::begin()?>
<?=$form->field($model,'bookName')->textInput(['style'=>'width:400px;border: 2px solid black'])->label('Поиск по значению:',['style'=>'display:flex;justify-content: center;font-size:17px
']),
 Html::submitButton('Найти',['class'=>'btn btn-success','style'=>'margin-left:36%;width:100px']) 		?> 
<?php ActiveForm::end() ?>
</div>
		<?php
if($model->load(Yii::$app->request->post())){  ?> 
	<br>	
     <table class="table table-striped", style="border: 3px solid black;text-align:center">
          	<tr><th>ID</th><th>Название книги</th><th>Описание</th><th>Дата написания</th><th>Автор</th><th>Жанр</th></tr>

          	<?php foreach ($Books as $bk) {  ?> 
          		<tr>
                  <td><?php echo $bk->BuID ?></td>
                  <td><?php echo $bk->Names ?></td>
                  <td><?php echo $bk->Description ?></td>
          		  <td><?php echo $bk->Year ?></td>
          		   <td><?php echo $bk->Author ?></td>
          		    <td><?php echo $bk->Genre ?></td>
         

 </tr>


 
      <?php } ?>  
            </table>
      <?php } ?>

       <br> <div class="block1"><?php echo Html::a(' Назад ' , ['/my/quiries'], ['class' => 'btn btn-primary block']) ?></div>
</body>
</html>