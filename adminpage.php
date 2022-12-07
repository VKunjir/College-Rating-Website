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

    <title>Admin - Page</title>
    <style>
    body{
        margin:0 ;
        padding: 0;
        font-family: montserrat;
        background: url("https://png.pngtree.com/thumb_back/fh260/back_our/20190628/ourmid/pngtree-exam-to-help-postgraduate-refueling-review-preparation-background-image_275864.jpg");
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    </style>
        <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
    <div class="container mt-4">

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Review Details
                            <a href="index.php" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>College</th>
                                    <th>Stream</th>
                                    <th>Education</th>
                                    <th>Faculty</th>
                                    <th>Infrastructure</th>
                                    <th>Accomodation</th>
                                    <th>HigherEdu</th>
                                    <th>Placement</th>
                                    <th>Clubs</th>
                                    <th>Overall</th>
                                    <th>Experience</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM review";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['name']; ?></td>
                                                <td><?= $student['college']; ?></td>
                                                <td><?= $student['stream']; ?></td>
                                                <td><?= $student['education']; ?></td>
                                                <td><?= $student['faculty']; ?></td>
                                                <td><?= $student['infrastructure']; ?></td>
                                                <td><?= $student['accomodation']; ?></td>
                                                <td><?= $student['higherEdu']; ?></td>
                                                <td><?= $student['placements']; ?></td>
                                                <td><?= $student['clubs']; ?></td>
                                                <td><?= $student['overall']; ?></td>
                                                <td><?= $student['exp']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="Edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>