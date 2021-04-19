<?php

session_set_cookie_params(0);
ini_set('session.gc_probability', '100'); 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Шаблон</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="ajax.js"></script>
</head>
<body>
	<?php


	function PushRights($Data)
	{
		for ($i=1; $i < 8; $i++) { 
			for ($j=1; $j < 6; $j++) { 
				$Data[$i][$j]=rand(0,3);

			}
		}
		return $Data;
	}
	
	$Data = 
	array( 
		array("Admin",4 ,4 ,4 ,4 ,4),
		array("Subject1",0 ,0 ,0 ,0 ,0),
		array("Subject2",0 ,0 ,0 ,0 ,0),
		array("Subject3",0 ,0 ,0 ,0 ,0),
		array("Subject4",0 ,0 ,0 ,0 ,0),
		array("Subject5",0 ,0 ,0 ,0 ,0),
		array("Subject6",0 ,0 ,0 ,0 ,0),
		array("Subject7",0 ,0 ,0 ,0 ,0)); 
	$Data=PushRights($Data);
	for ($i=0; $i < count($Data); $i++) { 
		for ($j=0; $j <1 ; $j++) { 
			$Subject[]= $Data[$i][$j];
		}
	}
	if (!isset($_SESSION['Data'])) {
		$_SESSION['Data'] = $Data;
	}

	if (!isset($_SESSION['User'])):?>

		<h4 >Введите имя пользователя</h4>

		<form class="MiddleForm" action="" method="POST">
			<input type="text" name="User" >
			<input type="submit" name="Set" >
		</form>
	<?php endif; ?>
	<?php if(isset($_SESSION['User'])): ?>
		<header>
			<div class="row">
				<div class="col-md-4">
					<form class="FormLeft" action="" method="POST">
						<input type="submit" name="Reset" value="Сбросить">
					</form>

				</div>
				<div class="col-md-4 offset-md-4">
					<form class="FormRight" action="" method="POST">
						<label>Обнулить права</label><input type="checkbox" name="Null">
						<input class="logoutButton"  type="submit" name="Out" value="Выйти" >
					</form> 
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row justify-content-center">
				<div class=".col-md-4 .ml-auto">
					<div class="Middle">
						<?php 
						echo "<hr>Пользователь:<b>".   $_SESSION['User']."</b><br/>";
						echo "Идентификация прошла успешно, добро пожаловать в систему...<br/>";
						echo "<hr>";
						?>	
					</div>
					<div class="RightCenter">
						<div class="RightShow">
							<?php 
							echo "Перечень Ваших прав:<br/>"; 
							include 'DataUser.php';
							echo "<hr>";
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php if (isset($_SESSION['User']) && $_SESSION['User']=="Admin"): ?>
			<form class="MiddleForm"  action=""  method="POST"  id="" >
				<input type="text" name="Command" placeholder="Жду ваших указаний.. " >
				<input type="submit" name="Send" value="Выполнить" id="" >
			</form>
		<?php endif;?>

		<?php if (isset($_SESSION['User']) && $_SESSION['User']!='Admin'): ?>
			<form class="MiddleForm" action=""  method="POST"  id="" >
				<input type="text" name="Command" placeholder="Жду ваших указаний... " >
				<input type="submit" name="Send" value="Выполнить" id="" >
			</form>
		<?php endif;?>
		
		<div id="result_form"></div> 

		<?php if(!empty($_POST['Send'])): 
			include 'Engine.php';
		endif; ?>


	<?php endif; ?>

	<?php if(!empty($_POST['Set'])) :
		if (in_array($_POST['User'],$Subject)) :
			$_SESSION['User']=$_POST['User'];?>
			<meta http-equiv="refresh" content="0">

			<?php elseif (!in_array($_POST['User'],$Subject)): ?>

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="col-4">

								<?php echo "<h3 style='color:red'>Пользователя с таким именем не существует !</h3>"; ?>
							</div> 
						</div>
					</div>
				</div>
			<? endif; 
		endif; 
		if (!empty($_POST['PutRights'])) {
			include 'PushGrant.php';
		}
		if(isset($_POST['Reset'])): 
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);?>

			<?php
		endif;
		if (isset($_SESSION["TempObject"]) || isset($_SESSION["TempCommand"])): ?>
			<div class="row justify-content-end" style="margin-top: -3em">
				<div class="col-md-2 offset-md-1">
					<div class="OutRight">
						<hr>
						<?php
						if (isset($_SESSION["TempCommand"])): ?>

							
							<?php echo "Текушая команда <b> ".$_SESSION["TempCommand"]."</b>"; endif?>

						</div>
					</div>
				</div>
				<?php

				if (isset($_SESSION["TempObject"])): ?>
					<div class="row justify-content-end">
						<div class="col-md-2 offset-md-4">
							<div class="OutRight">
								<?php echo "Текущий объект <b> ".$_SESSION["TempObject"]."</b>"; ?>
								

							</div>
						</div>
					</div>
					<?php 
				endif;?>
				<div class="row justify-content-end">
					<div class="col-md-2 offset-md-4">
						<div class="OutRight">
							<hr>
						</div>
					</div>
				</div>
				<?php
			endif;?>
			<?php
			if (isset($_POST['Out'])):
				if (!empty($_POST['Null'])):
					session_unset();
				endif;
				unset($_SESSION['User']);
				unset($_SESSION['TempCommand']);
				unset($_SESSION['TempObject']);
			
				?>
				<meta http-equiv="refresh" content="0">
			<?php endif ?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!-- Подключаем Bootstrap JS -->
			<script src="js/bootstrap.min.js"></script>
			<footer></footer>
		</body>
		</html>