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

$query="SELECT * FROM `ias_notificarion` WHERE `n_id` = '$id';";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

?>

<h2 class="text-center mt-5">Update Notification</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form action="updateNotification.php" method="POST">
            <div class="form-group row">
                <label for="c_fee" class="col-sm-4 col-form-label">Eneter URL</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="n_url" name="n_url"value="<?php echo $row['n_url']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <textarea id="c_desc" class="form-control rounded-0" name="n_desc" id="" rows="3"><?php echo $row['n_desc']; ?></textarea>
                </div>
            </div>
            <input type="hidden" name="n_id" value="<?php echo $_GET['id']?>">
            <button type="submit" class="btn btn-success btn-block rounded-0" name="s_btn">Submit</button>
        </form>
    </div>
</div>