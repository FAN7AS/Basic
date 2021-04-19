<?php 
switch ($_SESSION['User']) {
	case 'Admin':
    for ($i=1; $i <count($_SESSION['Data'][0]) ; $i++) { 
       
       switch ($_SESSION['Data'][0][$i]) {
         case 0:
         echo  "Объект".$i.": ". "Запрет<br/>";
         break;
         case 1:
         echo  "Объект".$i.": ". "Чтение<br/>";
         break;
         case 2:
         echo  "Объект".$i.": ". "Запись<br/>";
         break;
         case 3:
         echo  "Объект".$i.": ". "Чтение, Запись<br/>";
         break;
         case 4:
         echo  "Объект".$i.": ". "Полные права<br/>";
         break;
     }
 }
 break;
 case 'Subject1':
 for ($i=1; $i <count($_SESSION['Data'][1]) ; $i++) { 
   
   switch ($_SESSION['Data'][1][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject2':

for ($i=1; $i <count($_SESSION['Data'][2]) ; $i++) { 
   
   switch ($_SESSION['Data'][2][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject3':
for ($i=1; $i <count($_SESSION['Data'][3]) ; $i++) { 
   
   switch ($_SESSION['Data'][3][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject4':
for ($i=1; $i <count($_SESSION['Data'][4]) ; $i++) { 
   
   switch ($_SESSION['Data'][4][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject5':
for ($i=1; $i <count($_SESSION['Data'][5]) ; $i++) { 
   
   switch ($_SESSION['Data'][5][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject6':
for ($i=1; $i <count($_SESSION['Data'][6]) ; $i++) { 
   
   switch ($_SESSION['Data'][6][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;
case 'Subject7':
for ($i=1; $i <count($_SESSION['Data'][7]) ; $i++) { 
   
   switch ($_SESSION['Data'][7][$i]) {
     case 0:
     echo  "Объект".$i.": ". "Запрет<br/>";
     break;
     case 1:
     echo  "Объект".$i.": ". "Чтение<br/>";
     break;
     case 2:
     echo  "Объект".$i.": ". "Запись<br/>";
     break;
     case 3:
     echo  "Объект".$i.": ". "Чтение, Запись<br/>";
     break;
     case 4:
     echo  "Объект".$i.": ". "Полные права<br/>";
     break;
 }
}
break;

}
?>