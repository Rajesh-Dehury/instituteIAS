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
<h2 class="text-center mt-5">Attach File Course</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form action="addCoursePDF.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="c_name" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="c_name" name="c_name"
                        value="<?php echo $row['c_name']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_fee" class="col-sm-4 col-form-label">URL</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="c_url" name="c_url" placeholder="External URL">
                </div>
            </div>
            <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Upload Pdf</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="c_file" name="c_pdf" accept="application/pdf">
                    </div>
                    <!-- <div class="custom-file">
                        <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"
                            accept="application/pdf">
                    </div> -->
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Add sub catagory</label>
                <div class="col-sm-6">                    
                <input type="text" class="form-control rounded-0" id="acs" placeholder="External URL" >
                </div>
                <a class="btn btn-success rounded-0" id="add">Add</a>
            </div> -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-success btn-block rounded-0 mt-5" name="s_btn" id="s_btn">Submit</button>
        </form>
    </div>
</div>
<script>
let acs = document.getElementById('acs');
let aCS = document.getElementById('aCS');
let arr = [];
// let val ='';

document.getElementById('add').onclick = function() {
    arr.push("<span>" + acs.value + "</span>");
    acs.value = '';
    aCS.innerHTML = "";
    arr.forEach(AddEle);
}

function AddEle(value) {

}
</script>