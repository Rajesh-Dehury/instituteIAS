<!-- this is notification -->

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

$query="SELECT * FROM `ias_notificarion`;";
$result=mysqli_query($con,$query);
$count=0;


?>

<div class="col justify-content-center shadow mt-5 pb-3">
    <div class="row p-3">
        <div class="col-sm-1">
            SL NO
        </div>
        <div class="col-sm-7">
            DESCRIPTION
        </div>
        <div class="col-sm-2">
            UPDATE
        </div>
        <div class="col-sm-2">
            DELETE
        </div>
    </div>
    
    <?php while($row = mysqli_fetch_array($result)):;?>

    <div class="row py-1 px-3">
        <div class="col-sm-1 m-0 p-0 alert alert-primary rounded-0">
            <p class="p-1 m-0"><?php echo ++$count; ?></p>
        </div>
        <div class="col-sm-7 m-0 p-0 alert alert-primary rounded-0">
            <a href="<?php echo $row['n_desc']; ?>" target="_blank"><p class="m-0 p-1 align-self-center"> <?php echo $row['n_desc']; ?></p></a>
        </div>
        <form action="deleteNotification.php" method="POST">
            <a href="adminDashbord.php?content_id=updateNotificationForm&id=<?php echo $row['n_id'];  ?>" class="btn btn-info rounded-0 px-5">Update</a>
            <button type="submit" name="submitCD" class="btn btn-danger rounded-0 px-5"
                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            <input type="hidden" name="id" value="<?php echo $row['n_id']; ?>">
        </form>
    </div>
    <?php endwhile; ?>
</div>