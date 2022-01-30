<?php
   $servername = "localhost";
    $dbname= "clabsmvp_clabs";
    $username = "clabsmvp_jim";
    $password = "uZzGL(h;Uf17";
    $id = $_GET['id'];
   try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM results WHERE id= $id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo  '<script>alert("Record deleted successfully")</script>';
  header("location:home.php"); 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
   header("location:home.php"); 
}

$conn = null;
?>
