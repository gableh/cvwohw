<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
	<title>BlogSite</title>
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	<base href="http://localhost/mysite/src/">
	<link href ="static/bootstrap/dist/css/bootstrap.min.css" rel = "stylesheet">
	<link href ="static/css/index.css" rel = "stylesheet">
    </head>
    <body>
    <div class ="header">
	
	</div>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BlogSite</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class= "nav navbar-nav navbar-right">
			    <li class><a href="index.php">Home</a></li>
			    <?php 
				if(!isset($_SESSION['username']))
				{
				    echo '<li><a href="view/register.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
					    <li><a href="view/loginform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
				}
			    ?>
			    <li class = "dropdown">
				<a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Find Us!<b class ="caret"></b></a>
				<ul class = "dropdown-menu">
				    <li><a href= "http://www.twitter.com">Twitter</a></li>
				    <li><a href="http://www.facebook.com">Facebook</a></li>
				</ul>
			    
			    </li>
			    <li><a href="http://www.gmail.com">Contact</a></li>
			    <?php
				if(isset($_SESSION['username']))
				{
				    echo '<li><a href="view/logout.php"><span class ="glyphicon glyphicon-log-out"></span> Logout</a></li>';
				}
			    ?>
			</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>