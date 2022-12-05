<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="scripts.js"></script>
    <title>PBL</title>
</head>
<body>
    <div class="navbar">
        <!-- <?php include('message.php');?> -->
        <nav>

            <div class="left">
                <img src="logo1.png" alt="" class="logo">
                <a href="review.php"><button class="reviewBt">Write a review</button></a>
            </div>

            <div class="search">
                <form action="#" method="get"></form>
                <img src="search.svg" alt="" class="searchLogo">
                <form class="form-inline my-2 my-lg-0" action="all-post.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-outline-success bg-success text-white my-2 my-sm-0" type="submit">Search</button>
                </form>
                <section class="container-fluid mt-3">
                <div class="row">

                    <?php
                    if (isset($_GET['search'])) {
                        $search = mysqli_real_escape_string($con, $_GET['search']);
                    }

                    
                    if (isset($_GET['search'])) {
                    $query = mysqli_query($con, "SELECT * FROM review WHERE college LIKE '%$search%' OR exp LIKE '%$search%'");
                    }
                    
                    $checkQuery = mysqli_num_rows($query);
                    if ($checkQuery) {
                    while ($row = mysqli_fetch_array($query)) {     

                    ?>
                    <div class="col mt-5">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="<?php echo $row['banner'] ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body ">
                            <a href="temp.php?name=<?= $row['name']; ?>"><h5 class="card-title"><?php echo $row['college'] ?></h5></a>
                            <p class="card-text"></p>
                            </div>
                        </div>      
                        </div>
                    
                    <?php

                    }
                    }else{
                    echo "College";
                    }


                    ?>
                    
                </div>   
                </section>
                
            </div>
            
            <div class="right">
                
                <a href="signup.php"><button class="loginBt" >SignUp</button></a>
                <a href="login.php"><button class="loginBt">Login</button></a>
            </div>
            <div class="right-most">
                <img src="logo1.png" alt="" class="logo">
                <a href="validation.php"><button class="reviewBt">My Review</button>
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
            
            
                </a>
                <a href="index.php">Back</a>
            </div>
        </nav>
    
</body>
</html>