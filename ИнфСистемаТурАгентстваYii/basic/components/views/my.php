<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="../../../styles/second.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php $this->title = 'Запросы';?>
  <?php
  use app\widgets\Alert;
  use yii\helpers\Html;
  use yii\bootstrap\Nav;
  use yii\bootstrap\NavBar;
  use yii\widgets\Breadcrumbs;
  use app\assets\AppAsset;
  ?>
  
  <div class="col-md-6 col-md-offset-4"  style="font-size: 2em"> <h1><i><b>Туристическое агенство</b></i></h1></div>
  <div style = "margin-top: 10em  ">
  <div class="col-md-4">
   <div class="btn-group-vertical btn-block">

     <?php echo Html::a('1' , ['/course/query1'], ['class' => 'b d btn btn-default btn-lg btn-block  active' ]) ?>
      <hr></hr>
     <?php echo Html::a('2' , ['/course/query2'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
     <?php echo Html::a('3' , ['/course/query3'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
     <?php echo Html::a('4' , ['/course/query4'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
     <?php echo Html::a('5' , ['/course/query5'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>


   </div>
 </div>
 <div class="col-md-4">
   <div class="btn-group-vertical btn-block">
    <?php echo Html::a('6' , ['/course/query6'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
    <?php echo Html::a('7' , ['/course/query7'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
    <?php echo Html::a('8' , ['/course/query8'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
    <?php echo Html::a('9' , ['/course/query9'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
      <hr></hr>
    <?php echo Html::a('10' , ['/course/query10'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
  </div>
</div>
<div class="col-md-4 ">
 <div class="btn-group-vertical btn-block">
   <?php echo Html::a('11' , ['/course/query11'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
     <hr></hr>
   <?php echo Html::a('12' , ['/course/query12'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
     <hr></hr>
   <?php echo Html::a('13' , ['/course/query13'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
     <hr></hr>
   <?php echo Html::a('14' , ['/course/query14'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>
     <hr></hr>
   <?php echo Html::a('15' , ['/course/query15'], ['class' => 'b d btn btn-default btn-lg btn-block  active']) ?>

 </div>
</div>
</div>
</body>
</html>