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
    <title>Name Page</title>
    <style>
        body {
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  background-color: rgb(37, 37, 151);
}

.formContainer {
  background-color: rgb(244, 114, 114);
  width: 50vw;
  margin: auto;
  padding: 20px;
  margin-top: 50px;
  border-radius: 12px;
  font-size: 25px;
  font-weight: bold;
}

label {
  display: block;
}

input {
  margin: 10px;
}

.uInput {
  width: 200px;
  height: 30px;
  background-color: rgb(181, 181, 225);
  border-radius: 10px;
  border: black 2px solid;
  padding: 0px 10px;
  color: rgb(1, 1, 1);
  font-weight: bold;
  font-size: 20px;
}

.submitBtn {
  height: 50px;
  width: 100px;
  border-radius: 10px;
  font-size: 20px;
  font-weight: bold;
  padding: 5px;
  background-color: greenyellow;
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

    <link rel="stylesheet" href="style-validation.css"> 
</head>
<body>
    
    <div class="formContainer animate pop">
    <h2>Find Your review!</h2>
    <form action="my-review.php">
        <label for="name">Enter Username</label>
        <input type="text" name="name" class="uInput"><br>
        <input type="submit" name="submit" class="submitBtn">
    </form>
</div>
</body>
</html>