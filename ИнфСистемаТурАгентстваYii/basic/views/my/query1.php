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
          	<tr><th>ID</th><th>Название книги</th><th>Описание</th><th>Дата написания</th><th>Автор</th><th>Жанр</th></tr>

          	<?php foreach ($Books as $bk)  { ?> 
          		<tr>
                  <td><?php echo $bk->BuID ?></td>
                  <td><?php echo $bk->Names ?></td>
                  <td><?php echo $bk->Description ?></td>
          			  <td><?php echo $bk->Year ?></td>
                  <?php  $Authors=$bk->authors;
                  foreach($Authors as $aut){
                  } 
                  ?>
                  <td><?php echo $aut->FIO; ?></td>
                   <?php  $Genre=$bk->genre;
                  foreach($Genre as $ge){
                  } 
                  ?>
                  <td><?php echo $ge->GenreName; ?></td>
          		</tr>
         
      
 
    <?php }     ?>

      </table>
         </div> 
      <div class="block1"><?php echo Html::a(' Назад ' , ['/my/quiries'], ['class' => 'btn btn-primary block']) ?></div>

</body>
</html>