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

    
    if(isset($_POST['s_btn'])){

        include("../dbcon.php");

        $n_desc = $_POST['n_desc'];
        $n_url = $_POST['n_url'];

        $query="INSERT INTO `ias_notificarion` (`n_id`, `n_desc`, `n_url`, `n_time`) VALUES (NULL, '$n_desc', '$n_url', current_timestamp())";

        $result=mysqli_query($con,$query);
        if($result == true){
            echo '<script>
            alert("New Notification Create Successfully");
            window.location.href="adminDashbord.php?content_id=viewAdminProfiles";
            </script>';
        }else{
            echo '<script>
            alert("New Notification Creation Faild");
            window.location.href="adminDashbord.php?content_id=viewAdminProfiles";
            </script>';
        }
        header('location:adminDashbord.php?content_id=viewNotifications');
    }
?>