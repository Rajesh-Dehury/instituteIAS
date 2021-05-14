<?php
error_reporting(0);
ob_start();
session_start();

if($_SESSION['a_id']){
    // header('location:adminDashbord.php');
}
else{
    header('location:../');
}

include("../dbcon.php");
$id=$_GET['id'];

$query="SELECT * FROM `ias_course` WHERE `c_id` = '$id';";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

?>

<h2 class="text-center mt-5">Create New Course</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form action="updateCourse.php" method="POST">
            <div class="form-group row">
                <label for="c_name" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="c_name" name="c_name" value="<?php echo $row['c_name']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_fee" class="col-sm-4 col-form-label">Eneter Course Fee</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="c_fee" name="c_fee" value="<?php echo $row['c_fee']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <textarea id="c_desc" class="form-control rounded-0" name="c_desc" id="c_desc" rows="3"><?php echo $row['c_desc']; ?></textarea>
                </div>
            </div>
            <input type="hidden" name="c_id" value="<?php echo $_GET['id']?>">
            <button type="submit" class="btn btn-success btn-block rounded-0" id="s_btn" name="s_btn">Submit</button>
        </form>
    </div>
</div>