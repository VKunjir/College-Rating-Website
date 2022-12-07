<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM review WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['edit_data']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $stream = mysqli_real_escape_string($con, $_POST['stream']);
    $education = mysqli_real_escape_string($con, $_POST['education']);
    $faculty = mysqli_real_escape_string($con, $_POST['faculty']);
    $infrastructure = mysqli_real_escape_string($con, $_POST['infrastructure']);
    $accomodation = mysqli_real_escape_string($con, $_POST['accomodation']);
    $higherEdu = mysqli_real_escape_string($con, $_POST['higherEdu']);
    $placements = mysqli_real_escape_string($con, $_POST['placements']);
    $clubs = mysqli_real_escape_string($con, $_POST['clubs']);
    $overall = mysqli_real_escape_string($con, $_POST['overall']);
    $exp = mysqli_real_escape_string($con, $_POST['exp']);

    $query = "UPDATE review SET name='$name', college='$college', stream='$stream', education='$education',faculty='$faculty',infrastructure='$infrastructure',accomodation='$accomodation',higherEdu='$higherEdu',placements='$placements',clubs='$clubs',overall='$overall',exp='$exp' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index2.php");
        exit(0);
    }

}


if(isset($_POST['save_data']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $stream = mysqli_real_escape_string($con, $_POST['stream']);
    $education = mysqli_real_escape_string($con, $_POST['education']);
    $faculty = mysqli_real_escape_string($con, $_POST['faculty']);
    $infrastructure = mysqli_real_escape_string($con, $_POST['infrastructure']);
    $accomodation = mysqli_real_escape_string($con, $_POST['accomodation']);
    $higherEdu = mysqli_real_escape_string($con, $_POST['higherEdu']);
    $placements = mysqli_real_escape_string($con, $_POST['placements']);
    $clubs = mysqli_real_escape_string($con, $_POST['clubs']);
    $overall = mysqli_real_escape_string($con, $_POST['overall']);
    $exp = mysqli_real_escape_string($con, $_POST['exp']);

    $query = "INSERT INTO review (name, college, stream, education, faculty, infrastructure, accomodation, higherEdu, placements, clubs, overall, exp) VALUES ('$name', '$college', '$stream', '$education', '$faculty', '$infrastructure', '$accomodation', '$higherEdu', '$placements', '$clubs', '$overall', '$exp')" ;
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Saved Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Saved";
        header("Location: index2.php");
        exit(0);
    }
}
    if(isset($_POST['str'])){
        $str=mysqli_real_escape_string($con,$_POST['str1']);
        $sql="select * from review where college like '%$str%' ";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<a href='view.php?id=".$row['id'].$row['college']."</a>";
                echo "<br/>";
            }
        }else{
             echo "No data found";
        }
    }
              
    
    
?>