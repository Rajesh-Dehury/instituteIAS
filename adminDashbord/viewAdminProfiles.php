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
$id=$_SESSION['a_id'];
$mail=$_SESSION['a_mail'];

// echo $mail;

$query="SELECT * FROM `ias_admin` ;";
$result=mysqli_query($con,$query);



?>

<div class="row justify-content-center mt-5">
    <?php while($row = mysqli_fetch_array($result)):;?>
    <div class="profile-box col-sm-4 border p-3 my-3 mx-3">
        <p class="">Name<span class="ml-5 text-dark-50 text-capitalize"> <?php echo $row['a_name']; ?></span></p>
        <p class="">Email<span class="ml-5 text-dark-50"> <?php echo $row['a_mail']; ?></span></p>
        <p class="">Phone<span class="ml-5 text-dark-50"> <?php echo $row['a_phone']; ?></span></p>
        <p class="">Join Date<span class="ml-5 text-dark-50"> <?php echo $row['a_time']; ?></span></p>
        <form action="deleteAdmin.php" method="POST">
            <a href="adminDashbord.php?content_id=updateAdminForm&id=<?php echo $row['a_id']; ?>"
                class="btn btn-info rounded-0 px-5">Edit</a>
            <input type="hidden" name="id" value="<?php echo $row['a_id']; ?>">
            <button type="submit" name="submitAD" class="btn btn-danger rounded-0 px-5"
                onclick="return confirm('Are you sure you want to delete this item?');"
                id="<?php echo $row['a_id']; ?>">Delete</button>
        </form>
    </div>
    <?php endwhile; ?>

    <div class="profile-box col-sm-4 p-3 my-3 mx-3">
        <div class="row justify-content-center p-5">
            <a href="adminDashbord.php?content_id=createAdmin"><i
                    class="fa fa-plus-circle myAdd text-center text-secondary " aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<style>
.myAdd {
    font-size: 100px;
}

.myAdd:hover {
    color: #000 !important;
}
</style>


<?php echo "<script>
    document.getElementById('$id').disabled = true;
</script>"?>