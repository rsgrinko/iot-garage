<?php
///////////////////////////////////////////////
//  Файл обработчик запросов от контроллера  //
//  Принимает показания датчиков и выдает    //
// состояние реле, необходимое для установки //
//-------------------------------------------//
//        Автор: Гринько Роман Сергеевич     //
//             rsgrinko@gmail.com            //
///////////////////////////////////////////////
$S1 =  $_GET['var1'];  //Температура
$myFile1 = "txt/var1.txt";
$fh1 = fopen($myFile1, 'w') or die("can't open file");
fwrite($fh1, $S1);
fclose($fh1);

$S2 =  $_GET['var2']; //Напряжение
$myFile2 = "txt/var2.txt";
$fh2 = fopen($myFile2, 'w') or die("can't open file");
fwrite($fh2, $S2);
fclose($fh2);
 
//$S3 =  $_GET['var3']; //Резерв
$S3 =  rand(1000, 9999);
$myFile3 = "txt/var2.txt";
$fh3 = fopen($myFile3, 'w') or die("can't open file");
fwrite($fh3, $S3);
fclose($fh3);
      
//$S4 =  $_GET['var4']; //Резерв
$S4 =  rand(1000, 9999);
$myFile4 = "txt/var4.txt";
$fh4 = fopen($myFile4, 'w') or die("can't open file");
fwrite($fh4, $S4);
fclose($fh4);
	  
//выдаем значение реле для установки
echo file_get_contents("txt/rele1.txt");
echo "\n";
echo file_get_contents("txt/rele2.txt");
echo "\n";
echo file_get_contents("txt/rele3.txt");
echo "\n";
echo file_get_contents("txt/rele4.txt");
echo "\n";
?>