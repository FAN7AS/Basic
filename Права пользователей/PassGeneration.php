<!DOCTYPE html>
<html>
<head>
	<title>Шаблон</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
  	<link rel="stylesheet" href="styles.css">
</head>
<body id="body">
<form id="ajax_form" style="text-align: center;margin: 0 0 10em 0">
	<input type="hidden" name="text">
	<input   type="submit" id="go" name="go" value="Сгенерировать пароль">
	<input  type="submit" id="cancel" name="" value="Сбросить" hidden="">
</form>

<?php 
	      function generatePassword()
    {
        $string='0123456789abcdefghijklmnopqrs';
        return str_shuffle($string);
    }
?>
<?php
$P=0.00001;
$V=20*60*24;
$T=0.857;
$S=($V*$T)/$P;
/*echo  pow(15, 8).'<br>';*/
?>
 <!-- <div>Длинна: <?=$S; ?></div> -->

	<div style="" id="result_form"></div>
<div id="fo"></div>


</body>
</html>