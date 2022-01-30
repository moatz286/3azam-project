<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   else ob_start();
?>
<?php
// Initialize the session
session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '&nbsp; <a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:index.php");  
 }  
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>Clabs - الرئيسية</title>
    <style>
    .btnSelect {border: none; background: none;color: #007bff;}    
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa {
            color: #007bff;
            cursor: pointer;
        }
        
        .fa-trash {
           margin-left: 18px;
        }
        .fa-trash:hover {
           color: red;
        }
        .fa-pencil-square-o:hover {
           color: green;
        }
    </style>
    <script>
        window.onload = () => {
        

        $(document).ready(function(){

// code to read selected table row cell data (values).
$("#myTable").on('click','.btnSelect',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value Number
  
     var data=col1;
     window.open("show.php?id=" + col1,  "_self");
});
$("#myTable").on('click','.fa-pencil-square-o',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value Number
   
     var data=col1;
     
     window.open("edit.php?id=" + col1,  "_self");
});

$("#myTable").on('click','.fa-trash',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value Number
     
     var data=col1;

     window.open("delete.php?id=" + col1,  "_self");
});

});
       
 }
              
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    الرئيسية
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item"  href="home.php">الرئيسية</a>
                    <a class="dropdown-item" href="#">المستخدمين</a>
                    <a class="dropdown-item" href="add.php">اضافة نتيجة جديدة</a>
                    <a class="dropdown-item" href="#">عرض النتائج   </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid bg-primary">
        <h4 style="color: white;" class="row justify-content-center">عرض كل النتائج</h4>
        <br>
    </div>
    <div dir="ltr" class="row-cols-6 ">
        <div class="form-outline">
                <input type="text" onkeyup="search_result" id="search"  class="form-control" size="10px" />    
        </div>
    </div>
    <br>
    <div class="result"></div>
    
     <?php
echo "<table id='myTable' class='table table-hover'  >";
echo "<thead><tr><th>#</th><th>E.No</th><th>الاسم</th><th>الرقم القومي</th><th>جواز السفر</th><th>نتيجة الفحص</th><th>الفحص</th><th>الرابط</th><th>عرض</th></tr></thead>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td >" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$dbname= "clabsmvp_clabs";
$username = "clabsmvp_jim";
$password = "uZzGL(h;Uf17";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, eno, name, nId, passport, exresult, exam, link, view FROM results ORDER BY id DESC;");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</body>
</html>