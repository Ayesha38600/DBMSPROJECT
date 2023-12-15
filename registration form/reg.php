<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['pass'];
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
  
      $sql = "INSERT INTO `registration` (`fname`, `lname`, `email`, `password`)
      
       VALUES ('$fname', '$lname', '$email', '$password');";
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
    <title>Registration form</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="regform">
        <h1>Register here</h1>
        <form action="/uniproject/registration form/reg.php" method="post">
            <p>First name:</p>
            <input type="text" name="fname" placeholder="first name">
            <p>Last name:</p>
            <input type="text" name="lname" placeholder="last name">
            <p>Email:</p>
            <input type="email" name="email" placeholder="email">
            <p>Password:</p>
            <input type="password" name="pass" placeholder="password">
            <button type="submit">Reister</button>
        </form>
    </div>
</body>
</html>