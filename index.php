<?php  

session_start();
$db=mysqli_connect('localhost', 'root', 'auf', 'sadiodatabase');

if (isset($_POST['button'])){
  
      $email = ($_POST['email']);
       $password = ($_POST['password']);

       $sql= "SELECT * FROM utilisateur WHERE  email='$email' AND password='$password'";
        $result=mysqli_query($db, $sql);
      
 if (mysqli_num_rows($result)==1) {

 	header ('location:video.php');
 }
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
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
	<br><br><br>
		<div class="card text-white bg-danger mt-2" style="max-width: 40em; margin-left: 300px;">
			<div class="card-header">Sign In Form</div>
			<div class="card-body">

				<form action="index.php" method="post" >
					
					
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					</div>
					<br>
					<button type="submit" class="btn btn-light btn-lg" name="button">Se connecter</button>
				</form>
			</div>
		</div>
	</body>
</html>
