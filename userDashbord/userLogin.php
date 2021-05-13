<?php
    error_reporting(0);
    ob_start();
    session_start();
    
    if($_SESSION['u_id']){
        header('location:dashbord.php');
    }
    else{
        header('location:../');
    }

    include("../dbcon.php");

    if(isset($_POST['u_login'])){
        echo "posted";

        $email = $_POST['umail'];
        $pass  = $_POST['upass'];

        $query="SELECT * FROM `user_login` WHERE `email` ='$email' AND `password` ='$pass';";

        $result=mysqli_query($con,$query);

        $num_row=mysqli_num_rows($result);

        if($num_row < 1){
           echo "no data found";
           header('location:../');
        }
        else{
            // echo "<script>alert('Login Successfull')</script>";
            $data=mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['u_id']=$data['id'];
            $_SESSION['u_mail']=$data['email'];

            header('location:userDashbord.php');
        }
    }else{
        echo "not posted";
    }
?>