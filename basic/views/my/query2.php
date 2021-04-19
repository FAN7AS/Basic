<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
				<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />

</head>
<body>
 <table class="table table-striped">
 <tr>
 <th >ФИО</th>
 <th >Количество книг </th>
</tr>
<?php foreach ($Authors as $aut): ?>
<tr>
	<td><?php echo $aut->FIO ?></td>
	<td><?php echo $aut->count ?></td>
</tr>


<?php endforeach ?>
</table>
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/quiries'], ['class' => 'btn btn-primary block']) ?></div>
</body>
</html>