<?php

// Initialize the session
session_start();  
 if(isset($_SESSION["username"]))  
 {  
    //   echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '&nbsp; <a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:index.php");  
 }  
$servername = "localhost";
$dbname= "clabsmvp_clabs";
$username = "clabsmvp_jim";
$password = "uZzGL(h;Uf17";
$message = ""; 
try  
 {  
      $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["add"]))  
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
        
        // quiery
        $sql = "INSERT INTO results (eno, name, vfrom, vto, nId, passport, excenter, exdate, exam, exresult)
        VALUES ($eno, '$name', '$vfrom', '$vto', '$nId', '$passport', '$excenter', '$exdate', '$exam', '$exresult')";
        // use exec() because no results are returned
        $connect->exec($sql);
        echo "New record created successfully"; 
        header("location:home.php");
              
           }  
      }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 $connect = null;
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Clabs</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body >
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    الرئيسية
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="home.php">الرئيسية</a>
                    <a class="dropdown-item" href="#">المستخدمين</a>
                    <a class="dropdown-item" href="add.php">اضافة نتيجة جديدة</a>
                    <a class="dropdown-item" href="#">عرض النتائج   </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid bg-primary"><h3 style="color: white;" class="row justify-content-center">اضافة نتيجة فحص</h3>
    <br>
    </div>
    <div class="container">
        <div class="container" >  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
      <br>  
          <div class="container text-right">  
            <div class="col-lg-12 ">
                <form method="post"  class="myform ">
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">E.No</label>
                        <input type="text" class="form-control" name="eNo" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">الاسم</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">تاريخ الزيارة من</label>
                        <input onfocus="(this.type='date')" class="form-control" name="datefrom" placeholder="تاريخ الزيارة من" >                        
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">تاريخ الزيارة الي</label>
                        <input onfocus="(this.type='date')" class="form-control" name="dateto" placeholder="تاريخ الزيارة الي" >                        
                    </div>
                  </div>
                   <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label"> الرقم القومي</label>
                        <input type="text" class="form-control" name="nId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">جواز السفر</label>
                        <input type="text" class="form-control" name="passport" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">مركز الفحص</label>
                        <input type="text" class="form-control" name="examcenter" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">تاريخ الفحص</label>
                        <input type="text" class="form-control" name="examdate" placeholder="تاريخ الفحص" >
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">الفحص</label>
                        <input type="text" class="form-control" name="exam" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">نتيجة الفحص</label>
                        <select class="form-select" name="examresult"  aria-label="Default select example">
                            <!-- <option selected>Open this select menu</option> -->
                            <option selecte  value="Negative">Negative</option>
                            <option value="Postive">Postive</option>
                            <!-- <option value="3">Three</option> -->
                          </select>
                    </div> 
                    <div class="mb-3">
                        <button type="submit" name="add" class="btn btn-primary mb-3">اضافة</button>
                    </div>
                  </div>
                </form>
          </div>
          
    </div>
</body>
</html>