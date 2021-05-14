<!-- this is delete -->

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

    
    if(isset($_POST['submitCD'])){
        include "../dbcon.php";
        
        $aId = $_POST['id'];

        $query="DELETE FROM `ias_notificarion` WHERE `n_id`='$aId';";

        $result=mysqli_query($con,$query);
        

        header('location:adminDashbord.php?content_id=viewNotifications');        
    }
?>