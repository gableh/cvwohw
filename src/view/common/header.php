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
	<div class = "navbar navbar-inverse">
	    <div class= "container">
		<div class = "navbar-header">
		    <a href = "index.php" class = "navbar-brand">BlogSite</a>
		    <button type ="button" class = "navbar-toggle" data-toggle ="collapse" data-target="#navHeaderCollapse">
			<span class= "icon-bar"></span>
			<span class= "icon-bar"></span>
			<span class= "icon-bar"></span>
		    </button>
		</div>
		    <div class ="collapse navbar-collapse" id = "navHeaderCollapse">
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
		
		</div>
	</div>

