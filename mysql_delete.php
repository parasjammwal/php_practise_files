<?php
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database="paras";
$conn =mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "Connection failed to established<br>";
}
else{
    echo "Connection established<br>";
    $sql="DELETE FROM `emp_data` WHERE `name` = 'mohan'";
    $result = mysqli_query($conn,$sql);
   //To see no of affected rows.
    $aff=mysqli_affected_rows($conn);

 echo "No of records affected<br>".$aff;
    if($result){
        echo "Record deleted sucessfully<br>";
    }
    else{
        echo "Failed to delete record";
    }

}

?>