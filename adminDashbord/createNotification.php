<h2 class="text-center mt-5">Create New Notification</h2>
<div class="row justify-content-center mt-5">
    <div class="col-lg-6 shadow p-5">
        <form action="addNotification.php" method="POST">
            <div class="form-group row">
                <label for="c_fee" class="col-sm-4 col-form-label">Eneter URL</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control rounded-0" id="n_url" name="n_url" placeholder="Enter URL" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="c_desc" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                    <textarea id="c_desc" class="form-control rounded-0" name="n_desc" id="" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-block rounded-0" name="s_btn">Submit</button>
        </form>
    </div>
</div>