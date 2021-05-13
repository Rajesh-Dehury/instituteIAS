<?php
    error_reporting(0);
    ob_start();
    session_start();
    
    // if($_SESSION['u_id']){
    //     header('location:userDashbord.php');
    // }
    // else{
    //     header('location:../');
    // }

    include("../dbcon.php");

    if(isset($_POST['u_register'])){
        echo "posted";

        $name=$_POST['uname'];
        $gender=$_POST['RadioIn'];
        $phone=$_POST['uphone'];
        $email=$_POST['umail'];
        $quali=$_POST['squa'];
        $state=$_POST['state'];
        $dist=$_POST['dist'];
        $pin=$_POST['pin'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        if($pass == $cpass){
            $checkMail=mysqli_query($con,"SELECT * FROM `user_details` WHERE `email` ='$email';");

            // echo var_dump($checkMail);            
            $data_mail=mysqli_fetch_assoc($checkMail);

            if($data_mail==NULL){
                echo var_dump($data_mail);
                $query="INSERT INTO `user_details` (`id`, `name`, `email`, `phone`, `gender`, `qualification`, `state`, `dist`, `pin`, `time`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '$quali', '$state', '$dist', '$pin', current_timestamp());";
                $result=mysqli_query($con,$query);
    
                // insert into user login
                $query2="INSERT INTO `user_login` (`id`, `email`, `phone`, `password`, `time`) VALUES (NULL, '$email', '$phone', '$cpass', current_timestamp());";
                $result2=mysqli_query($con,$query2);
                
                echo '<script>
                    alert("Registation Successfull");
                    window.location.href="../";
                    </script>';
            }else{
                echo '<script>
                    alert("Email Alredy Registered");
                    window.location.href="../";
                    </script>';
            }
        }else{            
            echo '<script>
                alert("Registation Failed..");
                window.location.href="../";
                </script>';
        }
    }

    ?>