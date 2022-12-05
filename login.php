<?php
    $host = "localhost";
    $user = "root" ;
    $password = "";
    $db = "student" ;

    session_start();
    
    $data = mysqli_connect($host,$user,$password,$db);
    if($data == false)
    {
        die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from `user` where username='".$username."' AND  password='".$password."' ";

        $result = mysqli_query($data,$sql);

        $row = mysqli_fetch_array($result);

            $_SESSION["username"] = $username;
            header("location: index2.php");
    }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page for users</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>body{
    margin:0 ;
    padding: 0;
    font-family: montserrat;
    background: url('https://tse4.mm.bing.net/th?id=OIP.P7Q4Du34wV7vXihk2OD_kgHaEK&pid=Api&P=0');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.center{
    position: absolute;
    top: 50% ;
    left: 50% ;
    transform: translate(-50%, -50%);
    width:  400px;
    background: rgb(0, 0, 0);
    border-radius: 10px ;
}

.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    color: #51E1ED;
}
.center form{
    padding: 0 40px;
    box-sizing: border-box;
}

form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding: 0 50px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.txt_field label{
    position: absolute;
    top: 50% ;
    left: 5px ;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}
.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #2691d9;
    transition: .5s;
}
.txt_field input:focus ~label,
.txt_field input:valid ~ label{
    top: -5px;
    color: #2691d9;
}
.txt_field input:focus ~span::before,
.txt_field input:valid ~ span::before{
    width: 100px;
}
.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}
input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
.signup_link{
    margin: 30px 0;
    text-align: left;
    font-size: 16px;
    color: #29d5cc;
}
.signup_link a{
    color: #e2e97c;
    text-decoration: none;
}
.signup_link a:hover{
    text-decoration: underline;
}
</style>
</head>
<body>
    <!-- Write a code for login page for College-Rating-Website -->
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="#">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <a href="index.php?name=<?= $row['name']; ?>"></a><input type="submit" value="Login" name="submit">
            <div class="signup_link">
                Not a member ? <a href="signup.php">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>