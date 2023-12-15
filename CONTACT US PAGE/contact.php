<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
  // Submit these to a database

  echo "i am connecting php with database SQL <br>";
  //connected  to the database  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "sania";
  
  //creating connection
  $conn = mysqli_connect($servername, $username, $password,$database);
  if(!$conn){
      die("sorry failed in connection with database SQL" .mysqli_connect_error()) ;
  
  }
  else{
      echo ("connection is being succesful");
  
      $sql = "INSERT INTO `ays` (`fname`, `lname`, `email`, `mobile`) 
      VALUES ('$fname', '$lname', '$email', '$mobile');";
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
    <title>Contact us</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="/uniproject/CONTACT US PAGE/contact.php" method="post">
            <h1>Contact Us</h1>
            <input type="text" id="first name" name="fname" placeholder="first name" required>
            <input type="text" id="last name"  name="lname" placeholder="last name" required>
            <input type="email" id="email"  name="email"  placeholder="Email" required>
            <input type="text" id="mobile"  name="mobile"  placeholder="Mobile" required>
        
            <button><a href="#">send</a></button>
        </form>
    </div>
</body>
</html>