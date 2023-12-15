<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Student_Name = $_POST['fname'];
    $password = $_POST['passwordd'];
  // Submit these to a database

  echo "i am connecting php with database SQL <br>";
  //connected  to the database  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "bilal";
  
  //creating connection
  $conn = mysqli_connect($servername, $username, $password,$database);
  if(!$conn){
      die("sorry failed in connection with database SQL" .mysqli_connect_error()) ;
  
  }
  else{
      echo ("connection is being succesful");
  
      $sql = "INSERT INTO `form` (`fname`, `lname`) 
      VALUES ('$Student_Name ', '$password');";
        $result = mysqli_query($conn, $sql);
  //connection of database
  if($result){
      echo "your entery has been submitted succesfully";
  }
  else{
      echo "the connection is failed" . mysqli_error($conn);
  }
  
  
  }
      }

    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page Ayesha</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
<div class="login">
    <img src="logo.png" class="logo">
    <h1>Your Login</h1>
    <form action="/uniproject/login page/login.php" method="post">

        <!-- form men jo adres dena he wo usi file ka path dena he jahan par ye file mojod he  -->
        <p>Student Email</p>
        <input type="text" name="fname" placeholder="enter name">
            <p>password</p>
        <input type="text" name="lname" placeholder="enter password"><br>
        <!-- <button class="btn"><a href="#">LOGIN</a></button>
        <button><a href="#">Sign up Here</a> </button> -->
        <input type="submit" name="" value="login"><br>
        <input type="submit" name="" value="Sign up here"><br>
        <a href="#">Forget password?</a><br>
        <a href="#">You dont have an account?</a>
        


    </form>
</div>
</body>

</html>