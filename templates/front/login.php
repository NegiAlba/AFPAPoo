<?php
  $title = 'AFPA SN MVC - Login';
  
  ob_start();
?>

<div class="container mt-4">
    <div class="row">
        <aside class="col-sm-6">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Login</h4>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Your email</label>
                            <input name="login_email" class="form-control" placeholder="Email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <a class="float-right" href="#">Forgot?</a>
                            <label>Your password</label>
                            <input name="login_password" class="form-control" placeholder="******" type="password">
                        </div> <!-- form-group// --> 
                        <div class="form-group"> 
                        <div class="checkbox">
                        <label> <input type="checkbox"> Save password </label>
                        </div> <!-- checkbox .// -->
                        </div> <!-- form-group// -->  
                        <div class="form-group">
                            <button name="login_submit" type="submit" class="btn btn-primary btn-block"> Login  </button>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </article>
            </div> <!-- card.// -->
        </aside>
        <aside class="col-sm-6">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Sign Up</h4>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Your email</label>
                            <input name="signup_email" class="form-control" placeholder="Email" type="email">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Your Username</label>
                            <input name="signup_username" class="form-control" placeholder="Username" type="text">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Your password</label>
                            <input class="form-control" placeholder="******" type="password" name="signup_password">
                        </div> <!-- form-group// --> 
                        <div class="form-group">
                            <label>Re-type your password</label>
                            <input class="form-control" placeholder="******" type="password" name="signup_password2">
                        </div> <!-- form-group// --> 
                        <div class="form-group"> 
                        <div class="checkbox">
                        <label> <input type="checkbox"> Save password </label>
                        </div> <!-- checkbox .// -->
                        </div> <!-- form-group// -->  
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="signup_submit"> Sign Up  </button>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </article>
            </div> <!-- card.// -->
        </aside>
    </div> 
</div>

<?php
  $content = ob_get_clean();
  require '../templates/base.php';
  ?>



