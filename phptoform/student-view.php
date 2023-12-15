<?php
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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
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
                                
                                    <div class="mb-3">
                                        <label>firstName</label>
                                        <p class="form-control">
                                            <?=$student['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>lastName</label>
                                        <p class="form-control">
                                            <?=$student['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Course</label>
                                        <p class="form-control">
                                            <?=$student['courses'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Batch</label>
                                        <p class="form-control">
                                            <?=$student['batch'];?>
                                        </p>
                                    </div>
                                   
                                 
                                    <div class="mb-3">
                                        <label>Student Country</label>
                                        <p class="form-control">
                                            <?=$student['country'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Gmail</label>
                                        <p class="form-control">
                                            <?=$student['gmail'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student semester</label>
                                        <p class="form-control">
                                            <?=$student['semester'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student metricYear</label>
                                        <p class="form-control">
                                            <?=$student['metricYear'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student interYear</label>
                                        <p class="form-control">
                                            <?=$student['interYear'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sports</label>
                                        <p class="form-control">
                                            <?=$student['sports'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fees</label>
                                        <p class="form-control">
                                            <?=$student['fees'];?>
                                        </p>
                                    </div>













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