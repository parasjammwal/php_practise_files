<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            margin:auto;
            width:50%;
        }
    </style>
  </head>
  <body>
  <nav class="navbar bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand">Contact Form</a>
    <!-- <form class="d-flex" role="search"> -->
      
  </div>
</nav>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['description'];
   


$servername="localhost";
$username= "root";
$password= "Paras@10";
$database="dbparas";
$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    die("Connection failed". mysqli_connect_error());
}
else{
    $sql="INSERT INTO `records` (`name`, `email`, `desc1`) VALUES ('$name', '$email', '$desc');";
$result= mysqli_query($con,$sql);


if($result){
    echo '<div class="alert alert-primary" role="alert">
record submitted sucessfully.
  </div>';
}
else{
    echo '<div class="alert alert-primary" role="alert">
    record did not get submitted.
  </div>';
}
}


}

?>
<br>
<div class="container">
    <form action="/paras/form_link" method="post" style="margin:auto;">
    <div>
    <label for="name" class="form-label" name ="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="your name" name="name">
  </div>
    <div>
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div>
  <label for="floatingTextarea2">Description</label>
  <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px" name= "description"></textarea>
  <!-- <label for="floatingTextarea2">Description</label> -->
</div>
<br>
<button type="button" class="btn btn-primary">Submit</button>

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>