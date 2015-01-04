<?php include_once('common/header.php') ?>
<?php include_once('../config/init.php')?>
<body>
	<div id ="wrap">
		<div id="main" class ="container">

			<div class="col-sm-6 col-md-10 col-md-offset-2">
				<h1>Register</h1>
				<form class="form-horizontal" action ='view/checkregister.php' method ='POST'>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
							<input type="name" class="form-control" name="name" placeholder="Name" value='<?php if(isset($_POST['name'])){echo $_POST['name'];}?>'>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-4">
							<input type="username" class="form-control" name="username" placeholder="UserName" value='<?php if(isset($_POST['username'])){echo $_POST['username'];}?>'>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-4">
							<input type="email" class="form-control" name="email" placeholder="Email" value='<?php if(isset($_POST['email'])){echo $_POST['email'];}?>'>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="password2" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
							<input type="password" class="form-control" name="password2" placeholder="Re-enter Password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-4">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Register!</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>



<?php include_once('common/footer.php')?>

</body>
</html>