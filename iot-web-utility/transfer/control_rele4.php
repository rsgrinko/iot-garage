<?php 
///////////////////////////////////////////////
//    Файл вывода состояния выхлда (реле)    //
//-------------------------------------------//
//        Автор: Гринько Роман Сергеевич     //
//             rsgrinko@gmail.com            //
///////////////////////////////////////////////
$theData = file_get_contents($_SERVER['DOCUMENT_ROOT']."/arduino/txt/rele4.txt");
if  ( $theData == 1)
{
 echo " <p class='on'>ON</p>";
}

if  ( $theData == 0)
{
 echo "<p class='off'>OFF</p>";
}
?>