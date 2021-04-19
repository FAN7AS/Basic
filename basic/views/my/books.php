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
	

   <?php $hash= Yii::$app->getSecurity()->generatePasswordHash('1111');
echo $hash; ?>

</body>
</html>