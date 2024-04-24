<?php
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database="dbparas";
$con = mysqli_connect($servername, $username, $password,$database);
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
else{
    echo "Connection sucessful<br>";

}
$sql="";
    $result= mysqli_query($con, $sql);
    if($result){
        echo "Table created Sucessfully<br>";
    }
    else{
        echo "failed to create table<br>";
    }

?>