<?php
session_start(); 
$servername = "localhost";
$dbname= "clabsmvp_clabs";
$username = "clabsmvp_jim";
$password = "uZzGL(h;Uf17";
// include("connection.php");
try  
 {  
      $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:home.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">
<style>
    .body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
	background-size: cover;
	filter: blur(5px);
	z-index: 0;
}
</style>
<head>
    <meta charset="UTF-8">
    <title>Clabs</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="css/style.css">-->
</head>
<body>
    <br>
    <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">Clabs</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
    <!-- <header>
        <div class="container-fluid modal-header bg-primary">

        </div>
    </header>
    <div class="container">
        <div class=" card">
            <div class="card-body">
                <form class="col-lg-4">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">User name</label>
                      <input class="form-control" type="text" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div> -->
  <!--  <div class="grad"></div>-->
		<!--<div class="header">-->
		<!--	<div>Cl<span>abs</span></div>-->
		<!--</div>-->
		<!--<br>-->
		<!--<div class="login">-->
		<!--		<form action="/login.php" method="post">-->
		<!--		    <input type="text" placeholder="username" name="name"><br>-->
		<!--		<input type="password" placeholder="password" name="password"><br>-->
		<!--		<button type="submit" class="btn btn-primary"> Login</button>-->
		<!--		</form>-->
		<!--</div>-->
</body>
</html>