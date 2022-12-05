<?php
session_start();
?>
<!DOCTYPE html>
<html lang1? ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-review.css">
</head>
<body>
    <div class="review-box">
        <h1>Write a Review</h1>
        <?php include('message.php'); ?>
        <form action="code.php" method="POST">

            
            <label class="name" for="name">Name</label>
            <input id='name' type="text" placeholder="" name="name" required>
            <label class="college" for="college">College Name</label>
            <input id='college' type="text" placeholder="" name="college" required>
            
            <div class="stream">
                <p class="head">What is your Education Stream ?</p>
                <div class="options">
                <input type="radio" id="Stone" name="stream" value="Engineering">
                  <label for="Stone">Engineering</label>
        
                     <input type="radio" id="Sttwo" name="stream" value="Medical">
                      <label for="Sttwo">Medical</label>
        
                      <input type="radio" id="Stthree" name="stream" value="Pure Science">
                      <label for="Stthree">Pure Science</label>

                   </div>
            
            <div class="education">
                <p class="Head">How would you rate College Education?</p>
                <div class="options">
                    <input type="radio" id="eduone" name="education" value="1">
                    <label for="eduone">1</label>

                    <input type="radio" id="edutwo" name="education" value="2">
                    <label for="edutwo">2</label>

                    <input type="radio" id="eduthree" name="education" value="3">
                    <label for="eduthree">3</label>

                    <input type="radio" id="edufour" name="education" value="4">
                    <label for="edufour">4</label>

                    <input type="radio" id="edufive" name="education" value="5">
                    <label for="edufive">5</label>
                </div>
            
            <div class="faculty">
                <p class="head">How would you rate faculty?</p>
                <div class="options">
                    <input type="radio" id="facone" name="faculty" value="1">
                    <label for="facone">1</label>

                    <input type="radio" id="factwo" name="faculty" value="2">
                    <label for="factwo">2</label>

                    <input type="radio" id="facthree" name="faculty" value="3">
                    <label for="facthree">3</label>

                    <input type="radio" id="facfour" name="faculty" value="4">
                    <label for="facfour">4</label>

                    <input type="radio" id="facfive" name="faculty" value="5">
                    <label for="facfive">5</label>
                </div>

            <div class="infra">
                <p class="head">How would you rate infrastructure?</p>
                <div class="options">
                    <input type="radio" id="infraone" name="infrastructure" value="1">
                    <label for="infraone">1</label>

                    <input type="radio" id="infratwo" name="infrastructure" value="2">
                    <label for="infratwo">2</label>

                    <input type="radio" id="infrathree" name="infrastructure" value="3">
                    <label for="infrathree">3</label>

                    <input type="radio" id="infrafour" name="infrastructure" value="4">
                    <label for="infrafour">4</label>

                    <input type="radio" id="infrafive" name="infrastructure" value="5">
                    <label for="infrafive">5</label>
                </div>

                <div class="accomodation">
                    <p class="head">How would you rate hostel and mess?</p>
                    <div class="options">
                        <input type="radio" id="accone" name="accomodation" value="1">
                        <label for="accone">1</label>
    
                        <input type="radio" id="acctwo" name="accomodation" value="2">
                        <label for="acctwo">2</label>
    
                        <input type="radio" id="accthree" name="accomodation" value="3">
                        <label for="accthree">3</label>
    
                        <input type="radio" id="accfour" name="accomodation" value="4">
                        <label for="accfour">4</label>
    
                        <input type="radio" id="accfive" name="accomodation" value="5">
                        <label for="accfive">5</label>
                    </div>

                    <div class="higherEdu">
                        <p class="head">How would you rate college based on Internship and Research Opportunities?</p>
                        <div class="options">
                            <input type="radio" id="hEduone" name="higherEdu" value="1">
                            <label for="hEduone">1</label>
        
                            <input type="radio" id="hEdutwo" name="higherEdu" value="2">
                            <label for="hEdutwo">2</label>
        
                            <input type="radio" id="hEduthree" name="higherEdu" value="3">
                            <label for="hEduthree">3</label>
        
                            <input type="radio" id="hEdufour" name="higherEdu" value="4">
                            <label for="hEdufour">4</label>
        
                            <input type="radio" id="hEdufive" name="higherEdu" value="5">
                            <label for="hEdufive">5</label>
                        </div>

                    <div class="placement">
                        <p class="head">How would you rate college based on placements?</p>
                        <div class="options">
                            <input type="radio" id="plcone" name="placements" value="1">
                            <label for="plcone">1</label>
        
                            <input type="radio" id="plctwo" name="placements" value="2">
                            <label for="plctwo">2</label>
        
                            <input type="radio" id="plcthree" name="placements" value="3">
                            <label for="plcthree">3</label>
        
                            <input type="radio" id="plcfour" name="placements" value="4">
                            <label for="plcfour">4</label>
        
                            <input type="radio" id="plcfive" name="placements" value="5">
                            <label for="plcfive">5</label>
                        </div>

                    <div class="clubs">
                        <p class="head">How would rate college clubs</p>
                        <div class="options">
                            <input type="radio" id="clbone" name="clubs" value="1">
                            <label for="clbone">1</label>
        
                            <input type="radio" id="clbtwo" name="clubs" value="2">
                            <label for="clbtwo">2</label>
        
                            <input type="radio" id="clbthree" name="clubs" value="3">
                            <label for="clbthree">3</label>
        
                            <input type="radio" id="clbfour" name="clubs" value="4">
                            <label for="clbfour">4</label>
        
                            <input type="radio" id="clbfive" name="clubs" value="5">
                            <label for="clbfive">5</label>
                        </div>

                        <div class="overall">
                            <p class="head"> What is your Overall rating of the College?</p>
                            <div class="options">
                                <input type="radio" id="ovrone" name="overall" value="1">
                                <label for="ovrone">1</label>
            
                                <input type="radio" id="ovrtwo" name="overall" value="2">
                                <label for="ovrtwo">2</label>
            
                                <input type="radio" id="ovrthree" name="overall" value="3">
                                <label for="ovrthree">3</label>
            
                                <input type="radio" id="ovrfour" name="overall" value="4">
                                <label for="ovrfour">4</label>
            
                                <input type="radio" id="ovrfive" name="overall" value="5">
                                <label for="ovrfive">5</label>
                            </div>
                            
                            <label class="exp" for="exp">Write your experience about the college</label><br>
    <textarea id="exp" name="exp" placeholder="Write something.." rows="10" cols="50"></textarea>

            </div>
            
            <button type="submit" class="btn btn-primary" name="save_data" >Submit</button>
        </form>
    </div>
</body>
</html>
