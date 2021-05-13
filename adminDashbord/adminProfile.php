<?php
error_reporting(0);
ob_start();
session_start();

if($_SESSION['u_id']){
    // header('location:userDashbord.php');
}
else{
    // header('location:../');
}

include("../dbcon.php");
$id=$_SESSION['u_id'];
$mail=$_SESSION['u_mail'];

// echo $mail;

$query="SELECT * FROM `user_details` WHERE `email`='$mail';";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

?>




<div>
    <div class="row justify-content-center wrapper mt-5" id="loginBox">
        <div class="col-lg-10 my-auto">
            <div class="card-group shadow ">
                <!-- <div class="card justify-content-center rounded-0 myColor p-0">
                    <img src="https://via.placeholder.com/150x150" alt="" srcset="">
                    <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn"
                        id="registerLink">Sign Up</button>
                </div> -->
                <div class="card rounded-0 p-4" style="flex-grow:1.4;">
                    <div class="row px-3">
                        <h1 class="font-weight-bold text-primary">Admin Profile</h1>
                        <img src="https://via.placeholder.com/150x150" class="ml-auto justify-content-end" alt="" srcset="">
                    </div>
                    <hr class="my-3">
                    <div class="form-group row">
                        <h4 for="staticEmail" class="py-0 col-sm-4 col-form-label">Name :</h4>
                        <div class="col-sm-8">
                            <label for="staticEmail" class="col-form-label"><span
                                    class="text-secondary"><?php echo $row['name']; ?> </span></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4 for="staticEmail" class="py-0 col-sm-4 col-form-label">E-mail : </h4>
                        <div class="col-sm-8">
                            <label for="staticEmail" class="col-form-label"><span
                                    class="text-secondary"><?php echo $row['email']; ?></span></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h4 for="staticEmail" class="py-0 col-sm-4 col-form-label">Phone No :</h4>
                        <div class="col-sm-8">
                            <label for="staticEmail" class="col-form-label"><span
                                    class="text-secondary"><?php echo $row['phone']; ?> </span></label>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <h4 for="staticEmail" class="py-0 col-sm-4 col-form-label">Gender :</h4>
                        <div class="col-sm-8">
                            <label for="staticEmail" class="col-form-label"><span
                                    class="text-secondary"><?php// echo $row['gender']; ?> </span></label>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <h4 for="staticEmail" class="py-0 col-sm-4 col-form-label">Join Date :</h4>
                        <div class="col-sm-8">
                            <label for="staticEmail" class="col-form-label"><span
                                    class="text-secondary"><?php echo $row['time']; ?> </span></label>
                        </div>
                    </div>
                    <a href="" class="btn btn-block btn-primary rounded-0 mt-4">Edit Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.myColor {
    /* background: #e0e0e0; */
}

.myLinkBtn {
    border-radius: 0px;
}

.card img {
    padding: 2px;
    object-fit: cover;
    border-radius: 50px;
    width:50px;
    height:50px;
    background: #0275d8;
    /* box-shadow: 20px 20px 60px #bebebe,
        -20px -20px 60px #ffffff; */
}
</style>