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

        $c_name = $_POST['c_name'];
        $c_fee = $_POST['c_fee'];
        $c_desc = $_POST['c_desc'];

        $query="INSERT INTO `ias_course` (`c_id`, `c_name`, `c_fee`, `c_desc`, `c_time`, `c_url`) VALUES (NULL, '$c_name', '$c_fee', '$c_desc', current_timestamp(), '')";

        $result=mysqli_query($con,$query);
        if($result == true){
            echo '<script>
            alert("New Course Create Successfully");
            window.location.href="adminDashbord.php?content_id=viewCourse";
            </script>';
        }else{
            echo '<script>
            alert("New Course Creation Faild");
            window.location.href="adminDashbord.php?content_id=viewCourse";
            </script>';
        }
        // header('location:dashbord.php?content_id=viewAdmin');
    }
?>