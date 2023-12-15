<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM form1 WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Firstname</label>
                                        <input type="text" name="fname" value="<?=$student['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>lastname</label>
                                        <input type="text" name="lname" value="<?=$student['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Courses</label>
                                        <input type="text" name="courses" value="<?=$student['courses'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>StudentBatch</label>
                                        <input type="text" name="batch" value="<?=$student['batch'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>StudentCountry</label>
                                        <input type="text" name="country" value="<?=$student['country'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>StudentEmail</label>
                                        <input type="email" name="gmail" value="<?=$student['gmail'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Semester</label>
                                        <input type="text" name="semester" value="<?=$student['semester'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MetricYear</label>
                                        <input type="text" name="metricYear" value="<?=$student['metricYear'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>InterYear</label>
                                        <input type="text" name="interYear" value="<?=$student['interYear'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sports</label>
                                        <input type="text" name="sports" value="<?=$student['sports'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Fees</label>
                                        <input type="text" name="fees" value="<?=$student['fees'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>