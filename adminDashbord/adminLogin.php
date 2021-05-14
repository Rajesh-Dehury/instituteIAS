<?php
    error_reporting(0);
    ob_start();
    session_start();
    
    if($_SESSION['a_id']){
        header('location:adminDashbord.php');
    }
    else{
        header('location:../');
    }

    include("../dbcon.php");

    if(isset($_POST['a_login'])){
        echo "posted";

        $email = $_POST['amail'];
        $pass  = $_POST['apass'];

        $query="SELECT * FROM `ias_admin` WHERE `a_mail` ='$email' AND `a_pass` = '$pass';";

        $result=mysqli_query($con,$query);

        $num_row=mysqli_num_rows($result);

        if($num_row < 1){
           echo "no data found";
           header('location:../');
        }
        else{
            $data=mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['a_id']=$data['a_id'];
            $_SESSION['a_mail']=$data['a_mail'];

            header('location:adminDashbord.php');
        }
    }else{
        echo "not posted";
    }
?>