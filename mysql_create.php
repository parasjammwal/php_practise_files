<?php
/*Ways for connecting to database
1.MYSQLi connection is used when we are woking only in mysql databse.
2.PDD is used when we are also working in other databases.
first step is to create variables

*/
//Connecting to database.
$servername="localhost";
$username="root";
$password="Paras@10";
//Create a connection.
$con=mysqli_connect($servername,$username,$password);
$sql="CREATE DATABASE dbparas";
$result = mysqli_query($con, $sql);
echo var_dump($result);
if($result){
    echo "Connection Sucessful<br>";
}
else{
    echo "Connection failed";
}
//DIE IF CONNECTION NOT ESTABLISHED.
// if(!$con)
// {
// die("we failed to connect to database".mysqli_connect_error());

// }
// echo "Connection was established";


?>