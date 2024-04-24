<?php
// 
// $fptr=fopen("file.txt","w");
// fwrite($fptr,"This is my first content\n");
// fwrite($fptr,"Hello sir");
// fclose($fptr);
//for appending file.
$fptr=fopen("file.txt","a");
fwrite($fptr,"this is also my contetnt.you can append in it ");
?>