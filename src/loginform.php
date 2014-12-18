<?php include_once('header.php');?>
<?php include_once('config/init.php');?>

<div class="container">
    <div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
	    <h1 class="text-center login-title">Sign in to continue</h1>
		<div class="account-wall">
		    <form class="form-signin" action = 'checklogin.php' method = 'POST'>
			<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<label class="checkbox pull-left">
			<input type="checkbox" value="remember-me">Remember me</label>
			<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
		    </form>
		</div>
	    <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>
