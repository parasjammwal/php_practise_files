<?php
$a=(string)readline("Enter your age:");

if($a>18){
    echo "You can drive a car";
}
else if($a<18 && $a>13){
    echo "you can drive a scooty";

}
else{
    echo "you cannot drive anything";
}
?>