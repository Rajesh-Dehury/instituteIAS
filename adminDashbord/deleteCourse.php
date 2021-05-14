<!-- this is delete -->

<?php
    error_reporting(0);
    ob_start();
    session_start();
    $id = $_SESSION['a_id'];
    
    if($id){
        // echo $_SESSION['ad_id'];
    }
    else{
        header('location:index.php');
    }

    include "../dbcon.php";
    
    if(isset($_POST['submitCD'])){
        
        $cId = $_POST['id'];

        $query="DELETE FROM `ias_course` WHERE `ias_course`.`c_id` = '$cId'";

        $query1 ="DELETE FROM `ias_course_data` WHERE `ias_course_data`.`c_id` = '$cId'";
        mysqli_query($con,$query);
        mysqli_query($con,$query1);
       
        header('location:adminDashbord.php?content_id=viewCourse');        
    }

    // function functionName($temp_id) {
    //     $query ="DELETE FROM `ias_course_data` WHERE `ias_course_data`.`c_id` = '$temp_id'";
    //     mysqli_query($con,$query);        
    //   }
?>