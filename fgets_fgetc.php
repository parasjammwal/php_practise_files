<?php
$fptr=fopen("file.txt","r");
//for reading a file line by line.
// while($a=fgets($fptr)){
//     echo $a;
//     echo"<br>";
// }
// for raeding a file character by character.
while($a=fgetc($fptr)){
    echo"$a";
}
?>