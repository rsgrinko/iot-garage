<?php
///////////////////////////////////////////////
//        Файл, передающий значения на       //
//             народный мониторинг           //
//-------------------------------------------//
//        Автор: Гринько Роман Сергеевич     //
//             rsgrinko@gmail.com            //
///////////////////////////////////////////////
$S1 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/var1.txt");
$S2 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/var2.txt")/1000;
$rele1 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/rele1.txt");
$rele2 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/rele2.txt");
$rele3 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/rele3.txt");
$rele4 = file_get_contents("/var/www/u0712118/data/www/it-stories.ru/arduino/txt/rele4.txt");

$fp = @fsockopen("tcp://narodmon.ru", 8283, $errno, $errstr);
if(!$fp) exit("ERROR(".$errno."): ".$errstr);
fwrite($fp, "#A0:F3:C1:70:AA:93\n#T1#".$S1."\n#H1#".$S2."\n#P1#".rand(0, 1024)."\n#R1#".$rele1."\n#R2#".$rele2."\n#R3#".$rele3."\n#R4#".$rele4."\n##");
fclose($fp);
?>