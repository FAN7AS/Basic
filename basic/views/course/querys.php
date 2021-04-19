<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php $this->title = 'Запросы';?>
  <?php
  use app\components\MyWidget2;
  use app\widgets\Alert;
  use yii\helpers\Html;
  use yii\bootstrap\Nav;
  use yii\bootstrap\NavBar;
  use yii\widgets\Breadcrumbs;
  use app\assets\AppAsset;
  ?>
  <?php   echo MyWidget2::widget()?>

</body>
</html>