<?php
switch ($_POST["Subj"]) 
			{
				case '1':
				for ($i=0; $i <count($_SESSION['Data'][1]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][1][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '2':
				for ($i=0; $i <count($_SESSION['Data'][2]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][2][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '3':
				for ($i=0; $i <count($_SESSION['Data'][3]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][3][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '4':
				for ($i=0; $i <count($_SESSION['Data'][4]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][4][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '5':
				for ($i=0; $i <count($_SESSION['Data'][5]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][5][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '6':
				for ($i=0; $i <count($_SESSION['Data'][6]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][6][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
				case '7':
				for ($i=0; $i <count($_SESSION['Data'][7]) ; $i++) { 
					if ($i==$_POST['Obj']) {
						$_SESSION['Data'][7][$i]=$_POST['Right'];
						echo "<div class='col-4'><h4 style='color:green'>Операция успешна</h4></div>";
					}
				}
				break;
			}
?>