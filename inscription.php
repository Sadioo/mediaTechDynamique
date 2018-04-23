<?php 
session_start();

if (isset($_POST['button'])){
  $db=mysqli_connect('localhost', 'root', 'auf', 'sadiodatabase');
  $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
      $email = ($_POST['email']);
       $password = ($_POST['password']);

       $sql= "INSERT INTO utilisateur(nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email','$password')";

       mysqli_query($db, $sql);
         header("location: index.php");
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
      body {
        background-image: url(images/broken-makeup.jpg);
      }
    </style>
  </head>
  <body>
  <?php 
    include 'menu.php';
  ?>
    <div class="card text-white bg-danger mt-2" style="max-width: 40em; margin-left: 300px;">
      <div class="card-header">Sign Up Form</div>
      
      <div class="card-body">


        <form action="inscription.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter last name" name="nom">            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter first name" name="prenom">
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter email" name="email">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          
          <button type="submit" class="btn btn-light btn-lg" name="button">S'inscrire</button>
        </form>
      </div>
    </div>
    
  </body>
</html>