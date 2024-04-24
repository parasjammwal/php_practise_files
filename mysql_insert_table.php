<?php
//Connecting to database.
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database= "dbparas";

//Creating connection.
$conn=mysqli_connect($servername,$username,$password,$database);
//DIE IF CONNECTION NOT ESTABLISHEDB.
if(!$conn){
    die("Connection Failed". mysqli_connect_error());

}
else{
    echo "Connection created sucessfully<br>";
}
//variables can also be used toi insert data into the database
$sql="INSERT INTO `employee` (`s.no`, `Name`, `rollno`, `address`, `salary`) VALUES ('2', 'rohan', '32', 'abc', '1000');";
$result=mysqli_query($conn,$sql);
if($result){
    echo "  Table created sucessfully<br>";

}
else{
    echo "Table did not created<br>";
}

?>