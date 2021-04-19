<!DOCTYPE html>
<html>
<head>
	<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />
	<title></title>
</head>
<body>

<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
       <div class="alert alert-success">
          Лабораторная работа №2.
      </div>
    <div class="block">  
      <?php echo Html::a(' Авторы ' , ['/my/authors'], ['class' => 'btn btn-primary block']) ?>
      &emsp;
      <?php echo Html::a(' Книги ' , ['/my/books'], ['class' => 'btn btn-primary block']) ?>  
      &emsp;
      <?php echo Html::a(' Жанры ' , ['/my/genre'], ['class' => 'btn btn-primary block']) ?>  
            &emsp;
      <?php echo Html::a(' Запросы ' , ['/my/quiries'], ['class' => 'btn btn-primary block']) ?> 
       &emsp;
     <?php echo Html::a(' Добавить автора ' , ['/my/addauthor'], ['class' => 'btn btn-primary block']) ?>
            &emsp;
     <?php echo Html::a(' Удалить автора ' , ['/my/deleteauthor'], ['class' => 'btn btn-primary block']) ?>  

            </div>

</body>
</html>
