<?php
$insert=false;
// Ways for connecting to database
// 1.MYSQLi connection is used when we are woking only in mysql databse.
// 2.PDD is used when we are also working in other databases.
// first step is to create variables.
//Connecting to database.
$servername="localhost";
$username="root";
$password="Paras@10";
$database="notes";
//Create a connection.
$con=mysqli_connect($servername,$username,$password, $database);
// echo $_SERVER['REQUEST_METHOD'];
// exit();
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['snoEdit'])){
    // echo "Yes";
    // exit();
    // Update the record.
    $sno=$_POST['snoEdit'];
    $title = $_POST['titleEdit'];
  $description= $_POST['descriptionEdit'];
  $sql="UPDATE `notes` SET `title` = '$title' , `description` = '$description'  WHERE `s.no` = '$sno'";
  $result = mysqli_query($con,$sql);
  }
  else{
  $type= $_POST['type'];
  $description= $_POST['description'];
  $sql="INSERT INTO `notes` ( `title`, `description`, `timestamp`) VALUES ( '$type', '$description', CURRENT_TIMESTAMP)";
  $result = mysqli_query($con,$sql);
if($result){
  // echo "Result has been updated sucessfullly<br>";
  $insert=true;
}
else{
  echo "Result has not been updated yet<br>";

}
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inotes-notes made easy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

  <script>
    $(document).ready( function (){
      $('#mytable').DataTable();

    });
  </script>
  </head>

  <body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit This Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/paras/CRUD/index.php" method="post">
        <input type="hidden" name="snoEdit" id="snoEdit">
        <div class="mb-3">
          <label for="titileEdit" class="form-label">Note Title</label>
          <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="descriptionEdit" class="form-label">Notes Descritpion</label>
            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
          </div>

        <button type="submit" class="btn btn-primary">UPDATE NOTE</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">inotes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="#">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <?php
if($insert){
  echo '<div class="alert alert-primary" role="alert">
Record has been inserted sucessfully.
</div>';
}

?>
      <div class="container my-4" style="margin:auto;width:80%;">
        <h1 class="mb-2">Add Notes</h1>
        <form action="/paras/CRUD/index.php" method="post">
        
            <div class="mb-3">
              <label for="type" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Notes Descritpion</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>

            <button type="submit" class="btn btn-primary">ADD NOTE</button>
          </form>
      </div>
      <div class="container">
  <table class="table" id="mytable">
    <!-- Inserting the data variables inside the table -->
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Title</th>
      <th scope="col">Desc</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql="SELECT * FROM `notes` ";
$result = mysqli_query($con, $sql);
//Initiaising serial no by 0.
$sno=0;
while($row=mysqli_fetch_assoc($result)){
  $sno=$sno+1;
  echo "<tr>
  <th scope='row'>".$sno."</th>
  <td>".$row['title']."</td>
  <td>".$row['description']."</td>
  <td><button class=' edit btn btn-sm btn-primary mr-2' id=".$sno.">Edit</button>
</tr>";

}
?>
  </tbody>
</table>


      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    edits=document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit",);
        tr=e.target.parentNode.parentNode;
        title=tr.getElementsByTagName("td")[0].innerText;
         description=tr.getElementsByTagName("td")[1].innerText;
          descriptionEdit=description;
         titleEdit=title;
         snoEdit.value=e.target.id;
         console.log(e.target.id)
$('#editModal').modal('toggle');
       })

    })
  </script>
  </body>
</html>         
</html>