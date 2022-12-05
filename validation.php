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
        body{
            text-align:center
        }
    </style>
</head>
<body>
    <form action="my-review.php">
        <label for="name">Enter Username</label>
        <input type="text" name="name"><br>
        <label for="name">submit</label>
        <input type="submit" name="submit">
    </form>
</body>
</html>