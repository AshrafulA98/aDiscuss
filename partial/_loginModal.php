<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to your aDiscuss account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partial/_handleLogin.php" method="POST">
                    <div class="form-group">
                        <label for="loginEmail"><strong>username</strong></label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">enter your username or email to login
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="loginPass"><strong>Password</strong></label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>