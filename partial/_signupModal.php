<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SignUp to get aDiscuss account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partial/_handleSignup.php" method="POST">
                    <div class="form-group">
                        <label for="username"><strong>Full Name</strong></label>
                        <input type="text" class="form-control text-uppercase" id="username" name="username"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="signupEmail"><strong>Email</strong></label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="signupPass"><strong>Password</strong></label>
                        <input type="password" class="form-control" id="signupPass" name="signupPass">
                    </div>
                    <div class="form-group">
                        <label for="cPassword"><strong>Confrim Password</strong></label>
                        <input type="password" class="form-control" id="cPassword" name="cPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>