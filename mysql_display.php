<?php

$servername="localhost";
$username= "root";
$password= "Paras@10";
$database="dbparas";
$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
else{
    echo "Connection was sucessful<br>";
}
    $sql = "SELECT * FROM `records`";

    $result= mysqli_query($con,$sql);
    // find no. of rows in $database
    $num=mysqli_num_rows($result);
 echo "$num";
 echo "<br>";
//  for fetching data
//  if($num> 0){
// $row=mysqli_fetch_array($result);
// echo var_dump($row);
//  }
if($num> 0){
while($row=mysqli_fetch_array($result)){
echo var_dump($row);
echo "<br>";

}
}
?>