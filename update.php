<?php
   $servername = "localhost";
    $dbname= "clabsmvp_clabs";
    $username = "clabsmvp_jim";
    $password = "uZzGL(h;Uf17";
    $id = $_POST["id"];
   try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["edit"]))  
      {  
         // init vars
        $eno = $_POST["eNo"];
        $name = $_POST["name"];
        $vfrom = $_POST["datefrom"];
        $vto = $_POST["dateto"];
        $nId = $_POST["nId"];
        $passport = $_POST["passport"];
        $excenter = $_POST["examcenter"];
        $exdate = $_POST["examdate"];
        $exam = $_POST["exam"];
        $exresult = $_POST["examresult"];
        
        
        
        $sql = "UPDATE results SET eno='$eno',name='$name',passport='$passport',excenter='$excenter',exdate='$exdate',exam='$exam',exresult='$exresult' WHERE id = $id";
        
          // Prepare statement
        $stmt = $conn->prepare($sql);
        
      // execute the query
        $stmt->execute();
        
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        header("location:home.php");
        
      } else {
    echo "Error updating record: " . mysqli_error($conn);
    echo $id + 1;
}
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
   
}

$conn = null;
?>
