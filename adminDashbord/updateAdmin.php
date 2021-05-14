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
 
    
    if(isset($_POST['submitA'])){

        include "../dbcon.php";

        $a_Id =$_POST['a_id'];
        $a_Name = $_POST['a_name'];
        $a_Mail = $_POST['a_mail'];
        $a_Phone = $_POST['a_phone'];
        $a_Pass = $_POST['a_pass'];

        // $a_U_Name = $_POST['ad_u_name'];
        // $a_Pass_Conf = $_POST['ad_pass_conf'];

        // echo $a_Mail;
        
        $query="UPDATE `ias_admin` SET `a_name` = '$a_Name', `a_mail` = '$a_Mail', `a_phone` = '$a_Phone', `a_pass` = '$a_Pass' WHERE `ias_admin`.`a_id` = '$a_Id';";

        $result=mysqli_query($con,$query);
        
        header('location:adminDashbord.php?content_id=viewAdminProfiles');
    }
?> 


