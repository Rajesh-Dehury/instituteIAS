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

    
    if(isset($_POST['submitAD'])){
        include "../dbcon.php";
        
        $aId = $_POST['id'];

        $sel="SELECT * FROM `ias_admin`";
        $data=mysqli_query($con,$sel);
        $num_row=mysqli_num_rows($data);

        if($num_row > 1){
            $query="DELETE FROM `ias_admin` WHERE `a_id`='$aId';";
    
            $result=mysqli_query($con,$query);
        }
        
        header('location:adminDashbord.php?content_id=viewAdminProfiles');        
    }
?>