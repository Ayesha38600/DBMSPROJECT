<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM form1 WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $courses = mysqli_real_escape_string($con, $_POST['courses']);
    $batch = mysqli_real_escape_string($con, $_POST['batch']);
    $country = mysqli_real_escape_string($con, $_POST['country']);

    $gmail= mysqli_real_escape_string($con, $_POST['gmail']);


    $semester = mysqli_real_escape_string($con, $_POST['semester']);
   
    $metricYear = mysqli_real_escape_string($con, $_POST['metricYear']);

    $interYear = mysqli_real_escape_string($con, $_POST['interYear']);

    $sports = mysqli_real_escape_string($con, $_POST['sports']);
   
    $fees = mysqli_real_escape_string($con, $_POST['fees']);
   


    $query = "UPDATE form1 SET fname='$fname',lname='$lname',courses='$courses',batch='$batch',country='$country' ,
    
    gmail ='$gmail',   semester='$semester',

    metricYear='$metricYear',  interYear='$interYear',   sports='$sports', fees='$fees'
    
    
    
    WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $courses = mysqli_real_escape_string($con, $_POST['courses']);
    $batch = mysqli_real_escape_string($con, $_POST['batch']);
    $country = mysqli_real_escape_string($con, $_POST['country']);

    $gmail= mysqli_real_escape_string($con, $_POST['gmail']);


    $semester = mysqli_real_escape_string($con, $_POST['semester']);
   
    $metricYear = mysqli_real_escape_string($con, $_POST['metricYear']);

    $interYear = mysqli_real_escape_string($con, $_POST['interYear']);

    $sports = mysqli_real_escape_string($con, $_POST['sports']);
   
    $fees = mysqli_real_escape_string($con, $_POST['fees']);
    



































    $query = "INSERT INTO form1 (fname,lname,courses,batch,country,gmail,semester ,metricYear ,interYear ,sports ,fees ) VALUES ('$fname','$lname','$courses','$batch', '$country', '$gmail', '$semester',  '$metricYear' , '$interYear'  , 
    
    
    
    '$sports'  , '$fees')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>