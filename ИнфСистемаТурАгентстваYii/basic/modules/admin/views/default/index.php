<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<?php
	use app\widgets\Alert;
	use yii\helpers\Html;
	use yii\bootstrap4\Nav;
	use yii\bootstrap4\NavBar;
	use yii\widgets\Breadcrumbs;

	use app\assets\AppAsset;
	?>

      <!-- <code><?= __FILE__ ?></code>
      	<a href="index.php?r=admin/genre" class="btn btn-primary block" role="button"><h4>Таблица Жанры</h4></a></div> -->

            <div class="col-md-4 col-md-offset-4">
                  <div class="btn-group-vertical btn-block">
                        <?php echo Html::a('Аэропорты' , ['/admin/airport'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>
                        <hr></hr>
                        <?php echo Html::a('Экскурсии' , ['/admin/tour'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>
                        <hr></hr>
                        <?php echo Html::a('Гостиницы' , ['/admin/hotel'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>
                        <hr></hr>
                        <?php echo Html::a('Самолёты' , ['/admin/plane'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>
                        <hr></hr>
                        <?php echo Html::a('Склад' , ['/admin/stock'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?> 
                        <hr></hr>
                        <?php echo Html::a('Рейсы' , ['/admin/flight'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>
                        <hr></hr>
                        <?php echo Html::a('Туристы' , ['/admin/tourists'], ['class' => 'b btn btn-default btn-lg btn-block  active' ])?>

                  </div>
            </div>
            
      	
      </body>
      </html>     
      <?php
