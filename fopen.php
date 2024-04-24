<?php
$fptr=fopen("file.txt","r");
if(!$fptr){
    die("Cannot open the file<br>");
}
$a=fread($fptr,filesize("file.txt"));
echo $a;
fclose();//for closing the file. 

?>