<?php
echo "The local and globals variables<br>";
$a=90;
function processMarks(){
   // echo "$a";//Global variables cannot be accessed within the local block.To acess it,we will 
   global $a;//first declared the variable as global.

   echo"$a<br>";
   $a=4;//If we change the value of global variable it will remain permanent.
}
echo "$a";
processMarks();
echo "$a";
?>