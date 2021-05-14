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

        $n_id =$_POST['n_id'];
        $n_desc = $_POST['n_desc'];
        $n_url = $_POST['n_url'];

        
        $query="UPDATE `ias_notificarion` SET `n_desc` = '$n_desc', `n_url` = '$n_url' WHERE `ias_notificarion`.`n_id` = '$n_id';";

        $result=mysqli_query($con,$query);
        
        header('location:adminDashbord.php?content_id=viewNotifications');
    }
?> 


