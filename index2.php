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
    <style>
        body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin: 0px;
    padding: 0px;
    background-color: #1a2491;
    color: white;
}

.navbar{
    padding: 0px;
}

nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 10vh;
    width: 100vw;
    background-color: #D9D9D9;
}

.logo, .searchLogo{
    height: 50px;
    width: 50px;
    margin: 0px 10px;
}

.searchBox{
    border-radius: 50px;
    width: 30vw;
    border: none;
    background-color: #737373;
    color: white;
    padding-left: 20px;
    font-size: 15px;
}



.searchBox::placeholder{
    color: white;
}

button{
    border-radius: 20px;
    margin: 0px 10px;
    height: 95%;
    width: 100px;
    font-size: 15px;
    border:none;
    font-weight: bold;
}

.search, .right, .left{
    display: flex;
    height: 8vh;
}

.reviewBt{
    background-color: #008037;
    color: white;
}

.loginBt{
    background-color: #03989E;
    color: white;
}

.topHeading{
    margin: 30px auto;
    text-align: center;

}



.colleges {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
}

.enggHeading, .medHeading, .sciHeading{
    text-align: center;
}

.enggClgNames, .medClgNames, .sciClgNames{
    border-radius: 10px;
    background-color:#A6A6A6;
    width: 27vw;
    height: 60vh;

    color: black;
    font-weight: bold;
    
}

.enggList, .medList, .sciList{
    list-style: none;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 10px;
    font-size: 20px;
}

.enggClgNames{
    background-image: url(engg.png);
    
}

.medClgNames{
    background-image: url(med.png);
}

.sciClgNames{
    background-image: url(sci.png);
}


a, a:visited{
    color: black;
    text-decoration: none;
}




.animate.pop {
    animation-duration: 0.5s;
    animation-name: animate-pop;
    animation-timing-function: cubic-bezier(0.26, 0.53, 0.74, 1.48);
  }
  
  @keyframes animate-pop {
    0% {
      opacity: 0;
      transform: scale(0.5, 0.5);
    }
  
    100% {
      opacity: 1;
      transform: scale(1, 1);
    }
  }



    </style>
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
                <form action="search.php" method="get"></form>
                <img src="search.svg" alt="" class="searchLogo">
                <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-outline-success bg-success text-white my-2 my-sm-0" type="submit">Search</button>
                </form>
            
                
            </div>
            
            <div class="right">
                
                <!-- <a href="signup.php"><button class="loginBt" >SignUp</button></a> -->
                <a href="index.php"><button class="loginBt">Log-out</button></a>
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
            </div> 
        </nav>
    </div>
    <!-- <?php include  'dbcon.php'; ?> -->
    <h1 class="topHeading animate pop">Top colleges</h1>

    <div class="colleges animate pop">
        <div class="engg">
            <h2 class="enggHeading">Engineering</h2>
            <div class="enggClgNames">
                <ul class="enggList">
                    <!-- <a href="college.html"><li>college, location</li></a>
                    <li>college, location</li>
                    <li>college, location</li>
                    <li>college, location</li> -->
                    <?php 
                                    $query = "SELECT * FROM review WHERE stream='Engineering' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                            <td>
                                                <a href="temp.php?name=<?= $student['name']; ?>"><td><?= $student['college']; ?></a>
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
                </ul>
            </div>
        </div>
        <div class="med">
            <h2 class="medHeading">Medical</h2>
            <div class="medClgNames">
                <ul class="medList">
                <?php 
                                    $query = "SELECT * FROM review WHERE stream='Medical' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td>
                                                <a href="temp.php?name=<?= $student['name']; ?>"><td><?= $student['college']; ?></a>
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
                </ul>
            </div>
        </div>
        <div class="sci">
            <h2 class="sciHeading">Pure Science</h2>
            <div class="sciClgNames">
                <ul class="sciList">
                <?php 
                                    $query = "SELECT * FROM review WHERE stream='Pure Science' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                            <td>
                                                <a href="temp.php?name=<?= $student['name']; ?>"><td><?= $student['college']; ?></a>
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
                </ul>
            </div>
        </div>
    </div>
</body>
</html>