<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?> -
        <!-- - ye ?top par msg display kar rha he -------- -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control">
                                <!-- name men wo he jo db men mojod he  -->
                            </div>
                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control">
                                <!-- name men wo he jo db men mojod he  -->
                            </div>
                            <div class="mb-3">
                                <label>Student Course</label>
                                <input type="text" name="courses" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Batch</label>
                                <input type="text" name="batch" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student country</label>
                                <input type="text" name="country" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Student Email</label>
                                <input type="email" name="gmail" class="form-control">
                            </div>
                           
                            
                            <div class="mb-3">
                                <label>Semester</label>
                                <input type="text" name="semester" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>MetricYear</label>
                                <input type="text" name="metricYear" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>InterYear</label>
                                <input type="text" name="interYear" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <label>Sports</label>
                                <input type="text" name="sports" class="form-control">
                            </div>
                           
                          
                            <div class="mb-3">
                                <label>Fees</label>
                                <input type="text" name="fees" class="form-control">
                            </div>
                            



                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student Record</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
