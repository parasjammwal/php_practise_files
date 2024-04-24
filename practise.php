
    <?php
//ESTABLISHING CONNECTION.
$servername="localhost";
$username= "root";
$password= "Paras@10";
$database="dbparas";
$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
else{
    $sql="SELECT * FROM `records`";
    $result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
echo "$num";

//for printing of items.
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
       echo var_dump($row);
       echo "<br>";
}
}
}
?>