<?php
error_reporting(0);
ob_start();
session_start();

if($_SESSION['a_id']){

}else{
    header('location :../');
}

include('../dbcon.php');

$path="../pdfs";
$c_name =$_POST['c_name'];
$c_url =$_POST['c_url'];
$c_id =$_POST['id'];

$c_pdf = $_FILES['c_pdf']['name'];
$c_pdf_tmp = $_FILES['c_pdf']['tmp_name'];

$query = "INSERT INTO `ias_course_data` (`cd_id`, `c_id`, `c_url`, `c_file_name`) VALUES (NULL, '$c_id', '$c_url', '$c_pdf')";

if(!is_dir($path."/")) {
    mkdir($path."/");
    // Move the uploaded file
    move_uploaded_file($c_pdf_tmp, $path."/$c_pdf");
    $result=mysqli_query($con,$query);
    echo '<script>
    alert("File Upload Successfully");
    window.location.href="adminDashbord.php?content_id=viewCourse";
    </script>';
}else{
    move_uploaded_file($c_pdf_tmp, $path."/$c_pdf");
    $result=mysqli_query($con,$query);
    echo '<script>
    alert("File Upload Successfully");
    window.location.href="adminDashbord.php?content_id=viewCourse";
    </script>';
}


?>