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
?>