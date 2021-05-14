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

// echo $mail;

$query="SELECT * FROM `ias_course`;";
$result=mysqli_query($con,$query);



?>
<div class="row justify-content-center">
    <?php while($row = mysqli_fetch_array($result)):;?>
    <div class="profile-box col-sm-4 my-5 mx-3 p-3 shadow">
        <p><span>Name :-</span> <?php echo $row['c_name']; ?></p>
        <p><span>Fee :-</span> <?php echo $row['c_fee']; ?></p>
        <h6>description</h6>
        <p> <?php echo $row['c_desc']; ?></p>

        <form action="deleteCourse.php" method="POST">
            <a class="btn btn-success rounded-0 px-3"
                href="adminDashbord.php?content_id=updateCourseForm&id=<?php echo $row['c_id'];  ?>">Update</a>
            <button type="submit" name="submitCD" class="btn btn-danger rounded-0 px-5"
                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            <a class="btn btn-info rounded-0 px-2" href="adminDashbord.php?content_id=addCourseData&id=<?php echo $row['c_id'];  ?>">Upload file</a>
            <input type="hidden" name="id" value="<?php echo $row['c_id']; ?>">
        </form>
    </div>
    <?php endwhile; ?>
</div>

<style>
.myAdd {
    font-size: 100px;
}

.myAdd:hover {
    color: #000 !important;
}
</style>