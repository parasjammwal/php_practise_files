<?php
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database= "paras";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql="UPDATE `emp_data` SET `role` = 'jprogr' WHERE `name` = 'paras'";
$result = mysqli_query($conn,$sql);
echo var_dump($result);
$arr=mysqli_affected_rows($conn);
echo "No. of rows affected".$arr;
if($result){
    echo "Updated Sucessfully<br>";
}
else{
    echo "Not able to update";
}
?>