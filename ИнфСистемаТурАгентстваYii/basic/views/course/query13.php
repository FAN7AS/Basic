<!DOCTYPE html>
<html>
<head>
	<?php $this->title = 'Запрос №13';?>
	<link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
    use app\components\MyWidget1;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\widgets\MaskedInput;
	use yii\jui\DatePicker;
?>
<h2 style="text-align: center;">Рентабельность туристической фирмы</h2>

	<?php 
    echo MyWidget1::widget(['Hotel' => $QueryHotel,'Flight' => $QueryFlight ,'Plane' => $QueryPlane,'Tour' => $QueryTour,'Stock' => $QueryStock]); 
	?>

<?php echo Html::a(' Назад ' , ['/course/querys'], ['class' => 'butextend btn btn-primary block']) ?>
<?php echo Html::a(' Обновить ' , ['/course/query13'], ['class' => 'butextend1 btn btn-primary block']) ?>
</body>
</html>