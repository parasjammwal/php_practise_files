<?php
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database= "paras";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Failed to connect to database". mysqli_connect_error());

}

else{
$sql="SELECT * FROM `emp_data` WHERE `name`='rohan'";
$result = mysqli_query($conn,$sql);

if($result){
    $num=mysqli_num_rows($result);
    echo "The no. of rows are ".$num;
    echo "<br>";
//for printing of results.
while($num>0)
{
    $row=mysqli_fetch_assoc($result);
    echo var_dump( $row );
    echo"<br>";
}
}
}
?>