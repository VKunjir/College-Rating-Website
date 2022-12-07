
<?php


$server = "localhost";
$userName = "root";
$authen_db = "";
$dbName = "student";

$con = mysqli_connect($server,$userName,$authen_db,$dbName);


if (isset($_GET['search'])) {
  $search = mysqli_real_escape_string($con, $_GET['search']);
}

?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Search page</title>
    
    <!-- <?php include("include/header.php"); ?> -->

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
    <body>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <!-- <img src="<?php echo $row['banner'] ?>" class="card-img-top" alt="..."> -->
            <div class="card-body">
            <a href="temp.php?name=<?= $row['name']; ?>"><h5 class="card-title"><?php echo $row['college'] ?></h5></a>
            <p class="card-text"></p>
            </div>
        </div>      
        </div>
    </body>
    
    <?php

      }
    }else{
      echo "College";
    }


    ?>
    
  </div>   
</section>
</body>
</html>


<!-- <?php include("include/footer.php"); ?> -->