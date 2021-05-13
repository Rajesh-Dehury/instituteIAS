<div class="modal fade" id="studentRegisterModal" tabindex="-1" data-backdrop="static" aria-labelledby="studentRegisterModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-100 w-75">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentRegisterModal">Registation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="userDashbord/userRegister.php" method="post">
                    <div class="form-group row">
                        <label for="sName" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control rounded-0" name="uname" id="sName"
                                placeholder="Name">
                        </div>
                        <div class="col-sm-2 mt-2">
                            <label for="inputFName">Gender</label>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="RadioIn" value="Male"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="RadioIn" value="Female"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Female</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="RadioIn" value="Others"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">Others</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sPhone" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control rounded-0" id="sPhone" name="uphone"
                                placeholder="Phone">
                        </div>
                        <label for="sMail" class="col-sm-2 col-form-label">E-mail Id</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control rounded-0" id="sMail" name="umail"
                                placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sQua" class="col-sm-2 col-form-label">Qualification</label>
                        <div class="col-sm-10">
                            <select class="form-control rounded-0" id="sQua" name="squa" required>
                                <option>10th</option>
                                <option>+2</option>
                                <option>+3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sState" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control rounded-0" name="state" id="sState"
                                placeholder="State">
                        </div>
                        <label for="sDist" class="col-sm-2 col-form-label">District</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control rounded-0" name="dist" id="sDist"
                                placeholder="District" required>
                        </div>
                        <label for="sPin" class="col-sm-2 col-form-label">Pin / Zip</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control rounded-0" name="pin" id="sPin"
                                placeholder="Pin code">
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="form-group row">
                        <label for="sPass" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control rounded-0" id="sPass" placeholder="New Password"
                                name="pass" minlength="5" required>
                        </div>
                        <label for="scPass" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control rounded-0" id="scPass" name="cpass"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row justify-content-end">
                        <a href="" type="button" class="btn btn-secondary rounded-0 px-5 mx-3"
                            data-dismiss="modal">Cancel</a>
                        <button type="submit" id="rbtn" class="btn btn-success rounded-0 px-5 mx-3"
                            name="u_register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

 </script>
