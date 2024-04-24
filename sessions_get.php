<?php
//to get the values of session..
session_start();
echo "The name of the user is " . $_SESSION['username'];
echo "<br>";
echo "my favourite category is " . $_SESSION['favCategory'];

?>