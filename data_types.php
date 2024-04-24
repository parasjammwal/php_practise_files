<?php
echo " Data types in php are:<br> ";
$name="paras";
$age=200;
$salary=200.50;
$isTrue=true;
$friends=array("mohan","soham","paras","sourav");
echo "int datatype:$age<br><br>";
echo "string datatype:$name<br><br>";
echo "float datatype:$salary<br><br>";
echo "boolean datatype:$isTrue<br><br>";
echo var_dump($friends);
echo"<br>";
echo $friends[0];
echo"<br>";
echo $friends[1];
echo"<br>";
echo $friends[2];
echo"<br>";
?>