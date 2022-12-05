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
    <link rel="stylesheet" href="style-review.css">

    <title>View Page</title>
</head>
<body>
  
    <div class="container mt-5">

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Review Page 
                            <a href="adminpage.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM review WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                <label class="name" for="name">Name</label>
                                <p class="form-control">
                                    <?=$student['name'];?>
                                </p>
                                <label class="college" for="college">College Name</label>
                                <p class="form-control">
                                    <?=$student['college'];?>
                                </p>
                                
                                <div class="stream">
                                    
                                    <p class="head">Education Stream</p>
                                    <p class="form-control">
                                        <?=$student['stream'];?>
                                    </p>

                                <div class="education">
                
                                    <p class="Head">College Education Rating</p>
                                    <p class="form-control">
                                        <?=$student['education'];?>
                                    </p>
                                    
                
                                <div class="faculty">

                                    <p class="head">Faculty Rating</p>
                                    <p class="form-control">
                                        <?=$student['faculty'];?>
                                    </p>


                                <div class="infra">

                                    <p class="head">Infrastructure Rating</p>
                                    <p class="form-control">
                                        <?=$student['infrastructure'];?>
                                    </p>

                                    <div class="accomodation">
                                        
                                        <p class="head">Hostel & Mess Rating</p>
                                        <p class="form-control">
                                            <?=$student['accomodation'];?>
                                        </p>

                                        <div class="higherEdu">
                                            
                                            <p class="head">Internship and Research Opportunities Rating</p>
                                            <p class="form-control">
                                                <?=$student['higherEdu'];?>
                                            </p>

                                        <div class="placement">
                                        
                                            <p class="head">Placements Rating</p>
                                            <p class="form-control">
                                                <?=$student['placements'];?>
                                            </p>

                                        <div class="clubs">
                                            
                                            <p class="head">Clubs Rating</p>
                                            <p class="form-control">
                                                <?=$student['clubs'];?>
                                            </p>

                                            <div class="overall">
                                                
                                                <p class="head">Overall rating of the College</p>
                                                <p class="form-control">
                                                    <?=$student['overall'];?>
                                                </p>
                                                
                                            <label class="exp" for="exp">Experience about the college</label><br>
                                            <p class="form-control">
                                                    <?=$student['exp'];?>
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