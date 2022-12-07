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
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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

.colleges{
    text-align:center;
    margin:auto;
    font-size: 30px;
    background-color: white;
    width: 30vw;
    margin: 10px auto;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

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
                <img src="search.svg" alt="" class="searchLogo">
                <form class="form-inline my-2 my-lg-0" action="all-post.php" method="get" action="#">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-outline-success bg-success text-white my-3" type="submit">Search</button>
                </form>
                <section class="container-fluid mt-5">
                <div class="row">

                   
                    
                </div>   
                </section>
                
            </div>
            
            <div class="right">
                
                <!-- <a href="signup.php"><button class="loginBt" >SignUp</button></a>
                <a href="login.php"><button class="loginBt">Login</button></a> -->
                <a href="index.php"><button class="loginBt">Back</button></a>
            </div>
        </nav>
        <div class="colleges">
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
                    }


                    ?>
        </div>
       

</html>