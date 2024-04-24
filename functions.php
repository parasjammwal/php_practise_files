<?php
function processMarks($marks){
    $a=count($marks);
    $sum=0;
    for ($i=0;$i<$a;$i++){
       
        $sum=$sum+$marks[$i];
    }
    return $sum;
}
$paras=[23,34,45,23,45,56];  
$sumMarks=processMarks($paras);
echo "The sum of marks is $sumMarks";
?>