<!-- this is view students -->

<div class="container my-3">
    <form action="">
        <div class="row shadow pt-3 px-3">
            <div class="form-group col-2 p-0">
                <select class="form-control rounded-0" id="">
                    <option>All</option>
                    <option>By Name</option>
                    <option>By Phone</option>
                    <option>By Date</option>
                </select>
            </div>
            <div class="col-8 p-0">
                <input type="text" class="form-control rounded-0" placeholder="Search Student">
            </div>
            <div class="col-2 p-0">
                <button type="button" class="btn btn-success rounded-0 btn-block">Search</button>
            </div>
        </div>
    </form>
</div>


<!-- result -->

<div class="col justify-content-center shadow pb-3 mt-5">
<div class="row py-3 px-3">
        <div class="col-sm-1">
            SL NO
        </div>
        <div class="col-sm-2">
            DATE
        </div>
        <div class="col-sm-4">
           NAME
        </div>
        <div class="col-sm-3">
           CONTACT
        </div>
        <div class="col-sm-2">
            VIEW DETAILS
        </div>
    </div>
   
    <div class="row py-1 px-3">
        <div class="col-sm-1 m-0 p-0 alert alert-primary rounded-0">
            <p class="p-1 m-0">1</p>
        </div>
        <div class="col-sm-2 m-0 p-0 alert alert-primary rounded-0">
            <p class="p-1 m-0">01/05/2021</p>
        </div>
        <div class="col-sm-4 m-0 p-0 alert alert-primary rounded-0">
            <p class="m-0 p-1 align-self-center">Student Name</p>
        </div>
        <div class="col-sm-3 m-0 p-0 alert alert-primary rounded-0">
            <p class="m-0 p-1 align-self-center">9090909090 </p>
        </div>
        <div class="col-sm-2 m-0 p-0 alert alert-primary rounded-0">
            <a href="adminDashbord.php?content_id=viewStudentRecord" class="btn btn-info rounded-0 btn-block">View Details</a>
        </div>
    </div>
</div>