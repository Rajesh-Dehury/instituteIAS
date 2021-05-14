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

$query="SELECT * FROM `ias_admin` WHERE `a_id` = '$id';";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

?>

<h2 class="text-center mt-5">Update Admin</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form action="updateAdmin.php" method="POST">
            <div class="form-group row">
                <label for="a_name" class="col-sm-4 col-form-label">Full Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" name="a_name" value="<?php echo $row['a_name']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="a_mail" class="col-sm-4 col-form-label">Eneter Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control rounded-0" name="a_mail" value="<?php echo $row['a_mail']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="a_phone" class="col-sm-4 col-form-label">Eneter Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" name="a_phone" value="<?php echo $row['a_phone']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="a_pass" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control rounded-0" id="a_pass" name="a_pass" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_a_pass" class="col-sm-4 col-form-label">Conf. Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control rounded-0" id="c_a_pass" name="c_a_pass" onfocusout="validatePass()" required>
                </div>
            </div>
            <input type="hidden" name="a_id" value="<?php echo $_GET['id']?>">
            <button type="submit" class="btn btn-success btn-block rounded-0" name="submitA" id="s_btn">Submit</button>
        </form>
    </div>
</div>


<script>
    let c_a_pass = document.getElementById('c_a_pass');
    let a_pass  =  document.getElementById('a_pass');
    let s_btn = document.getElementById('s_btn');

    s_btn.disabled = true;

    function validatePass(){
        if(c_a_pass.value == a_pass.value){
            s_btn.disabled = false;
        }else{
            c_a_pass.style.background ="rgba(255,0,0,0.1)";
            s_btn.disabled = true;
        }
    }
</script>