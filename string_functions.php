<?php
$name="paras is my name";
echo "<br>";
echo "The length of my string is". strlen($name)."<br>";//gives no. of caharacters
echo strlen($name);
//to join two strings we will use dot operator
//(for concatenaton);
echo str_word_count($name);//returns no. of words.
echo "<br>";
echo strrev($name);//gives in return reverse string.
echo "<br>";
echo strpos($name, "is");//returns prosotion of is word in the string.
echo "<br>";
echo str_replace("paras","Harry",$name);//replaces paras with harry.
echo "<br>";
echo str_repeat($name,10);

?>