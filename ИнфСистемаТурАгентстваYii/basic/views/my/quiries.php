<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
use yii\helpers\Html;
?>
<div style='font-size: 20px;height: 50px;padding-top: 10px;margin: -10px;text-align: center;color:black;'>Запросы: </div>
<br>
<div  style="" >
	<div class="col-sm-4">
<?php echo Html::a(' Книги 20 века ' , ['/my/query1'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
</div>
<div class="col-sm-4">
<?php echo Html::a('Кол-во книг автора', ['/my/query2'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
</div>
<div class="col-sm-4">
<?php echo Html::a('Найти книги по слову', ['/my/query3'], ['class' => 'btn btn-primary btn-lg btn-block   active']) ?>
<br>
      <div class="center"><?php echo Html::a(' Назад ' , ['/my/lab2'], ['class' => 'btn btn-primary block','style'=>'margin-left:-108.9%;width:350px']) ?></div>

</div>
</div>
</body>
</html>