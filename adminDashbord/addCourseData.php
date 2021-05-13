<h2 class="text-center mt-5">Attach File Course</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form>
            <div class="form-group row">
                <label for="c_name" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="c_name"value="value" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_fee" class="col-sm-4 col-form-label">URL</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="c_fee" placeholder="External URL" >
                </div>
            </div>
            <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Upload Pdf</label>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" accept="application/pdf">
                    </div>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Add sub catagory</label>
                <div class="col-sm-6">                    
                <input type="text" class="form-control rounded-0" id="acs" placeholder="External URL" >
                </div>
                <a class="btn btn-success rounded-0" id="add">Add</a>
            </div> -->
            
            <button type="submit" class="btn btn-success btn-block rounded-0 mt-5" id="s_btn">Submit</button>
        </form>
    </div>
</div>
<script>
let acs = document.getElementById('acs');
let aCS = document.getElementById('aCS');
let arr =[];
// let val ='';

document.getElementById('add').onclick=function(){
    arr.push("<span>"+acs.value+"</span>");
    acs.value = '';
    aCS.innerHTML="";
    arr.forEach(AddEle);
}
function AddEle(value){

}

</script>