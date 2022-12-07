<?php
    session_start();
    $success=0;
    $user=0;
    $invalid=0;
    $exits=0;
    $server = "localhost";
    $username = "root" ;
    $password = "" ;
    $db = "student";
    $con = mysqli_connect($server, $username, $password,$db);
    
    if(!$con){
        die(mysqli_error($con));
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // include 'connect.php';
        $username = $_POST['username'];
        $checkuser  = "select * from `user` where username = '$username' ";
        $result = mysqli_query($con,$checkuser);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $exits = 1;
            // echo "Username already exits";
        }
        else{
            
        $username = $_POST['username'];
        $lname = $_POST['lname'];
        $email = $_POST['email']; 
        $prn = $_POST['prn'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $sql = "Select * from `user` where username = '$username'" ;

        $result = mysqli_query($con,$sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
                $user = 1;
            }
            else{
                if($password == $cpassword){
                $sql="INSERT INTO `user` (`username`, `lname`, `prn`, `email`, `password`) VALUES ('$username', '$lname', '$prn', '$email', '$password')";
            $result = mysqli_query($con,$sql);
            if($result){
                $success=1;
                header('location:login.php');
            }
        }else{
                
                $invalid = 1;
            }
            }
            }

            // $con->close();
        }
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        *{
    box-sizing: border-box;
}
body{
    background: url('https://tse1.mm.bing.net/th?id=OIP.dNYcCCppSwm-lmvJgRqoWAHaF1&pid=Api&P=0');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: 'Roboto', sans-serif;
}
.signup-box{
    width: 360px;
    height: 620px;
    margin:50px  auto;
    background-color: #fff;
    /* border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0,0.1); */
}
h1{
    text-align: center;
    padding-top: 5px;
}
h4{
    text-align: center;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    border: black;
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}
form input{
    width: 100%;
    padding: 4.5px;
    border: none;
    border: 1px solid gray;
    border-radius: 15px;
    outline: none;
}
input[type="button"]{
    width: 320px;
    height: 35px;
    margin-top: 10px;
    border: none;
    background-color: #49c1a2;
    font-size: 25px;
    cursor: pointer;
}
input[type="button"]:hover{
    background-color: #66AD47;
}
input[type="button"]:active{
    background-color: #35BDD0;
}
p{
    color: rgb(0, 0, 0);
    text-align: center;
}
.para-2{
    text-align: center;
    color: rgb(12, 12, 12);
    font-size: 15px;
    /* margin-top: -1px; */
}
.para-2 a{
    color: #49c1a2;
}
.btn{
    margin-left : 90px;
    color: white;
    background-color: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px ;
    cursor: pointer;
}
    </style>
</head>
<body>

    <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Ohh no sorry </strong> User already exit <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true"> &time;</span> 
        </button>
        </div>'; 
    }
    ?>
    <?php
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Ohh no sorry </strong> invalid credentials <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true"> &time;</span> 
        </button>
        </div>'; 
    }
    ?>
    <?php
    if($success){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Success </strong> You are successfully signe upt <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true"> &time;</span> 
        </button>
        </div>'; 
    }
    ?>




    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <?php
            if($exits){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center"><strong>Username already exit</strong>
                </div>'; 
            }
        ?>
        <form action="" method="post">
            <label >First Name</label>
            <input type="text" placeholder="" name="username" required>
            <label >Last Name</label>
            <input type="text" placeholder="" name="lname" required>
            <label >PRN Number</label>
            <input type="number" placeholder="" name="prn" required>
            <label >Email</label>
            <input type="email" placeholder="" name="email" required>
            <label >Password</label>
            <input type="password" placeholder="" name="password" name="password"required>
            <label >Confirm Password</label>
            <input type="password" placeholder="" name="cpassword" required>
            <button class="btn">Submit</button>
        </form>
        <p class="para-2">By clicking the Sign Up button, you agree to our
        <a href="#">Terams and Condition</a> and <a href="#">Policy Privacy</a></p>
        <p>Already have an account?<a href="login.php">Login</a></p>
    </div>
</body>
</html>