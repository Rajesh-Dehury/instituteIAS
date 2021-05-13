<div class="modal fade" id="studentLoginModal" tabindex="-2" data-backdrop="static" role="dialog"
    aria-labelledby="studentLoginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Log in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Register with mail -->
            <form action="userDashbord/userLogin.php" method="post" id="uLogin" autocomplete="off">
                <div class="modal-body">
                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="email" name="umail" autocomplete="off" id="email" class="form-control rounded-0"
                            placeholder="E-mail" required>
                    </div>
                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="password" name="upass" autocomplete="off" id="password"
                            class="form-control rounded-0" placeholder="Password" required>
                    </div>
                    <div class="input-group input-group-lg form-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg rounded-0 px-5"
                            value="u_login" name="u_login">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>