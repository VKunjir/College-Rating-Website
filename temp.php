<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>
  	  	  	 	
               <?php 
                if(isset($_GET['name']))
                {
                  $student_name = mysqli_real_escape_string($con, $_GET['name']);
                  $query = "SELECT * FROM review WHERE name='$student_name' ";
                  $query_run = mysqli_query($con, $query);

                $query_run=mysqli_query($con , $query);

                // $row = mysqli_fetch_array($result,MYSQLI_BOTH)
                 if(mysqli_num_rows($query_run) > 0)
                 {
                     $student = mysqli_fetch_array($query_run);
                ?>
                
    <div class="container-xl">
  	<div class="row">
  	  <div class="col-md-12">
  	  	<h2><?=$student['college'];?></h2>
  	  	<div class="carousel slide">
  	  	  <div class="carousel-inner">
  	  	  	<div class="item carousel-item active">
              <h3><?=$student['name'];?></h3>
  	  	  	 <div class="row">


                <!-- Education review -->
                 <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="edu.png" class="img-fluid" alt="education-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Education"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['education'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>
                <!-- Faculty review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="faculty.jpg" class="img-fluid" alt="faculty-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Faculty"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['faculty'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>            
                <!-- Infrastructure review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="infra.jpg" class="img-fluid" alt="Infrastructure-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Infrastructure"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['infrastructure'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>
                <!-- Accomodation review -->
                <div class="col-sm-3 my-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="acco.jpg" class="img-fluid" alt="Accomodation-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Accomodation"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['accomodation'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>            

                 <!-- Inter/RND review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="intern-RND.jpg" class="img-fluid" alt="Inter/RND-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Intership/RND"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['higherEdu'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>

                 <!-- Placements review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="place.jpg" class="img-fluid" alt="Placements-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Placements"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['placements'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>

                <!-- Clubs review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="clubs.jpg" class="img-fluid" alt="Clubs-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Clubs"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['clubs'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>



                 <!-- Overall review -->
                <div class="col-sm-3 my-3">
                   <div class="thumb-wrapper">
                   	<div class="img-box">
                   	 <img src="overall.jpg" class="img-fluid" alt="Overall-image">
                   	</div>

                     <div class="thumb-content">
                       <h4><?php echo "Overall"?></h4>                                 
                         <div class="star-rating">
                           <ul class="list-inline">
                            <?php 
                             
                             $start=1;
                             while ($start <= 5) 
                             {
                             	if ($student['overall'] < $start) 
                                {
                                 ?>
                                 <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 <?php
                             	}else{
                             	 ?>
                                 <li class="list-inline-item"><i class="fa fa-star"></i></li>
                             	 <?php
                             	}

                             	$start++;
                             }
                            ?>                
                          </ul>
                        </div>
                      </div> 
                   </div>
                 </div>



                  
                

  	  	  	 </div>
  	  	  	</div>
  	  	  </div>
  	  	</div>
  	  </div>
  	</div>
  </div>
  <div class="item carousel-item active">
      <h2>Experience</h2>
      <h5 style="text-align:center"><?=$student['exp'];?></h5>
      <a href="index2.php"><h2>Back</h2></a>
  <div class="row">
  </div>
  </div> 
  <?php
        }
          else
          {
              echo "<h4>No Such Id Found</h4>";
          }
       }
    ?>
</body>
</html>