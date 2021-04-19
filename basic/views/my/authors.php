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
  
		<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />

	<title></title>
</head>
<body>

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
         </div> 
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/lab2'], ['class' => 'btn btn-primary block']) ?></div>

</body>
</html>