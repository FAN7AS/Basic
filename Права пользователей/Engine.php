<?php
switch ($_POST['Command']) {
	case '1':

	if (isset($_SESSION["TempCommand"])) 
	{

		$_SESSION["TempObject"]=1;
		if ($_SESSION["TempCommand"]=='GRANT') {
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);
			echo "<div class='col-4'><h4 style='color:#BD45B0FF'>Закончите операцию GRANT</h4></div>";
		}
		switch ($_SESSION["User"]) 
		{
			case 'Admin':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;

					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;
				}

			}
			break;
			case 'Subject1':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}

			break;
			case 'Subject2':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject3':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject4':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject5':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject6':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject7':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
		}
	}
	else echo "<div class='col-4'><h4 style='color:red'>Сначала укажите команду</h4></div>";
	break;
	case '2':

	if (isset($_SESSION["TempCommand"])) 
	{
		$_SESSION["TempObject"]=2;
		if ($_SESSION["TempCommand"]=='GRANT') {
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);
			echo "<div class='col-4'><h4 style='color:#BD45B0FF'>Закончите операцию GRANT</h4></div>";
		}
		switch ($_SESSION["User"]) 
		{
			case 'Admin':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;

					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;
				}

			}
			break;
			case 'Subject1':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}

			break;
			case 'Subject2':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject3':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject4':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject5':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject6':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject7':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
		}
	}
	else echo "<div class='col-4'><h4 style='color:red'>Сначала укажите команду</h4></div>";
	break;
	case '3':

	if (isset($_SESSION["TempCommand"])) 
	{
		$_SESSION["TempObject"]=3;
		if ($_SESSION["TempCommand"]=='GRANT') {
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);
			echo "<div class='col-4'><h4 style='color:#BD45B0FF'>Закончите операциюя GRANT</h4></div>";
		}
		switch ($_SESSION["User"]) 
		{
			case 'Admin':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;

					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;
				}

			}
			break;
			case 'Subject1':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}

			break;
			case 'Subject2':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject3':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject4':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject5':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject6':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject7':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
		}
	}
	else echo "<div class='col-4'><h4 style='color:red'>Сначала укажите команду</h4></div>";
	break;
	case '4':

	if (isset($_SESSION["TempCommand"])) 
	{
		$_SESSION["TempObject"]=4;
		if ($_SESSION["TempCommand"]=='GRANT') {
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);
			echo "<div class='col-4'><h4 style='color:#BD45B0FF'>Закончите операцию GRANT</h4></div>";
		}
		switch ($_SESSION["User"]) 
		{
			case 'Admin':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;

					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;
				}

			}
			break;
			case 'Subject1':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}

			break;
			case 'Subject2':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject3':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject4':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject5':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject6':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject7':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
		}
	}
	else echo "<div class='col-4'><h4 style='color:red'>Сначала укажите команду</h4></div>";
	break;
	case '5':

	if (isset($_SESSION["TempCommand"])) 
	{
		$_SESSION["TempObject"]=5;
		if ($_SESSION["TempCommand"]=='GRANT') {
			unset($_SESSION['TempCommand']);
			unset($_SESSION['TempObject']);
			echo "<div class='col-4'><h4 style='color:#BD45B0FF'>Закончите операцию GRANT</h4></div>";
		}
	
		switch ($_SESSION["User"]) 
		{
			case 'Admin':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][0][$_SESSION["TempObject"]]) {
					case 1:
					case 2:
					case 3:
					case 4:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;

					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;
				}

			}
			break;
			case 'Subject1':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][1][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}

			break;
			case 'Subject2':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][2][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject3':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][3][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject4':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][4][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject5':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][5][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject6':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][6][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
			case 'Subject7':
			switch ($_SESSION["TempCommand"]) {
				case 'read':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 1:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция READ успешна</h4></div>";

					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";

				}
				break;
				case 'write':
				switch ($_SESSION['Data'][7][$_SESSION["TempObject"]]) {
					case 2:
					case 3:
					echo "<div class='col-4'><h4 style='color:green'>Операция WRITE успешна</h4></div>";
					break;
					default:
					echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
					break;


				}
			}
			break;
		}
	}
	else echo "<div class='col-4'><h4 style='color:red'>Сначала укажите команду</h4></div>";
	break;
	case 'read':
	case 'Read':
	case 'READ':	
	unset($_SESSION["TempObject"]);
	$_SESSION["TempCommand"]="read";
	echo "<div class='col-4'><h4 style='color:green'>Над каким объектом производится операция?</h4></div>";
	break;
	case 'write':
	case 'write':
	case 'WRITE':
	unset($_SESSION["TempObject"]);
	$_SESSION["TempCommand"]="write";
	echo "<div class='col-4'><h4 style='color:green'>Над каким объектом производится операция?</h4></div>";
	break;
	case 'grant':
	case 'Grant':
	case 'GRANT':
	if ($_SESSION['User']=='Admin'):
		unset($_SESSION["TempObject"]);
		$_SESSION["TempCommand"]="GRANT";

		echo "<div class='col-4'><h4 style='color:green'>Выберите пользователя, объект, и тип передаваемого права </h4></div>"; ?>
		<form class="MiddleForm" action="" method="POST">
			<select name="Subj">
				<option value="1">Пользователь 1</option>
				<option value="2">Пользователь 2</option>
				<option value="3">Пользователь 3</option>
				<option value="4">Пользователь 4</option>
				<option value="5">Пользователь 5</option>
				<option value="6">Пользователь 6</option>
				<option value="7">Пользователь 7</option>
			</select>

			<select name="Obj">
				<option value="1">Объект 1</option>
				<option value="2">Объект 2</option>
				<option value="3">Объект 3</option>
				<option value="4">Объект 4</option>
				<option value="5">Объект 5</option>
			</select>
			<select name="Right">
				<option value="0">Запрет</option>
				<option value="1">Чтение</option>
				<option value="2">Запись</option>
				<option value="3">Чтение/Запись</option>

			</select>
			<input class="special" type="submit" name="PutRights">
		</form>
		<?php	else: echo "<div class='col-4'><h4 style='color:red'>Отказ в выполнении операции. У Вас нет прав для ее осуществления</h4></div>";
		endif;

		break;
		break;
		default:
		echo "<div class='col-4'><h4 style='color:red'>Операция не распознана</h4></div>";
		break;
	}
	?>




