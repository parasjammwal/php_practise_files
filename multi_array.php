<?php
echo "welcome to multi-dimensional arrays";
$multiDim=array(array(1,2,3,4),
array(5,6,7,8),
array(10,11,12,13));
for($i=0;$i<count($multiDim);$i++){
    for($j=0;$j<count($multiDim[$i]);$j++){
        echo "".$multiDim[$i][$j]."";
        echo "<br>";
    }
}
?>