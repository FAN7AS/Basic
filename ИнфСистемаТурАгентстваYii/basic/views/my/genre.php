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
	

          <table class="table table-striped", style="border: 3px solid black;text-align:center">
          	<tr><th>ID</th><th>Название жанра </th><th>Описание</th><th>Основатель жанра</th><th>Количество жанров</th></tr>

          	<?php foreach ($Genre as $Gen)  { ?> 
          		<tr>
          			<td><?php echo $Gen->GeID; ?></td>
          			<td><?php echo $Gen->GenreName; ?></td>
          			<td><?php echo $Gen->Description; ?></td>
          			<td><?php echo $Gen->GenreCreator; ?></td>
          			<td><?php echo $Gen->count; ?></td>
          
          		</tr>
         
      
 
    <?php }     ?>

      </table>
         </div> 
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/lab2'], ['class' => 'btn btn-primary block']) ?></div>

</body>
</html>