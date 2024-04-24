<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $name=$_POST['name1'];
    $desc=$_POST['textarea'];
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
    <div class="container" style="background:yellow;border:2px solid black;width:auto;margin:auto;padding:10px;">
  <form action="/paras/form_link1.php" method="post">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name1">
  </div>
  <div>
    <textarea name="textarea" id="t1" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      
    </script>
 
  </body>
</html>