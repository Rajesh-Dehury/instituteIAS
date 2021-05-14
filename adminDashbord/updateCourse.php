<!-- Update Admin Profile -->
<?php
    error_reporting(0);
    ob_start();
    session_start();
    
    // if($_SESSION['a_id']){
    //     // echo $_SESSION['ad_id'];
    // }
    // else{
    //     header('location:index.php');
    // }
 
    
    if(isset($_POST['s_btn'])){

        include "../dbcon.php";

        $c_Id =$_POST['c_id'];
        $c_Name =$_POST['c_name'];
        $c_Fee =$_POST['c_fee'];
        $c_Desc =$_POST['c_desc'];
        
        $query="UPDATE `ias_course` SET `c_name` = '$c_Name', `c_fee` = '$c_Fee', `c_desc` = '$c_Desc' WHERE `ias_course`.`c_id` = '$c_Id';";

        $result=mysqli_query($con,$query);
        
        header('location:adminDashbord.php?content_id=viewCourse');
    }
?> 


