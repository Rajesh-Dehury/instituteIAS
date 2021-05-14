<?php
    error_reporting(0);
    ob_start();
    session_start();
    
    if($_SESSION['a_id']){
        // echo $_SESSION['ad_id'];
    }
    else{
        header('location:index.php');
    }

    
    if(isset($_POST['submitA'])){

        include("../dbcon.php");

        $ad_Name = $_POST['a_name'];
        $ad_Mail = $_POST['a_mail'];
        $ad_Phone = $_POST['a_phone'];
        $ad_Pass = $_POST['c_a_pass'];

        // $ad_U_Name = $_POST['ad_u_name'];
        // $ad_Pass_Conf = $_POST['ad_pass_conf'];
        // echo $ad_Pass_Conf;

        $query="INSERT INTO `ias_admin` (`a_id`, `a_name`, `a_mail`, `a_phone`, `a_pass`, `a_time`) VALUES (NULL, '$ad_Name', '$ad_Mail', '$ad_Phone', '$ad_Pass', current_timestamp())";

        $result=mysqli_query($con,$query);
        if($result == true){
            echo '<script>
            alert("New Admin Create Successfully");
            window.location.href="adminDashbord.php?content_id=viewAdminProfiles";
            </script>';
        }else{
            echo '<script>
            alert("New Admin Creation Faild");
            window.location.href="adminDashbord.php?content_id=viewAdminProfiles";
            </script>';
        }
        // header('location:dashbord.php?content_id=viewAdmin');
    }
?>