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
    <link rel="stylesheet" href="style-review.css">

    <title>Review Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Review Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['name']))
                        {
                            $student_name = mysqli_real_escape_string($con, $_GET['name']);
                            $query = "SELECT * FROM review WHERE name='$student_name' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
            
                                <label class="name" for="name">Name</label>
                                <input id='name' type="text" placeholder="" name="name" value="<?= $student['name']; ?>" required >
                                <label class="college" for="college">College Name</label>
                                <input id='college' type="text" placeholder="" name="college" value="<?= $student['college']; ?>" required>
                                
                                <div class="stream">
                                    
                                    <p class="head">What is your Education Stream ?</p>
                                    <input type="text" id="Stone" name="stream" value="<?= $student['stream']; ?>">

                                <div class="education">
                
                                    <p class="Head">How would you rate College Education?</p>
                                    <input type="number" id="eduone" name="education" value="<?= $student['education']; ?>">
                
                                <div class="faculty">

                                    <p class="head">How would you rate faculty?</p>
                                    <input type="number" id="facone" name="faculty" value="<?= $student['education']; ?>">

                                <div class="infra">

                                    <p class="head">How would you rate infrastructure?</p>
                                    <input type="number" id="infraone" name="infrastructure" value="<?= $student['infrastructure']; ?>">

                                    <div class="accomodation">
                                        
                                        <p class="head">How would you rate hostel and mess?</p>
                                        <input type="number" id="accone" name="accomodation" value="<?= $student['accomodation']; ?>">

                                        <div class="higherEdu">
                                            
                                            <p class="head">How would you rate college based on Internship and Research Opportunities?</p>
                                            <input type="number" id="hEduone" name="higherEdu" value="<?= $student['higherEdu']; ?>">

                                        <div class="placement">
                                        
                                            <p class="head">How would you rate college based on placements?</p>
                                            <input type="number" id="plcone" name="placements" value="<?= $student['placements']; ?>">

                                        <div class="clubs">
                                            
                                            <p class="head">How would rate college clubs</p>
                                            <input type="number" id="clbone" name="clubs" value="<?= $student['clubs']; ?>">

                                            <div class="overall">
                                                
                                                <p class="head"> What is your Overall rating of the College?</p>
                                                <input type="number" id="ovrone" name="overall" value="<?= $student['clubs']; ?>"><br>
                                                
                                            <label class="exp" for="exp">Write your experience about the college</label><br>
                                            <textarea id="exp" name="exp" placeholder="Write something.." rows="10" cols="50" value="<?= $student['exp']; ?>"></textarea>

                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="edit_data" >Update Review</button>
                            </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Review Found</h4>";
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