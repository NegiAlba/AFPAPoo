<?php
    var_dump($_POST);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<div class="row mt-4">
<aside class="col-sm-6">
<div class="card">
<article class="card-body">
<h4 class="card-title mb-4 mt-1">Login</h4>
	 <form>
    <div class="form-group">
    	<label>Your email</label>
        <input name="" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<a class="float-right" href="#">Forgot?</a>
    	<label>Your password</label>
        <input class="form-control" placeholder="******" type="password">
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Save password </label>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card.// -->
</aside>
<aside class="col-sm-6">
    <div class="card">
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">Sign Up</h4>
            <form method="POST" action="process.php">
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
<!--container end.//-->
</article>

</div>